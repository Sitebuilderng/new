<?php

class Payment extends Model {
	public $config;
	public $return_url;
	public $cancel_url;
	public $product_title;
	public $currency;
	public $token;
	public $websiteid;
	public $usersid;
	public $server_api_domain;
	public $server_api_key;
	public $tax;
	public $default_plan;
	public	$Gateway;
	public function collect()
	{
		$tocharge = $this->query('SELECT * FROM websites WHERE balance < 0');

		foreach ($tocharge as $website) {
			$user=$this->query('SELECT agreementid,usersid FROM users WHERE usersid='.$website->belongs_to_user);
				
			$balance = $website->balance;
			$charge = abs($balance);

			$fail=false;
			if ($user[0]->agreementid!="") {

				$country_code = $this->Gateway->getCountryCode();
				
				$taxToAdd = 0;
				if (isset($this->tax[$country_code])) {
					$taxToAdd = $this->tax[$country_code] * $charge / 100;
				}
				$taxToAdd = number_format($taxToAdd,2,'.','');
				$chargeIncTax = $charge + $taxToAdd;

				if ($this->Gateway->charge($chargeIncTax,$taxToAdd,$charge,$user[0]->agreementid,$website->domain)) {
					$update = $this->execute('UPDATE websites SET 
						push_to_hub=1,
						balance="0.00"
						WHERE websitesid='.$website->websitesid);
				
				
					$payment = $this->insert('INSERT INTO payments(
												usersid
												,date
												,currency
												,amount
												,total_amount
												,tax
												,country_code
											)
											VALUES(
												"'.$user[0]->usersid.'"
												,"'.$this->to_datetime(time()).'"
												,"'.$this->currency.'"
												,"'.$charge.'"
												,"'.$chargeIncTax.'"
												,"'.$taxToAdd.'"
												,"'.$country_code.'"
											)');
			
				} else {
					$fail = true;
				}
				
				
			} else {
				if (strtotime($website->last_saved) < time()-300) {
					$fail=true;	
				}
			}
			if ($fail==true) {



				$domain_cancel = $website->domain_cancel;
				if ($website->domain_registered==1) {
					$domain_cancel=1;
				}
				
				$plan = $this->default_plan;
				$plan = $this->escapeString($plan);
				$this->query('UPDATE users SET agreementid="" WHERE usersid='.$website->belongs_to_user);
				$this->execute('UPDATE websites SET disabled=1
				,unlimited_pages=0
				,blog=0
				,unlimited_blog=0
				,mailing_lists=0
				,shop=0
				,unlimited_products=0
				,livechat=0
				,video=0
				,galleries=0
				,contact_forms=0
				,calendar=0
				,domain_register=0
				,domain_cancel='.$domain_cancel.'
				,plan="'.$plan.'"

				,balance="0.00"
				WHERE `websitesid`='.$website->websitesid);
			}

		}	
	}
	
	
	
}
