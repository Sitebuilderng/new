<?php
class Website extends Model {
	public $errors;
	public $server_api_key;
	public $server_api_domain;
	public $licensing_api_key;
	public $licensing_email;
	public $freetrial_redirect;
	public $brand_id;
	public $freetrial_duration;
	public $langs;
	public $websiteid;
	public $data;
	public $fees;
	public $fees_annual;
	public $lite_mode;
	public $webthumb_user_id;
	public $webthumb_api_key;
	public $plan;
	public $plans;
	public $default_plan;
	public $thirtydaytrial;
	public $domain;
	public function getPrice()
	{

		$website = $this->query('SELECT * FROM websites WHERE websitesid="'.$this->escapeString($this->websiteid).'"');

		$currentfeatures['unlimited_pages']=$website[0]->unlimited_pages;
		$currentfeatures['blog']=$website[0]->blog;
		$currentfeatures['unlimited_blog']=$website[0]->unlimited_blog;
		$currentfeatures['mailing_lists']=$website[0]->mailing_lists;
		$currentfeatures['shop']=$website[0]->shop;
		$currentfeatures['unlimited_products']=$website[0]->unlimited_products;
		$currentfeatures['livechat']=$website[0]->livechat;
		$currentfeatures['video']=$website[0]->video;
		$currentfeatures['galleries']=$website[0]->galleries;
		$currentfeatures['contact_forms']=$website[0]->contact_forms;
		$currentfeatures['calendar']=$website[0]->calendar;
		$currentfeatures['unlimited_staff']=$website[0]->unlimited_staff;

		$price=0;

		if (isset($this->plans[$website[0]->plan])) {
			// if plan exists, create array of included features
			$plans = explode(",",$this->plans[$website[0]->plan]['includes']);
			if ($website[0]->annual) {
				$price = $this->plans[$website[0]->plan]['price_annual'];
			} else {
				$price = $this->plans[$website[0]->plan]['price'];				
			}

		}

		foreach ($currentfeatures as $feature => $currentvalue) {
			if ($currentvalue=="1" && !in_array($feature,$plans))  { // Only add if it's enabled and not already enabled by current plan
				if ($website[0]->annual) {
					$price=$price+$this->fees_annual[$feature];
				} else {
					$price=$price+$this->fees[$feature];					
				}
			}
		}
		$c = $this->query('SELECT * FROM coupons WHERE claimed_by_users_id="'.$website[0]->belongs_to_user.'" AND expires > NOW()');
		if ($c) {
			$dc = 100-$c[0]->discount;
			$price = $dc * $price / 100;
		}

		return $price;
	}
	public function applyBalanceMonthly()
	{
		$expired = $this->query('SELECT * FROM websites WHERE payment_expires < NOW() and created=1');
		foreach ($expired as $website) {
			$thirty_days_in_seconds = 30*86400;
			$year_in_seconds=365*86400;
			if ($website->annual) {
				$expiresTimestamp = time()+$year_in_seconds;
			} else {
				$expiresTimestamp = time()+$thirty_days_in_seconds;				
			}

			$this->websiteid=$website->websitesid;
			$price = $this->getPrice();
			$this->execute('UPDATE websites SET free_trial=0, payment_expires="'.$this->to_datetime($expiresTimestamp).'", balance=balance-"'.$price.'" WHERE `websitesid`='.$website->websitesid);
		}
	}
	public function getPriceDifference()
	{

		$newdata = json_decode($this->data,true);
		$newfeatures = $newdata[0];
		$price=$this->getPrice();
		$newprice=0;

		$website = $this->query('SELECT payment_expires,belongs_to_user,annual FROM websites WHERE websitesid="'.$this->escapeString($this->websiteid).'"');


		if (isset($this->plans[$this->plan])) {
			// if plan exists, create array of included features
			$plans = explode(",",$this->plans[$this->plan]['includes']);
			if ($website[0]->annual) {
				$newprice = $this->plans[$this->plan]['price_annual'];
			} else {
				$newprice = $this->plans[$this->plan]['price'];				
			}

		}


		foreach ($newfeatures as $feature => $value) {
			if ($value=="1" && !in_array($feature,$plans))  { // don't add if in plan
				if ($website[0]->annual) { 
					$newprice=$newprice+$this->fees_annual[$feature];
				} else {
					$newprice=$newprice+$this->fees[$feature];					
				}
			}
		}

		$c = $this->query('SELECT * FROM coupons WHERE claimed_by_users_id="'.$website[0]->belongs_to_user.'" AND expires > NOW()');
		if ($c) {
			$dc = 100-$c[0]->discount;
			$newprice = $dc * $newprice / 100;
		}

		if ($price<$newprice) {
			// apply a charge
			$diff = $newprice-$price;
			$charge=true;
		} else {
			// apply a credit
			$diff = $price-$newprice;
			$charge=false;
		}


		$expires = strtotime($website[0]->payment_expires);
		$halfdaysleft = floor(($expires - time()) / 43200);
		if ($website[0]->annual) { 
			$oneday = $diff/730;
		}else {
			$oneday = $diff/60;			
		}

		$remainder = round($oneday*$halfdaysleft,2);
		if ($charge) {
			$this->execute('UPDATE websites SET balance=balance-'.$remainder.',last_saved=now(),disabled=0 WHERE `websitesid`='.$this->escapeString($this->websiteid));
		} else {
			$this->execute('UPDATE websites SET balance=balance+'.$remainder.',last_saved=now(),disabled=0 WHERE `websitesid`='.$this->escapeString($this->websiteid));
		}

		$balance = $this->query('SELECT balance FROM websites WHERE websitesid='.$this->escapeString($this->websiteid).'');
		if($balance[0]->balance>=0) {
			$update = $this->execute('UPDATE websites SET
				push_to_hub=1
				WHERE websitesid='.$this->escapeString($this->websiteid));
		}


	}
	public function pushToHub()
	{
		$websites = $this->query('SELECT * FROM websites WHERE push_to_hub=1');
		foreach ($websites as $website) {
			if (isset($this->plans[$website->plan])) {
				// if plan exists, create array of included features
				$plans = explode(",",$this->plans[$website->plan]['includes']);
			}

			if ($website->unlimited_pages=="1" || in_array("unlimited_pages",$plans)) {
				$limit_pages="0";
			} else {
				$limit_pages=$this->lite_mode['pages'];
			}
			if ($website->unlimited_products=="1" || in_array("unlimited_products",$plans)) {
				$limit_products="0";
			} else {
				$limit_products=$this->lite_mode['products'];
			}
			if ($website->unlimited_staff=="1" || in_array("unlimited_staff",$plans)) {
				$limit_staff="0";
			} else {
				$limit_staff=$this->lite_mode['staff'];
			}
			if ($website->unlimited_blog=="1" || in_array("unlimited_blog",$plans)) {
				$limit_blogs="0";
			} else {
				$limit_blogs=$this->lite_mode['blogs'];
			}
			if ($website->mailing_lists=="1" || in_array("mailing_lists",$plans)) {
				$disable_mailing_lists="0";
			} else {
				$disable_mailing_lists="1";
			}
			if ($website->livechat=="1" || in_array("livechat",$plans)) {
				$disable_livechat="0";
			} else {
				$disable_livechat="1";
			}
			if ($website->video=="1" || in_array("video",$plans)) {
				$disable_videos="0";
			} else {
				$disable_videos="1";
			}
			if ($website->galleries=="1" || in_array("galleries",$plans)) {
				$disable_galleries="0";
			} else {
				$disable_galleries="1";
			}
			if ($website->contact_forms=="1" || in_array("contact_forms",$plans)) {
				$disable_forms="0";
			} else {
				$disable_forms="1";
			}
			if ($website->shop=="1" || in_array("shop",$plans)) {
				$disable_products="0";
			} else {
				$disable_products="1";
			}
			if ($website->calendar=="1" || in_array("calendar",$plans)) {
				$disable_calendars="0";
			} else {
				$disable_calendars="1";
			}
			if ($website->livechat=="1" || in_array("livechat",$plans)) {
				$disable_livechat="0";
			} else {
				$disable_livechat="1";
			}
			if ($website->blog=="1" || in_array("blog",$plans)) {
				$disable_blogs="0";
			} else {
				$disable_blogs="1";
			}

			$body = array(
				'limit_pages'=>$limit_pages
				,'limit_products'=>$limit_products
				,'limit_blogs'=>$limit_blogs
				,'disable_videos'=>$disable_videos
				,'disable_galleries'=>$disable_galleries
				,'disable_forms'=>$disable_forms
				,'disable_products'=>$disable_products
				,'disable_calendars'=>$disable_calendars
				,'disable_livechat'=>$disable_livechat
				,'disable_mailing_list'=>$disable_mailing_lists
				,'disable_blog'=>$disable_blogs
				,'limit_staff'=>$limit_staff
				,'disable_design'=>1
			);

	    	$request = new SWBRestRequest("http://".$this->server_api_domain."/sh/api/sites/".$website->domain, 'PUT', $body);
			$request->authHeaders  = array(
		        "SetSeed-Hub-API-Key: ".$this->server_api_key
				);

			$request->execute();

			$response = json_decode($request->responseBody);
			$code = $request->responseInfo['http_code'];
			if ($code==200) {
				$update = $this->execute('UPDATE websites SET
					push_to_hub=0
					WHERE websitesid='.$website->websitesid);
			}

		}







	}
	public function updateDomain()
	{

		$domain = $this->escapeString($this->domain);
		$id = $this->escapeString($this->websitesid);

		$body = array(
			'domain'=>$domain
		);
		$olddomain = $this->query('SELECT domain FROM websites WHERE websitesid='.$id);

		$request = new SWBRestRequest("http://".$this->server_api_domain."/sh/api/sites/".$olddomain[0]->domain, 'PUT', $body);
		$request->authHeaders  = array(
					"SetSeed-Hub-API-Key: ".$this->server_api_key
			);

		$request->execute();

		$response = json_decode($request->responseBody);

		$code = $request->responseInfo['http_code'];
		if ($code==200) {
			$update = $this->execute('UPDATE websites SET
				domain="'.$domain.'"
				WHERE websitesid='.$id);
			return true;
		} else {
			return false;
		}
	}
	public function deleteWebsite()
	{

		$id = $this->escapeString($this->websitesid);

		$olddomain = $this->query('SELECT * FROM websites WHERE websitesid='.$id);

		if ($olddomain[0]->failed=="1") {
			$update = $this->execute('DELETE FROM websites
				WHERE websitesid='.$id);
			return true;
		} else {

			$request = new SWBRestRequest("http://".$this->server_api_domain."/sh/api/sites/".$olddomain[0]->domain, 'DELETE');
			$request->authHeaders  = array(
						"SetSeed-Hub-API-Key: ".$this->server_api_key
				);
			$request->execute();

			$response = json_decode($request->responseBody);
			$code = $request->responseInfo['http_code'];
		
			if ($code==204) {
				$update = $this->execute('DELETE FROM websites
					WHERE websitesid='.$id);
				return true;
			} else {
				return false;
			}
		}
	}
	public function updatePackageOk()
	{
		$website = $this->query('SELECT * FROM websites WHERE websitesid="'.$this->escapeString($this->websiteid).'"');
		$newdata = json_decode($this->data,true);
		$newfeatures = $newdata[0];

		if (isset($this->plans[$this->plan])) {
			// if plan exists, create array of included features
			$plans = explode(",",$this->plans[$this->plan]['includes']);
		}


		if ($newfeatures['unlimited_pages']=="1" || in_array("unlimited_pages",$plans)) {
			$limit_pages="0";
		} else {
			$limit_pages=$this->lite_mode['pages'];
		}
		if ($newfeatures['unlimited_products']=="1" || in_array("unlimited_products",$plans)) {
			$limit_products="0";
		} else {
			$limit_products=$this->lite_mode['products'];
		}
		if ($newfeatures['unlimited_staff']=="1" || in_array("unlimited_staff",$plans)) {
			$limit_staff="0";
		} else {
			$limit_staff=$this->lite_mode['staff'];
		}
		if ($newfeatures['unlimited_blog']=="1" || in_array("unlimited_blog",$plans)) {
			$limit_blogs="0";
		} else {
			$limit_blogs=$this->lite_mode['blogs'];
		}
		if ($newfeatures['mailing_lists']=="1" || in_array("mailing_lists",$plans)) {
			$disable_mailing_lists="0";
		} else {
			$disable_mailing_lists="1";
		}
		if ($newfeatures['livechat']=="1" || in_array("livechat",$plans)) {
			$disable_livechat="0";
		} else {
			$disable_livechat="1";
		}
		if ($newfeatures['video']=="1" || in_array("video",$plans)) {
			$disable_videos="0";
		} else {
			$disable_videos="1";
		}
		if ($newfeatures['galleries']=="1" || in_array("galleries",$plans)) {
			$disable_galleries="0";
		} else {
			$disable_galleries="1";
		}
		if ($newfeatures['contact_forms']=="1" || in_array("contact_forms",$plans)) {
			$disable_forms="0";
		} else {
			$disable_forms="1";
		}
		if ($newfeatures['shop']=="1" || in_array("shop",$plans)) {
			$disable_products="0";
		} else {
			$disable_products="1";
		}
		if ($newfeatures['calendar']=="1" || in_array("calendar",$plans)) {
			$disable_calendars="0";
		} else {
			$disable_calendars="1";
		}
		if ($newfeatures['livechat']=="1" || in_array("livechat",$plans)) {
			$disable_livechat="0";
		} else {
			$disable_livechat="1";
		}
		if ($newfeatures['blog']=="1" || in_array("blog",$plans)) {
			$disable_blogs="0";
		} else {
			$disable_blogs="1";
		}
		$domain_register=0;
		$domain_cancel=0;
		
		if ($website[0]->domain_registered==0&&$newfeatures['domain_registration']=="1") {
			$domain_register=1;
		}
		if ($website[0]->domain_registered==1&&$newfeatures['domain_registration']=="0") {
			$domain_cancel=1;
		}

		/*
		$body = array(
			'limit_pages'=>$limit_pages
			,'limit_products'=>$limit_products
			,'limit_blogs'=>$limit_blogs
			,'disable_videos'=>$disable_videos
			,'disable_galleries'=>$disable_galleries
			,'disable_forms'=>$disable_forms
			,'disable_products'=>$disable_products
			,'disable_calendars'=>$disable_calendars
			,'disable_livechat'=>$disable_livechat
			,'disable_mailing_list'=>$disable_mailing_lists
			,'disable_blog'=>$disable_blogs
			,'limit_staff'=>$limit_staff
		);

    	$request = new SWBRestRequest("http://".$this->server_api_domain."/setseed-hub/api/sites/".$website[0]->domain, 'PUT', $body);
		$request->authHeaders  = array(
	        "SetSeed-Hub-API-Key: ".$this->server_api_key
			);

		$request->execute();

		$response = json_decode($request->responseBody);
		$code = $request->responseInfo['http_code'];
		*/
		
		$update = $this->execute('UPDATE websites SET
			unlimited_pages="'.$this->escapeString($newfeatures['unlimited_pages']).'"
			,blog="'.$this->escapeString($newfeatures['blog']).'"
			,unlimited_blog="'.$this->escapeString($newfeatures['unlimited_blog']).'"
			,unlimited_staff="'.$this->escapeString($newfeatures['unlimited_staff']).'"
			,mailing_lists="'.$this->escapeString($newfeatures['mailing_lists']).'"
			,shop="'.$this->escapeString($newfeatures['shop']).'"
			,unlimited_products="'.$this->escapeString($newfeatures['unlimited_products']).'"
			,livechat="'.$this->escapeString($newfeatures['livechat']).'"
			,video="'.$this->escapeString($newfeatures['video']).'"
			,galleries="'.$this->escapeString($newfeatures['galleries']).'"
			,contact_forms="'.$this->escapeString($newfeatures['contact_forms']).'"
			,calendar="'.$this->escapeString($newfeatures['calendar']).'"
			,domain_register="'.$domain_register.'"
			,domain_cancel="'.$domain_cancel.'"
			,plan="'.$this->escapeString($this->plan).'"
			WHERE websitesid="'.$this->escapeString($this->websiteid).'"');
	}
	public function domainValid($domain_name)
	{
	    return (preg_match("/^([a-z\d](-*[a-z\d])*)(\.([a-z\d](-*[a-z\d])*))*$/i", $domain_name) //valid chars check
	               && preg_match("/^.{1,253}$/", $domain_name) //overall length check
	               && preg_match("/^[^\.]{1,63}(\.[^\.]{1,63})*$/", $domain_name)   );
	}
	public function getWebsites($user)
	{
		$userid = $user->usersid;
		$websites = $this->query('SELECT * FROM websites WHERE `belongs_to_user`='.$userid);
		foreach ($websites as $website) {

			$now = strtotime(date("Y-m-d H:i:s"));
			$expires = strtotime($website->payment_expires);
			if ($now>$expires) {
				// Expired
				$valid = false;
			} else {
				$valid = true;
				$days_in_seconds = $expires-$now;
				$days = ceil($days_in_seconds/86400);
			}
			// Webthumb format

			$hash = md5(gmdate('Ymd').'http://'.$website->domain.'.'.$this->server_api_domain.'/'.$this->webthumb_api_key);
			$webthumb ='http://webthumb.bluga.net/easythumb.php?user='.$this->webthumb_user_id.'&url='.urlencode('http://'.$website->domain.'.'.$this->server_api_domain.'/').'&hash='.$hash.'&size=medium2&cache=1';
			
			$sites[] = array(
				"domain"=>$website->domain
				,"disabled"=>$website->disabled
				,"thumb"=>$webthumb
				,"failed"=>$website->failed
				,"days_left"=>$days
				,"valid"=>$valid
				,"expires"=>strtotime($website->payment_expires)
				,"id"=>$website->websitesid
				,"errors"=>$website->error_log
				,"unlimited_pages"=>$website->unlimited_pages
				,"blog"=>$website->blog
				,"unlimited_blog"=>$website->unlimited_blog
				,"unlimited_staff"=>$website->unlimited_staff
				,"mailing_lists"=>$website->mailing_lists
				,"shop"=>$website->shop
				,"unlimited_products"=>$website->unlimited_products
				,"livechat"=>$website->livechat
				,"video"=>$website->video
				,"galleries"=>$website->galleries
				,"contact_forms"=>$website->contact_forms
				,"calendar"=>$website->calendar
				,"plan"=>$website->plan
				,"free_trial"=>$website->free_trial
				,"annual"=>$website->annual
				,"domain_registration"=>$website->domain_registration
			);
		}
		return $sites;
	}
	public function addWebsite($domain,$usersid,$theme,$import,$paymentcycle)
	{
		$safeDomain = $this->escapeString($domain);
		$safeTheme = $this->escapeString($theme);
		$safeImport = $this->escapeString($import);
		$durationInSeconds = 30*86400;
		$expires = time()+$durationInSeconds;
		if ($this->thirtydaytrial===0) {
			$expires=time();
		}
		$safePlan = $this->escapeString($this->default_plan);
		if ($paymentcycle=="yearly") {
			$annual=1;
		} else {
			$annual=0;
		}
		$website = $this->insert('INSERT INTO websites (
										domain
										,belongs_to_user
										,payment_expires
										,theme
										,import_data
										,plan
										,free_trial
										,annual
									)
									VALUES(
										"'.$safeDomain.'"
										,"'.$usersid.'"
										,"'.$this->to_datetime($expires).'"
										,"'.$safeTheme.'"
										,"'.$safeImport.'"
										,"'.$safePlan.'"
										,"'.$this->thirtydaytrial.'"
										,'.$annual.'
									)');

		return $website;
	}
	public function domainExists($domain)
	{
    	$request = new SWBRestRequest("http://".$this->server_api_domain."/sh/api/sites", 'GET');
		$request->authHeaders  = array(
	        "SetSeed-Hub-API-Key: ".$this->server_api_key
			);

		$request->execute();
		$response = json_decode($request->responseBody);

		foreach ($response as $website) {
			if ($website->url==$domain) {
				return true;
			}
		}
		return false;
	}
	public function get($id)
	{
		$safeId = $this->escapeString($id);
		$website = $this->query('SELECT * FROM websites WHERE websitesid='.$safeId);
		return $website[0];
	}
	public function getStartingSite($usersid)
	{
		$safeId = $this->escapeString($usersid);
		$website = $this->query('SELECT * FROM websites WHERE belongs_to_user='.$safeId.' AND created=0');
		if (count($website)) {
			return $website[0];			
		} else {
			return false;
		}

	}
	public function setFail($usersid,$domain)
	{
		$safeDomain = $this->escapeString($domain);
		$safeUsersId = $this->escapeString($usersid);
		$update = $this->execute('UPDATE websites SET failed=1 WHERE belongs_to_user='.$safeUsersId.' AND domain="'.$safeDomain.'"');
	}
	public function killExpired()
	{

		$websites = $this->query('SELECT * FROM websites WHERE disabled=1');
		foreach ($websites as $website) {

			$body = array(
				'limit_pages'=>$this->lite_mode['pages']
				,'limit_products'=>$this->lite_mode['products']
				,'limit_blogs'=>$this->lite_mode['blogs']
				,'disable_videos'=>"1"
				,'disable_galleries'=>"1"
				,'disable_forms'=>"1"
				,'disable_products'=>"1"
				,'disable_calendars'=>"1"
				,'disable_snippets'=>"0"
				,'disable_livechat'=>"1"
				,'disable_embed_codes'=>"0"
				,'disable_mailing_list'=>"1"
				,'disable_blog'=>"1"
				,'limit_staff'=>$this->lite_mode['staff']

			);
	    	$request = new SWBRestRequest("http://".$this->server_api_domain."/sh/api/sites/".$website->domain, 'PUT', $body);
			$request->authHeaders  = array(
		        "SetSeed-Hub-API-Key: ".$this->server_api_key
				);

			$request->execute();
			$response = json_decode($request->responseBody);
			$code = $request->responseInfo['http_code'];
			if ($code==200) {
			//	$disable = $this->execute('UPDATE websites SET disabled=1 WHERE websitesid='.$website->websitesid);
			}
		}
	}

	public function createSetSeedWebsite($domain,$usersid,$theme,$import)
	{

			if ($this->default_plan!="") {
				if (isset($this->plans[$this->default_plan])) {
					// if plan exists, create array of included features
					$plans = explode(",",$this->plans[$this->default_plan]['includes']);
				}
			}


			if (in_array("unlimited_pages",$plans)) {
				$limit_pages="0";
			} else {
				$limit_pages=$this->lite_mode['pages'];
			}
			if (in_array("unlimited_products",$plans)) {
				$limit_products="0";
			} else {
				$limit_products=$this->lite_mode['products'];
			}
			if (in_array("unlimited_staff",$plans)) {
				$limit_staff="0";
			} else {
				$limit_staff=$this->lite_mode['staff'];
			}
			if (in_array("unlimited_blog",$plans)) {
				$limit_blogs="0";
			} else {
				$limit_blogs=$this->lite_mode['blogs'];
			}
			if (in_array("mailing_lists",$plans)) {
				$disable_mailing_lists="0";
			} else {
				$disable_mailing_lists="1";
			}
			if (in_array("livechat",$plans)) {
				$disable_livechat="0";
			} else {
				$disable_livechat="1";
			}
			if (in_array("video",$plans)) {
				$disable_videos="0";
			} else {
				$disable_videos="1";
			}
			if (in_array("galleries",$plans)) {
				$disable_galleries="0";
			} else {
				$disable_galleries="1";
			}
			if (in_array("contact_forms",$plans)) {
				$disable_forms="0";
			} else {
				$disable_forms="1";
			}
			if (in_array("shop",$plans)) {
				$disable_products="0";
			} else {
				$disable_products="1";
			}
			if (in_array("calendar",$plans)) {
				$disable_calendars="0";
			} else {
				$disable_calendars="1";
			}
			if (in_array("livechat",$plans)) {
				$disable_livechat="0";
			} else {
				$disable_livechat="1";
			}
			if (in_array("blog",$plans)) {
				$disable_blogs="0";
			} else {
				$disable_blogs="1";
			}



			$body = array(
				'domain'=>$domain
				,'theme'=>$theme
				,'import_data'=>$import
				,'brand'=>$this->brand_id
				,'limit_pages'=>$limit_pages
				,'limit_products'=>$limit_products
				,'limit_blogs'=>$limit_blogs
				,'disable_videos'=>$disable_videos
				,'disable_galleries'=>$disable_galleries
				,'disable_forms'=>$disable_forms
				,'disable_products'=>$disable_products
				,'disable_calendars'=>$disable_calendars
				,'disable_livechat'=>$disable_livechat
				,'disable_mailing_list'=>$disable_mailing_lists
				,'disable_blog'=>$disable_blogs
				,'limit_staff'=>$limit_staff
				,'disable_design'=>1
				,'disable_help'=>0
			);


	    	$request = new SWBRestRequest("http://".$this->server_api_domain."/sh/api/sites", 'POST', $body);
			$request->authHeaders  = array(
		        "SetSeed-Hub-API-Key: ".$this->server_api_key
				);

			$request->execute();
			$response = json_decode($request->responseBody);
			$code = $request->responseInfo['http_code'];
			$domainSafe = $this->escapeString($domain);

			if ($code==201) {
				$this->execute('UPDATE websites SET created=1 WHERE domain="'.$domainSafe.'" AND belongs_to_user='.$usersid.'');
				return true;
			} else {
				$log = 	'Server API Error: '.$code.' '.$this->escapeString(print_r($request,true));
				$this->execute('UPDATE websites SET error_log="'.$log.'" WHERE domain="'.$domainSafe.'" AND belongs_to_user='.$usersid.'');
				return false;
			}


	}
}
?>
