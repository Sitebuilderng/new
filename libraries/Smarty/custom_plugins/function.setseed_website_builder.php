<?php

function smarty_function_setseed_website_builder($params, &$smarty)
{
	/*
	 	Config
		======
	*/
	
	//	 CRON SETUP
	//   Enter your self signup website domaoin in the setseed_website_builder_models/cron.php file and then setup cron to run it every hour or so. 
	//   Example crontab line:
	//	 */3 * * * * php "/var/www/html/libraries/Smarty/custom_plugins/setseed_website_builder_models/cron.php"

	
	// Used to quicky switch this file between using a dev server and a live server for creating new websites.
	// For example, you can use this file in a local test server and upload it to your live server without replcing all the details below (just change this value)
	$dev=true;

	// Set to true to use PayPal sandbox (sandbox PayPal email defined below)
	$sandbox=true;

	// Name of the theme folder to apply to the new site.
	// This is only used if a theme variable isn't supplied and can usually be ignored.
	$theme="global_design_mode_theme";

	// Email address to use for administration account. When logged in to an account in the Website Builder app where the user is this email address, the admin mode will be displayed instead of the normal user account page.
	$admin_email = "";

	// Path to the page on the builder website where the main 'SetSeed Website Builder Account' Widget is added
	$account_page="my-sites/";

	// Webthumb account credentials for creating thumbnails. http://webthumb.bluga.net
	$webthumb_api_key="";
	$webthumb_user_id="";


	// Sales Tax To Charge By Country. Enter percentages to add for countries. Percentage will be added to prices for users in listed countries.

	/*
	// EU VAT states and rates
	$tax['be']="21" // Belgium
	$tax['bg']="20" // Bulgaria
	$tax['cz']="21" // Czech Republic
	$tax['dk']="25" // Denmark
	$tax['de']="19" // Germany
	$tax['ee']="20" // Estonia
	$tax['gr']="23" // Greece
	$tax['es']="21" // Spain
	$tax['fr']="20" // France
	$tax['hr']="25" // Croatia
	$tax['ie']="23" // Ireland
	$tax['it']="22" // Italy
	$tax['cy']="19" // Cyprus
	$tax['lv']="21" // Latvia
	$tax['lt']="21" // Lithuania
	$tax['lu']="17" // Luxembourg
	$tax['hu']="27" // Hungary
	$tax['mt']="18" // Malta
	$tax['nl']="21" // Netherlands
	$tax['at']="20" // Austria
	$tax['pl']="23" // Poland
	$tax['pt']="23" // Portugal
	$tax['ro']="24" // Romania
	$tax['si']="22" // Slovenia
	$tax['sk']="20" // Slovakia
	$tax['fi']="24" // Finland
	$tax['se']="25" // Sweden
	$tax['gb']="20" // United Kingdom
	*/


	// API Key for the SetSeed Hub on the server that new sites will be created on
	if ($dev) {
		$server_api_key="";
	} else {
		$server_api_key="";
	}

	// Domain name for the server running SetSeed that new sites will be created on (this is also the domain used to generate preview URLs for sites before users add their own domain);
	if ($dev) {
		$server_api_domain="";
	} else {
		$server_api_domain="";
	}

	// SetSeed CG Hub brand ID to use on new sites (view this ID in the Hub by clicking 'Brands')
	$brand_id=0;

	// PayPal settings or email
	$paypal_business="";
	$paypal_business_sandbox="";
	$currency="NZD";
	$currency_symbol='$';

	// 30 day all inclusive
	// This is will set the sites into paid-mode for the inital 30 days but it won't charge your customers. The site WILL count against your quota of sites or be charged as an additional site for the time it is running in this mode. However, because you don't pay for a new site until it's been running for at least 30 days, you won't incure any charges for these sites. If your customers don't subscibre, their site will be converted back to free mode and you won't be billed for it. If they upgrade to a paid plan, their site will stay as it is and it will count as a 'paid' site. 
	$thirtydaytrial = 1;

	$disablebilling=0;

	$paymentcycle="yearly"; // options are "monthly", "yearly"

	$lite_mode['products']="1";
	$lite_mode['pages']="3";
	$lite_mode['staff']="1";
	$lite_mode['blogs']="3";


	$monhtly_fee['unlimited_blog']="5.00";
	$monhtly_fee['mailing_lists']="10.00";
	$monhtly_fee['livechat']="5.00";
	$monhtly_fee['unlimited_pages']="5.00";
	$monhtly_fee['unlimited_products']="10.00";
	$monhtly_fee['video']="0.00";
	$monhtly_fee['galleries']="5.00";
	$monhtly_fee['contact_forms']="5.00";
	$monhtly_fee['calendar']="5.00";
	$monhtly_fee['unlimited_staff']="5.00";
	$monhtly_fee['domain_registration']="5.00";
		
	$annual_fee['unlimited_blog']="50.00";
	$annual_fee['mailing_lists']="100.00";
	$annual_fee['livechat']="50.00";
	$annual_fee['unlimited_pages']="50.00";
	$annual_fee['unlimited_products']="100.00";
	$annual_fee['video']="0.00";
	$annual_fee['galleries']="50.00";
	$annual_fee['contact_forms']="50.00";
	$annual_fee['calendar']="50.00";
	$annual_fee['unlimited_staff']="50.00";
	$annual_fee['domain_registration']="20.00";

	// Plans are contain multiple features a single monthly price. Only one plan can be active at any one time. Leave default_plan as an empty value to allow sites to run without having at least one plan active. (This would normally be if all plans are paid, i.e site runs in free mode until a paid plan is selected. If one plan is a free plan, you'll probably want to add it to the $default_plan value so customers see it as selected when they first create a site)

	$default_plan = "premium";

	$plans['free'] = array(
		'price'=>'0.00'
		,'price_annual'=>'0.00'
		,'includes'=>'blog,shop,video'
	);
	$plans['premium'] = array(
		'price'=>'9.99'
		,'price_annual'=>'99.00'
		,'includes'=>'blog,shop,video,unlimited_pages,unlimited_blog,unlimited_products,galleries,contact_forms,calendar,domain_registration'
	);


	if ($sandbox) {
		$gatewaycreds['username'] = "";
		$gatewaycreds['password'] = "";
		$gatewaycreds['signature'] = "";
	} else {
		$gatewaycreds['username'] = "";
		$gatewaycreds['password'] = "";
		$gatewaycreds['signature'] = "";
	}

	// From settings for outbound emails
	$email_from=array("email@example.com"=>"First Name Last Name");


	// MySQL Database Configuration for the Website Builder Account
	// If you want to use a separate database to store the data for the website builder, enter credentials here.
	// If you leave the values as they are, the data will be stored in the CMS database for the customer signup website itself.

	global $configuration;

	if ($dev) {

		$config['host']=$configuration['host'];
		$config['user']=$configuration['user'];
		$config['pass']=$configuration['pass'];
		$config['db']=$configuration['db'];


	} else {
		$config['host']=$configuration['host'];
		$config['user']=$configuration['user'];
		$config['pass']=$configuration['pass'];
		$config['db']=$configuration['db'];
		
	}

	// Language strings used in the application
	$langs['verify_email_subject']='Please verify your email';

	$langs['create_account_user_exists_1']='An account with this email address already exists. Please <a href="';
	$langs['create_account_user_exists_2']='"/>login</a> to create a new website.';
	$langs['create_account_email_empty']='Email address can’t be empty.';
	$langs['create_account_pass_empty']='Password can’t be empty.';
	$langs['create_account_domain_empty']='Domain name can’t be empty';
	$langs['create_account_domain_exists']='This website name is already taken.';
	$langs['create_account_domain_format']='The website domain name is invalid. Please ensure you do not include http:// or any slashes or spaces in your domain name.';

	$langs['verify_user_not_found'] = 'User not found or password already set for this user. Please contact us for help.';

	$langs['login_user_not_found'] = 'Email address not found.';
	$langs['login_pass_incorrect'] = 'Password incorrect.';
	$langs['login_not_verified'] = 'Email address not verified. Please check your email and follow the link or <a href="?resend='.$_REQUEST['email'].'">click here to resend it</a>.';
	$langs['login_no_password'] = 'This account does not yet have a password. Please check your email, click the verification link and follow the instructions to complete your registration.';
	$langs['reset1_email_subject'] = 'Reset password confirmation';
	$langs['reset1_message']='Please check your email to complete your password reset.';

	$langs['reset2_email_subject'] = 'Your new password';

	$langs['passwords_dont_match'] = 'Your passwords don\'t match';

	$langs['Subscription_Title'] = 'Website Builder Payment Method';

	$langs['Tax_Comment'] = '+ GST';

	$gateway = "paypal"; // Options are "paypal" or "alepay"
	
	$registrar = false; 

	$registrarconfig["username"] = "";
	$registrarconfig["key"] = "";
	$registrarconfig["sandbox"] = 'true';
	
	/*
		End Config - No need to edit anything below here.
		=================================================
	*/
	
	
	require_once(ROOT_DIR.'/libraries/swift/swift_required.php');
	require_once('setseed_website_builder_models/restrequest.php');
	require_once('setseed_website_builder_models/model.php');
	require_once('setseed_website_builder_models/website.php');
	require_once('setseed_website_builder_models/view.php');
	require_once('setseed_website_builder_models/email.php');
	require_once('setseed_website_builder_models/coupon.php');
	require_once('setseed_website_builder_models/payment.php');
	
	switch ($gateway) {
		case 'paypal':
			require_once('setseed_website_builder_models/payment.paypal.php');		
		break;
		case 'alepay':
			require_once('setseed_website_builder_models/payment.alepay.php');		
		break;
	}
	switch ($registrar) {
		case 'namecheap':
			require_once('setseed_website_builder_models/registrar.namecheap.php');		
		break;
	}
	

	/* Extends */
	require_once('setseed_website_builder_models/account.php');
	require_once('setseed_website_builder_models/auth.php');


	
	switch ($params['action']) {
		case 'cron':
			if (!$disablebilling){
				$Website = new Website($config);
				$Website->fees = $monhtly_fee;
				$Website->fees_annual = $annual_fee;
				$Website->server_api_domain = $server_api_domain;
				$Website->webthumb_api_key = $webthumb_api_key;
				$Website->webthumb_user_id = $webthumb_user_id;
				$Website->plans = $plans;
				$Website->applyBalanceMonthly();
			
				$Payment = new Payment($config);
			
				$Gateway = new PaymentGateway($config);
				$Gateway->username=$gatewaycreds['username'];
				$Gateway->password=$gatewaycreds['password'];
				$Gateway->signature=$gatewaycreds['signature'];
				$Gateway->currency = $currency;
				$Gateway->sandbox = $sandbox;
				$Payment->Gateway=$Gateway;
			
				$Payment->config=$paypal;
				$Payment->tax=$tax;
				$Payment->server_api_key = $server_api_key;
				$Payment->currency = $currency;
				$Payment->server_api_domain = $server_api_domain;
				$Payment->default_plan = $default_plan;
				$Payment->collect();

				$Website->server_api_key = $server_api_key;
				$Website->server_api_domain = $server_api_domain;
				$Website->webthumb_api_key = $webthumb_api_key;
				$Website->webthumb_user_id = $webthumb_user_id;
				$Website->lite_mode = $lite_mode;
				$Website->killExpired();
			
				if ($registrar){
					$Registrar = new Registrar($config);
					$Registrar->credentials = $registrarconfig;
					$Registrar->registerOrCancel();
				}
			
			
				$Website->pushToHub();
			}
			
			
		break;
		case 'act_as':
		
			$Auth = new Auth($config);
			$user = $Auth->checkSession();
			if (!$user) {
				return false;
			}
			if ($user->email==$admin_email) {

				$Auth->loginId($_REQUEST['user']);
			}

		break;
		case 'changepass':
		   	$Auth = new Auth($config);
			$user = $Auth->checkSession();
			$Auth->langs = $langs;
			if ($user) {
				if (trim($_POST['newpass1'])=="") {
					$Auth->errors["password"] = $langs['create_account_pass_empty'];
				}
				if (trim($_POST['newpass1'])!=trim($_POST['newpass2'])) {
					$Auth->errors["password"] = $langs['passwords_dont_match'];
				}
				if (!$Auth->errors) {
					$check = $Auth->checkPass($user->email,$_POST['oldpass']);
					if ($check) {
						$set = $Auth->choosepass($user->guid,trim($_POST['newpass1']));
						if ($set){
						    $smarty->assign("swb_password_change","true");
						}
					} else {
						$Auth->errors["password"] = $langs['login_pass_incorrect'];
					}

				}
			    $smarty->assign("swb_errors_change",$Auth->errors);
			}
		break;
		case 'applycoupon':
			$Auth = new Auth($config);
			$user = $Auth->checkSession();
			$Coupon = new Coupon($config);
			$Coupon->usersid = $user->usersid;
			$Coupon->code = $params['coupon'];
			$Coupon->useCoupon();
			if (count($Coupon->errors)) {
				$errors = print_r($Coupon->errors,true);
			    $smarty->assign("swb_errors_coupon",$Coupon->errors);
			} else {
				$smarty->assign("swb_coupon_ok",true);
			}
		break;
		case 'packagesave':
			$Website=new Website($config);
			$Website->websiteid=$params['websiteid'];
			$Website->data=$params['data'];
			$Website->plan=$params['plan'];
			$Website->plans=$plans;
			$Website->fees=$monhtly_fee;
			$Website->fees_annual=$annual_fee;
			$Website->lite_mode = $lite_mode;
			$Website->server_api_domain=$server_api_domain;
			$Website->server_api_key=$server_api_key;
			$Website->getPriceDifference();
			$Website->updatePackageOK();

//			echo $difference;
//			die();

			$Auth = new Auth($config);
			$user = $Auth->checkSession();
			if ($user->agreementid=="") {
				echo "nobilling";
			} else {
				$Payment = new Payment($config);
				
			
				$Gateway = new PaymentGateway($config);
				$Gateway->username=$gatewaycreds['username'];
				$Gateway->password=$gatewaycreds['password'];
				$Gateway->signature=$gatewaycreds['signature'];
				$Gateway->currency = $currency;
				$Gateway->sandbox = $sandbox;
				$Payment->Gateway=$Gateway;
				
				$Payment->config=$paypal;
				$Payment->tax=$tax;
				$Payment->server_api_key = $server_api_key;
				$Payment->currency = $currency;
				$Payment->server_api_domain = $server_api_domain;
				$Payment->default_plan = $default_plan;
				$Payment->collect();
				
				if ($registrar){
					$Registrar = new Registrar($config);
					$Registrar->credentials = $registrarconfig;
					$Registrar->registerOrCancel();
				}

			}
			$Website->pushToHub();
			die();
		break;
		case 'createbillingagreement':
			$Gateway = new PaymentGateway($config);
			$Gateway->username=$gatewaycreds['username'];
			$Gateway->password=$gatewaycreds['password'];
			$Gateway->signature=$gatewaycreds['signature'];
			$Gateway->token=$params['token'];
			$Gateway->currency = $currency;
			$Gateway->sandbox = $sandbox;
			$agreementid = $Gateway->gatewayCallback();

			// Start starting site if not started
			
		   	$Auth = new Auth($config);
			$user = $Auth->checkSession();

			if ($user && $agreementid!=false) {

				$Account = new Account($config);
				$Account->usersid = $user->usersid;
				$Account->setAgreementID($agreementid);
				
				$Payment = new Payment($config);
				$Payment->gateway=$Gateway;
				$Payment->tax=$tax;
				$Payment->server_api_key = $server_api_key;
				$Payment->currency = $currency;
				$Payment->server_api_domain = $server_api_domain;
				$Payment->default_plan = $default_plan;
				$Payment->collect();
				
					
				$Website = new Website($config);

				$Website->server_api_key = $server_api_key;
				$Website->server_api_domain = $server_api_domain;
				$Website->brand_id = $brand_id;
				$Website->freetrial_duration = $freetrial_duration;
				$Website->freetrial_redirect = $freetrial_redirect;
				$Website->licensing_email = $licensing_email;
				$Website->licensing_api_key = $licensing_api_key;
				$Website->lite_mode = $lite_mode;
				$Website->default_plan = $default_plan;
				$Website->plans = $plans;
				$Website->thirtydaytrial = $thirtydaytrial;

				$domain = $Website->getStartingSite($user->usersid);

				if ($domain) {

					// has uncreated starting site, create it. 
					$launch = $Website->createSetSeedWebsite($domain->domain,$user->usersid,$domain->theme,$domain->import_data);
					if ($launch) {
	//					$Website->setExpires($user[0]->usersid,$domain->domain);
	// 					email admin
						$email = new Email($config);
						$email->sendEmail($email_from,$admin_email,"A new website has been created","","Email: ".$user->email." Website: ".$domain->domain);

					} else {
						$Website->setFail($user->usersid,$domain->domain);
					}
				}

			}
			
			
		break;
		case 'pay':
		   	$Auth = new Auth($config);
			$user = $Auth->checkSession();
			
				
			$Gateway = new PaymentGateway($config);
			$Gateway->sandbox = $sandbox;
			$Gateway->currency=$currency;
			$Gateway->username=$gatewaycreds['username'];
			$Gateway->password=$gatewaycreds['password'];
			$Gateway->signature=$gatewaycreds['signature'];
			$Gateway->return_url="http://".$_SERVER['HTTP_HOST'].'/'.$account_page.'?createbillingagreement=true';
			$Gateway->cancel_url="http://".$_SERVER['HTTP_HOST'].'/'.$account_page.'';
			$Gateway->product_title = $langs['Subscription_Title'];
			$Gateway->user = array("id"=>$user->usersid
				,"first_name"=>$user->first_name
				,"last_name"=>$user->last_name
				,"email"=>$user->email
				,"street"=>$user->street
				,"city"=>$user->city
				,"state"=>$user->state
				,"postal_code"=>$user->postal_code
				,"country"=>$user->country
				,"phone_number"=>$user->phone_number
			);
			$url = $Gateway->getGatewayURL();

			header ("Location: ".$url);
			
			die();
		break;
		case 'coupon_gen':

			$smarty->assign('coupon_gen',true);
			$Coupon = new Coupon($config);
			$codes = $Coupon->generateCoupons($params['months'],$params['discount'],$params['quantity']);
			$smarty->assign('coupon_codes',$codes);
			if (count($Coupon->errors)) {
				$errors = print_r($Coupon->errors,true);
			}
		    $smarty->assign("swb_errors",$Website->errors);

		break;
		case 'config':

			switch ($params['value']) {
				case 'tax_comment':
					return $langs['Tax_Comment'];
				break;
				case 'lite_mode_blogs':
					return $lite_mode['blogs'];
				break;
				case 'lite_mode_pages':
					return $lite_mode['pages'];
				break;
				case 'lite_mode_products':
					return $lite_mode['products'];
				break;
				case 'lite_mode_staff':
					return $lite_mode['staff'];
				break;
				case 'feature_price_staff':
					return $monhtly_fee['unlimited_staff'];
				break;
				case 'feature_price_galleries':
					return $monhtly_fee['galleries'];
				break;
				case 'feature_price_forms':
					return $monhtly_fee['contact_forms'];
				break;
				case 'feature_price_calendar':
					return $monhtly_fee['calendar'];
				break;
				case 'feature_price_video':
					return $monhtly_fee['video'];
				break;
				case 'feature_price_livechat':
					return $monhtly_fee['livechat'];
				break;
				case 'feature_price_unlimited_pages':
					return $monhtly_fee['unlimited_pages'];
				break;
				case 'feature_price_unlimited_blog':
					return $monhtly_fee['unlimited_blog'];
				break;
				case 'feature_price_newsletter':
					return $monhtly_fee['mailing_lists'];
				break;
				case 'feature_price_shop_unlimted':
					return $monhtly_fee['unlimited_products'];
				break;
				case 'feature_price_domain_registration':
					return $monhtly_fee['domain_registration'];
				break;
				
				
				case 'feature_price_staff_annual':
					return $annual_fee['unlimited_staff'];
				break;
				case 'feature_price_galleries_annual':
					return $annual_fee['galleries'];
				break;
				case 'feature_price_forms_annual':
					return $annual_fee['contact_forms'];
				break;
				case 'feature_price_calendar_annual':
					return $annual_fee['calendar'];
				break;
				case 'feature_price_video_annual':
					return $annual_fee['video'];
				break;
				case 'feature_price_livechat_annual':
					return $annual_fee['livechat'];
				break;
				case 'feature_price_unlimited_pages_annual':
					return $annual_fee['unlimited_pages'];
				break;
				case 'feature_price_unlimited_blog_annual':
					return $annual_fee['unlimited_blog'];
				break;
				case 'feature_price_newsletter_annual':
					return $annual_fee['mailing_lists'];
				break;
				case 'feature_price_shop_unlimted_annual':
					return $annual_fee['unlimited_products'];
				break;
				case 'feature_price_domain_registration_annual':
					return $annual_fee['domain_registration'];
				break;

				case 'plan_includes':
					return $plans[$params['plan']]['includes'];
				break;
				case 'plan_price':
					return $plans[$params['plan']]['price'];
				break;
				case 'plan_price_annual':
					return $plans[$params['plan']]['price_annual'];
				break;
				case 'payment_cycle':
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],$paymentcycle);
					} else {
						return $paymentcycle;
					}
				break;

				case 'signup_page':
					$host = $_SERVER['HTTP_HOST'];
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],'http://'.$host.'/'.$account_page);
					} else {
						return 'http://'.$host.'/'.$account_page;
					}
				break;
				case 'paypal_business':
					if (isset($params['assign'])) {
						if ($sandbox) {
							$smarty->assign($params['assign'],$paypal_business_sandbox);
						} else {
							$smarty->assign($params['assign'],$paypal_business);
						}
					} else {
						if ($sandbox) {
							return $paypal_business_sandbox;
						} else {
							return $paypal_business;
						}
					}
				break;
				case 'currency':
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],$currency);
					} else {
						return $currency;
					}
				break;
				case 'charge':
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],$monthly_fee);
					} else {
						return $monthly_fee;
					}
				break;
				case 'currency_sym':
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],$currency_symbol);
					} else {
						return $currency_symbol;
					}
				break;
				case 'sandbox':
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],$sandbox);
					} else {
						return $sandbox;
					}
				break;
				case 'account_url':
					$host = $_SERVER['HTTP_HOST'];
					if (isset($params['assign'])) {
						$smarty->assign($params['assign'],'http://'.$host.'/'.$account_page);
					} else {
						return 'http://'.$host.'/'.$account_page;
					}
				break;
			}
		break;
		case 'reset':
			$Account = new Account($config);
			$user = $Account->getUserFromGuid($params['guid']);
			$Auth=new Auth($config);
			$newpass = $Auth->changePass($user->usersid);
			if ($newpass) {
				// Send new pass as email
				$message_html = new View("reset2_email_html");
				$message_html->set('link',"http://".$_SERVER['HTTP_HOST'].'/'.$account_page);
				$message_html->set('pass',$newpass);
				$message_html = $message_html->render();

				$message_plain = new View("reset2_email");
				$message_plain->set('link',"http://".$_SERVER['HTTP_HOST'].'/'.$account_page);
				$message_plain->set('pass',$newpass);
				$message_plain = $message_plain->render();

				$email = new Email($config);
				$email->sendEmail($email_from,$user->email,$langs['reset2_email_subject'],$message_plain,$message_html);
				$page = explode("?",$_SERVER['REQUEST_URI']);
				header('Location: '.$page[0].'?resetdone=true');
				exit();
			}
		break;
		case 'register':
		   	$Auth = new Auth($config);
			$user = $Auth->checkSession();
			
			$domain = str_replace(array("http://","https://"),array("",""),strtolower($params['domain'])); 
			if (strpos($domain,"www.")!==0){
				$domain = "www.".$domain;
			}
			

			if ($user) {
				$Website = new Website($config);
				$Website->server_api_key = $server_api_key;
				$Website->server_api_domain = $server_api_domain;
				$Website->brand_id = $brand_id;
				$Website->freetrial_duration = $freetrial_duration;
				$Website->freetrial_redirect = $freetrial_redirect;
				$Website->licensing_email = $licensing_email;
				$Website->licensing_api_key = $licensing_api_key;
				$Website->lite_mode = $lite_mode;
				$Website->default_plan = $default_plan;
				$Website->plans = $plans;
				$Website->thirtydaytrial = $thirtydaytrial;
				
				
				
				if ($Website->domainExists($domain)) {
					$Website->errors["domain"] = $langs['create_account_domain_exists'];
				}
				if ($registrar) {
					$Registrar = new Registrar($config);
					$Registrar->credentials = $registrarconfig;
					if ($Registrar->domainTaken($domain)) {
						$Website->errors["domain"] = $langs['create_account_domain_exists'];
					}
				}
				if (!$Website->domainValid($domain)) {

					$Website->errors["domain"] = $langs['create_account_domain_format'];
				}

				if (!$Website->errors) {
					if ($params['theme']) {
						$theme = $params['theme'];
					}
					$import = "";
					if ($params['import_data']) {
						$import = $params['import_data'];
					}
					$Website->addWebsite($domain,$user->usersid,$theme,$import,$paymentcycle);
					$launch = $Website->createSetSeedWebsite($domain,$user->usersid,$theme,$import);
					if (!$launch) {
						$Website->setFail($user->usersid,$domain);
					} else {
						$email = new Email($config);
						$email->sendEmail($email_from,$admin_email,"A new website has been created","","Email: ".$user->email." Website: http://".$domain.".".$server_api_domain);
					}
					$page = explode("?",$_SERVER['REQUEST_URI']);
					header('Location: '.$page[0]);
					exit();
				}

			    $smarty->assign("swb_errors",$Website->errors);
			} else {
				$newuser = new stdClass();
				$newuser->email = $params['email'];
				$newuser->domain = $domain;


				/* Validate All Input */
			   	$Account = new Account($config);
				if (trim($newuser->email)=="") {
					$Account->errors["email"] = $langs['create_account_email_empty'];
				}
				if (trim($newuser->domain)=="") {
					$Account->errors["domain"] = $langs['create_account_domain_empty'];
				}
				if ($Account->userExists($newuser->email)) {
					$host = $_SERVER['HTTP_HOST'];
					$Account->errors["email"] = $langs['create_account_user_exists_1'].'http://'.$host.'/'.$account_page.$langs['create_account_user_exists_2'];
				}

				$Website = new Website($config);
				$Website->server_api_key = $server_api_key;
				$Website->server_api_domain = $server_api_domain;

				if ($Website->domainExists($newuser->domain)) {
					$Account->errors["domain"] = $langs['create_account_domain_exists'];
				}
				
				if ($registrar) {
					$Registrar = new Registrar($config);
					$Registrar->credentials = $registrarconfig;
					if ($Registrar->domainTaken($newuser->domain)) {
						$Website->errors["domain"] = $langs['create_account_domain_exists'];
					}
				}
				
				if (!$Website->domainValid($newuser->domain)) {
					$Account->errors["domain"] = $langs['create_account_domain_format'];
				}

				/* End Validation */

				if (!$Account->errors) {

					// If no errors, create account
					$user = $Account->create($newuser);

					if ($user) {
						if ($params['theme']) {
							$theme = $params['theme'];
						}
						$import = "";
						if ($params['import_data']) {
							$import = $params['import_data'];
						}
						$website = new Website($config);
						$website->default_plan = $default_plan;
						$website->thirtydaytrial = $thirtydaytrial;
						$website->addWebsite($domain,$user->usersid,$theme,$import,$paymentcycle);

						$message_html = new View("verify_email_html");
						$message_html->set('link',"http://".$_SERVER['HTTP_HOST'].'/'.$account_page.'?verify='.$user->guid);
						$message_html = $message_html->render();

						$message_plain = new View("verify_email");
						$message_plain->set('link',"http://".$_SERVER['HTTP_HOST'].'/'.$account_page.'?verify='.$user->guid);
						$message_plain = $message_plain->render();

						$email = new Email($config);
						$email->sendEmail($email_from,$user->email,$langs['verify_email_subject'],$message_plain,$message_html);
					}
				}

			    $smarty->assign("swb_register_success",$user);
			    $smarty->assign("swb_errors",$Account->errors);
			}

		break;
		case 'login':
			$forgot = ($params['forgot']=="true"?true:false);
			if ($forgot) {

				$Account = new Account($config);
				$user = $Account->getUserFromEmail($params['email']);
				$guid = $user->guid;

				$message_html = new View("reset1_email_html");
				$message_html->set('link',"http://".$_SERVER['HTTP_HOST'].'/'.$account_page.'?reset='.$user->guid);
				$message_html = $message_html->render();

				$message_plain = new View("reset1_email");
				$message_plain->set('link',"http://".$_SERVER['HTTP_HOST'].'/'.$account_page.'?reset='.$user->guid);
				$message_plain = $message_plain->render();

				$email = new Email($config);
				$email->sendEmail($email_from,$user->email,$langs['reset1_email_subject'],$message_plain,$message_html);

			    $smarty->assign("swb_errors",array($langs['reset1_message']));

			} else {
			   	$Auth = new Auth($config);
				$Auth->langs = $langs;
				$keep = ($params['keep']=="true"?true:false);
				$result = $Auth->login($params['email'],$params['pass'],$keep,$forgot); // Redirects on success
			    $smarty->assign("swb_errors",$Auth->errors);
			}

		break;
		case 'admin_update':
			$Auth = new Auth($config);
			$result = $Auth->checkSession();
			if (!$result) {
				return false;
			}
			if ($result->email==$admin_email) {
					$Website = new Website($config);
					$Website->server_api_domain = $server_api_domain;
					$Website->server_api_key = $server_api_key;
					$Website->domain = $_REQUEST['domain'];
					$Website->websitesid = $_REQUEST['update'];
					if ($Website->updateDomain()) {
						$smarty->assign("swb_oks",array("Domain changed successfully"));
					} else {
						$smarty->assign("swb_errors",array("Domain not changed"));
					}
			}
		break;
		case 'admin_delete':
			$Auth = new Auth($config);
			$result = $Auth->checkSession();
			if (!$result) {
				return false;
			}
			if ($result->email==$admin_email) {
					$Website = new Website($config);
					$Website->server_api_domain = $server_api_domain;
					$Website->server_api_key = $server_api_key;
					$Website->websitesid = $_REQUEST['delete'];
					if ($Website->deleteWebsite()) {
						$smarty->assign("swb_oks",array("Website delete successfully"));
					} else {
						$smarty->assign("swb_errors",array("Website not deleted"));
					}
			}
		break;
		case 'admin_delete_account':
			$Auth = new Auth($config);
			$result = $Auth->checkSession();
			if (!$result) {
				return false;
			}
			if ($result->email==$admin_email) {
					$Account = new Account($config);
					if ($Account->deleteAccount($_REQUEST['delete_account'])) {
						$smarty->assign("swb_oks",array("Account delete successfully"));
					} else {
						$smarty->assign("swb_errors",array("Account not deleted"));
					}
			}
		break;
		case 'session':

		   	$Auth = new Auth($config);
			$result = $Auth->checkSession();

			if (!$result) {
				return false;
			}
			
			$Payment = new Payment($config);
			
			$Website = new Website($config);
			$Website->server_api_domain = $server_api_domain;
			$Website->webthumb_api_key = $webthumb_api_key;
			$Website->webthumb_user_id = $webthumb_user_id;
			
			$Coupon = new Coupon($config);
			$Coupon->usersid = $result->usersid;
			$coupon = $Coupon->checkUser();

			$smarty->assign('primary_url',$server_api_domain);
		    $smarty->assign('swb_logged_in',$result);
			$smarty->assign('swb_logged_in_id',$result->usersid);
			$smarty->assign('swb_logged_in_email',$result->email);
			$smarty->assign('swb_logged_in_created_timestamp',$result->createdtimestamp);
			$smarty->assign('swb_logged_in_agreementid',$result->agreementid);
			$smarty->assign('default_plan',$default_plan);
			$smarty->assign('disable_billing',$disablebilling);
			if ($coupon) {
			    $smarty->assign('swb_logged_in_coupon_pc',$coupon->discount);
				$date = date_create($coupon->expires);
				$smarty->assign('swb_logged_in_coupon_expires',date_format($date,"jS F Y"));
			}
			
			

			if ($result->email==$admin_email) {


				$smarty->assign('swb_admin',true);
				$Account = new Account($config);
				$users=$Account->getUsers();
				foreach ($users as $user) {
					$usersout[] = array(
						'id'=>$user->usersid
						,'email'=>$user->email
						,'joined'=>$user->joined
						,'websites'=>$Website->getWebsites($user)
					);
				}
				$smarty->assign('users',$usersout);

			} else {

				$smarty->assign('websites',$Website->getWebsites($result));
			}


		break;
		case 'logout':
			if (isset($_COOKIE['token'])) {
				$token = $_COOKIE['token'];
			} else {
				$token = $_SESSION['token'];
			}

		   	$Auth = new Auth($config);
			$result = $Auth->logout($token);
			$smarty->assign("swb_logged_in",false);

		break;
		case 'verify':
			$Auth = new Auth($config);
			if ($Auth->verified($params['code'])) {
				$smarty->assign("swb_verify_code_found",true);
			}
		    $smarty->assign("swb_errors",$Auth->errors);
		break;
		case 'choosepass':
		   	$Auth = new Auth($config);
			$Auth->langs = $langs;

			if (trim($params['pass'])=="") {
				$Auth->errors["password"] = $langs['create_account_pass_empty'];
			}

			$keep = ($params['keep']=="true"?true:false);
			$user = $Auth->choosepass($params['code'],$params['pass']);
			if ($user) {

				$Website = new Website($config);
				$Website->server_api_key = $server_api_key;
				$Website->server_api_domain = $server_api_domain;
				$Website->brand_id = $brand_id;
				$Website->freetrial_duration = $freetrial_duration;
				$Website->freetrial_redirect = $freetrial_redirect;
				$Website->licensing_email = $licensing_email;
				$Website->licensing_api_key = $licensing_api_key;
				$Website->lite_mode = $lite_mode;
				$Website->default_plan = $default_plan;
				$Website->plans = $plans;
				$Website->thirtydaytrial = $thirtydaytrial;
				$domain = $Website->getStartingSite($user[0]->usersid);

				if (!$Website->domainExists($domain->domain)) {
					if ($plans[$default_plan]['price']!="0.00" && !$thirtydaytrial) {
						// If chargable without trial period, need billing before we can create!
						
						$Auth->setSession($keep,$user,"?pay=true"); // Redirects
					} else {
						$launch = $Website->createSetSeedWebsite($domain->domain,$user[0]->usersid,$domain->theme,$domain->import_data);
						if ($launch) {
		//					$Website->setExpires($user[0]->usersid,$domain->domain);
		// 					email admin
							$email = new Email($config);
							$email->sendEmail($email_from,$admin_email,"A new website has been created","","Email: ".$user[0]->email." Website: ".$domain->domain);

						} else {
							$Website->setFail($user[0]->usersid,$domain->domain);
						}
						$Auth->setSession($keep,$user); // Redirects
					}

				} else {
					$Auth->setSession($keep,$user); // Redirects
				}


			} else {
				$Auth->errors[''] = $langs['verify_user_not_found'];
			}
		    $smarty->assign("swb_errors",$Auth->errors);
		break;
	}
}