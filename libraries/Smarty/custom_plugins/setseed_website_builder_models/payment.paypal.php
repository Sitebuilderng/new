<?php
	class PaymentGateway extends Model {
		public $sandbox;
		private $baseurl_test = "https://api-3t.sandbox.paypal.com/nvp";
		private $baseurl_live = "https://api-3t.paypal.com/nvp";
		public $username;
		public $password;
		public $signature;
		public $currency;
		public $product_title;
		public $cancel_url;
		public $return_url;
		public $token;
		public function getGatewayURL()
		{
			$endpoint = ($this->sandbox)?$this->baseurl_test:$this->baseurl_live; 

			$body = array(
		        "USER"=>$this->username
				,"PWD"=>$this->password
				,"SIGNATURE"=>$this->signature
				,"VERSION"=>"86"
				,"METHOD"=>"SetExpressCheckout"
				,"PAYMENTREQUEST_0_PAYMENTACTION"=>"AUTHORIZATION"
				,"PAYMENTREQUEST_0_AMT"=>"0"
				,"PAYMENTREQUEST_0_CURRENCYCODE"=>$this->currency
				,"L_BILLINGTYPE0"=>"MerchantInitiatedBilling"
				,"L_BILLINGAGREEMENTDESCRIPTION0"=>$this->product_title
				,"cancelUrl"=>$this->cancel_url
				,"returnUrl"=>$this->return_url
			);


			$request = new SWBRestRequest($endpoint, 'POST', $body);
			$request->execute();
			
			parse_str($request->responseBody,$response);
			
			$token = $response['TOKEN'];
			return 
				($this->sandbox)
				?"https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=".$token
				:"https://www.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=".$token;
			
		}
		public function gatewayCallback()
		{
			$endpoint = ($this->sandbox)?$this->baseurl_test:$this->baseurl_live; 
			$body = array(
		        "USER"=>$this->username
				,"PWD"=>$this->password
				,"SIGNATURE"=>$this->signature
				,"VERSION"=>"86"
				,"METHOD"=>"CreateBillingAgreement"
				,"TOKEN"=>$this->token
			);
			$request = new SWBRestRequest($endpoint, 'POST', $body);
			$request->execute();
			parse_str($request->responseBody,$response);
			$token = $response['BILLINGAGREEMENTID'];
			$ok = $response['ACK'];

			if ($ok=="Success") {
				return $token;
			} else {
				return false;
			}
		}
		public function getCountryCode($agreementid)
		{
			$endpoint = ($this->sandbox)?$this->baseurl_test:$this->baseurl_live; 
			$body = array(
		        "USER"=>$this->username
				,"PWD"=>$this->password
				,"SIGNATURE"=>$this->signature
				,"VERSION"=>"86"
				,"METHOD"=>"BillAgreementUpdate"
				,"REFERENCEID"=>$agreementid
				,"BILLINGAGREEMENTSTATUS"=>""
			);
			$request = new SWBRestRequest($endpoint, 'POST', $body);
			$request->execute();
			parse_str($request->responseBody,$response);
			$country_code = strtolower($response['COUNTRYCODE']);
			return $country_code;
		}
		public function charge($chargeIncTax,$taxToAdd,$charge,$agreementid,$desc)
		{
			$endpoint = ($this->sandbox)?$this->baseurl_test:$this->baseurl_live; 
			
			$body = array(
		        "USER"=>$this->username
				,"PWD"=>$this->password
				,"SIGNATURE"=>$this->signature
				,"VERSION"=>"86"
				,"METHOD"=>"DoReferenceTransaction"
				,"AMT"=>$chargeIncTax
				,"TAXAMT"=>$taxToAdd
				,"ITEMAMT"=>$charge
				,"CURRENCYCODE"=>$this->currency
				,"PAYMENTACTION"=>"SALE"
				,"REFERENCEID"=>$agreementid
				,"IPADDRESS"=>$_SERVER['REMOTE_ADDR']
				,"DESC"=>$desc
			);
			$request = new SWBRestRequest($endpoint, 'POST', $body);
			$request->execute();
			parse_str($request->responseBody,$response);
			$result="";
			$result = $response['PAYMENTSTATUS'];
			if (isset($response['PAYMENTSTATUS']) && $result=="Completed") {
				return true;

			} else {
				return false;
			}
		}
	}
?>