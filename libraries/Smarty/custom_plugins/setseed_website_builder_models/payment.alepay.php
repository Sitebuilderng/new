<?php


	class PaymentGateway extends Model {
		public $sandbox;
		public $username;
		public $password;
		public $signature;
		public $currency;
		public $product_title;
		public $cancel_url;
		public $return_url;
		public $token;
		public $user;
		
		
		public function getGatewayURL()
		{
			$Alepay = new Alepay(array(
				"apiKey"=>$this->username
				,"encryptKey"=>$this->password
				,"checksumKey"=>$this->signature
				,"callbackUrl"=>$this->return_url
				,'env'=>($this->sandbox)?"test":"live"
			));

			$data = array(
		        "id"=>$this->user['id']
				,"firstName"=>$this->user['first_name']
				,"lastName"=>$this->user['last_name']
				,"street"=>$this->user['street']					
				,"city"=>$this->user['city']
				,"state"=>$this->user['state']
				,"postalCode"=>$this->user['postal_code']
				,"country"=>$this->user['country']
				,"email"=>$this->user['email']
				,"phoneNumber"=>$this->user['phone_number']
				,"callback"=>$this->return_url
			);

			$ok = $Alepay->sendCardLinkRequest($data);
			print_r($ok);
			
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
		public function charge($chargeIncTax,$taxToAdd,$charge,$agreementid,$desc)
		{
			//$this->currency // currency code

			if ($paid){
				return true;
			} else {
				return false;
			}
		}
	}
?>