<?php
require 'vendor/autoload.php'; 
use net\authorize\api\contract\v1 as AnetAPI;
use net\authorize\api\controller as AnetController;

function smarty_function_checkout_authorizenet($params, &$smarty)
{	
	
	define("AUTHORIZENET_LOG_FILE","phplog");

	// Common setup for API credentials  
	  $merchantAuthentication = new AnetAPI\MerchantAuthenticationType();   
	  $merchantAuthentication->setName($params['apilogin']);   
	  $merchantAuthentication->setTransactionKey($params['transkey']);   
	  $refId = 'ref' . time();

	// Create the payment data for a credit card
	  $creditCard = new AnetAPI\CreditCardType();
	  $creditCard->setCardNumber($params['card']);  
	  $creditCard->setExpirationDate($params['expire']);
      $creditCard->setCardCode($params['ccv']);
	  
	// Add the payment data to a paymentType object
	  $paymentOne = new AnetAPI\PaymentType();
	  $paymentOne->setCreditCard($creditCard);
	  
	  
      // Set the customer's Bill To address
      $customerAddress = new AnetAPI\CustomerAddressType();
	  $name = preg_split("/\s+(?=\S*+$)/",$params['cardname']);

      $customerAddress->setFirstName($name[0]);
      $customerAddress->setLastName($name[1]);
      $customerAddress->setAddress($params['address'].' '.$params['address2']);
      $customerAddress->setCity($params['city']);
      $customerAddress->setState($params['state']);
      $customerAddress->setZip($params['zip']);
      $customerAddress->setCountry($params['country']);

      // Set the customer's identifying information
      $customerData = new AnetAPI\CustomerDataType();
      $customerData->setType("individual");
      $customerData->setId($params['userid']);
      $customerData->setEmail($params['email']);
	  
	// Create a transaction
	  $total = $params['total'] - $params['discount'];
	  $tax = $params['tax']; 
	  $shipping = $params['shipping']; 	
	  $transactionRequestType = new AnetAPI\TransactionRequestType();
	  $transactionRequestType->setTransactionType("authCaptureTransaction");   
	  $transactionRequestType->setAmount($total);
  	  $transactionRequestType->setTax($tax);
	  $transactionRequestType->setShipping($shipping);
	  $transactionRequestType->setPayment($paymentOne);
      $transactionRequestType->setBillTo($customerAddress);
      $transactionRequestType->setCustomer($customerData);

	  
	  $request = new AnetAPI\CreateTransactionRequest();
	  $request->setMerchantAuthentication($merchantAuthentication);
	  $request->setRefId( $refId);
	  $request->setTransactionRequest($transactionRequestType);
	  
	  $controller = new AnetController\CreateTransactionController($request);
	  
	  if ($params['sandbox']) {
	  	$response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::SANDBOX);  	  	
	  } else {
	 	 $response = $controller->executeWithApiResponse(\net\authorize\api\constants\ANetEnvironment::PRODUCTION);	
	  }

      if ($response != null) {
          // Check to see if the API request was successfully received and acted upon
          if ($response->getMessages()->getResultCode() == "Ok") {
              // Since the API request was successful, look for a transaction response
              // and parse it to display the results of authorizing the card
              $tresponse = $response->getTransactionResponse();
        
              if ($tresponse != null && $tresponse->getMessages() != null) {
				  $txnid = $tresponse->getTransId();
                  $ok = " Successfully created transaction with Transaction ID: " . $txnid . "\n";
                  $ok .= " Transaction Response Code: " . $tresponse->getResponseCode() . "\n";
                  $ok .= " Message Code: " . $tresponse->getMessages()[0]->getCode() . "\n";
                  $ok .= " Auth Code: " . $tresponse->getAuthCode() . "\n";
                  $ok .= " Description: " . $tresponse->getMessages()[0]->getDescription() . "\n";
              } else {
                 // $fail = "Transaction Failed \n";
                  if ($tresponse->getErrors() != null) {
                   //   $fail .= " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                      $fail = $tresponse->getErrors()[0]->getErrorText();
                  }
              }
              // Or, print errors if the API request wasn't successful
          } else {
              //$fail = "Transaction Failed \n";
              $tresponse = $response->getTransactionResponse();
        
              if ($tresponse != null && $tresponse->getErrors() != null) {
               //   $fail .= " Error Code  : " . $tresponse->getErrors()[0]->getErrorCode() . "\n";
                  $fail = $tresponse->getErrors()[0]->getErrorText();
              } else {
                 // $fail .= " Error Code  : " . $response->getMessages()->getMessage()[0]->getCode() . "\n";
                  $fail = $response->getMessages()->getMessage()[0]->getText() ;
              }
          }
      } else {
          $fail =  "No response returned";
      }
	  if (isset($fail)) {
		  $smarty->assign("authnetfail",$fail);
	  } else {
		  $smarty->assign("authnetcharge",$total);	  	
  		  $smarty->assign("authnetid",$txnid);	  
		  $smarty->assign("authnetfirst_name",$name[0]);	  	
  		  $smarty->assign("authnetlast_name",$name[1]);	  	
		  $smarty->assign("authnetok",$ok);	  	
	  }
}
?>