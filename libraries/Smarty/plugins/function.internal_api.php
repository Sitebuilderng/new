<?php

class InternalAPIRestRequest  
{  
	public $authHeaders;    
    public $responseBody;  
    public $url;  
    public $verb;  
    public $requestBody;  
    public $requestLength;  
    public $acceptType;  
    public $responseInfo;  
  
    public function __construct ($url = null, $verb = 'GET', $requestBody = null)  
    {  
        $this->url               = $url;  
        $this->verb              = $verb;  
        $this->requestBody       = $requestBody;  
        $this->requestLength     = 0;  
        $this->acceptType        = 'application/json';  
        $this->responseBody      = null;  
        $this->responseInfo      = null;  
  
        if ($this->requestBody !== null)  
        {  
            $this->buildPostBody();  
        }  
    }  
  
    public function flush ()  
    {  
        $this->requestBody       = null;  
        $this->requestLength     = 0;  
        $this->verb              = 'GET';  
        $this->responseBody      = null;  
        $this->responseInfo      = null;  
    }  
  
    public function execute ()  
    {  
  		$ch = curl_init();  
		$this->setAuth($ch);  

		    try  
		    {  
		        switch (strtoupper($this->verb))  
		        {  
		            case 'GET':  
		                $this->executeGet($ch);  
		                break;  
		            case 'POST':  
		                $this->executePost($ch);  
		                break;  
		            case 'PUT':  
		                $this->executePut($ch);  
		                break;  
		            case 'DELETE':  
		                $this->executeDelete($ch);  
		                break;  
		            default:  
		                throw new InvalidArgumentException('Current verb (' . $this->verb . ') is an invalid REST verb.');  
		        }  
		    }  
		    catch (InvalidArgumentException $e)  
		    {  
		        curl_close($ch);  
		        throw $e;  
		    }  
		    catch (Exception $e)  
		    {  
		        curl_close($ch);  
		        throw $e;  
		    }
    }  
  
    public function buildPostBody ($data = null)  
    {  
  		$data = ($data !== null) ? $data : $this->requestBody;  

	    if (!is_array($data))  
	    {  
	        throw new InvalidArgumentException('Invalid data input for postBody.  Array expected');  
	    }  

	    $data = http_build_query($data, '', '&');  
	    $this->requestBody = $data;
    }  
  
    protected function executeGet ($ch)  
    {         
  	    $this->doExecute($ch);
    }  
  
    protected function executePost ($ch)  
    {  
  		if (!is_string($this->requestBody))  
		    {  
		        $this->buildPostBody();  
		    }  

		    curl_setopt($ch, CURLOPT_POSTFIELDS, $this->requestBody);  
		    curl_setopt($ch, CURLOPT_POST, 1);  

		    $this->doExecute($ch);
    }  
  
    protected function executePut ($ch)  
    {  
  		if (!is_string($this->requestBody))  
		    {  
		        $this->buildPostBody();  
		    }  

		    $this->requestLength = strlen($this->requestBody);  

		    $fh = fopen('php://memory', 'rw');  
			    fwrite($fh, $this->requestBody);  
			    rewind($fh);  

			    curl_setopt($ch, CURLOPT_INFILE, $fh);  
			    curl_setopt($ch, CURLOPT_INFILESIZE, $this->requestLength);  
			    curl_setopt($ch, CURLOPT_PUT, true);

		    $this->doExecute($ch);
		
		    fclose($fh);
    }  
  
    protected function executeDelete ($ch)  
    {  
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST,'DELETE');
        $this->doExecute($ch);
    }  
  
    protected function doExecute (&$curlHandle)  
    {  
		$this->setCurlOpts($curlHandle);  
		$this->responseBody = curl_exec($curlHandle);  
	    $this->responseInfo  = curl_getinfo($curlHandle);  

	    curl_close($curlHandle);
    }  
  
    protected function setCurlOpts (&$curlHandle)  
    {  
  	 	curl_setopt($curlHandle, CURLOPT_TIMEOUT, 10);  
	    curl_setopt($curlHandle, CURLOPT_URL, $this->url);  
	    curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, true);  
	    curl_setopt($curlHandle, CURLOPT_FOLLOWLOCATION, true); 
	     
    }  
  
    protected function setAuth (&$curlHandle)  
    {  
  		if ($this->authHeaders !== null)  
	    {  
	        curl_setopt($curlHandle, CURLOPT_HTTPHEADER, $this->authHeaders);  
	    }
    }  
}
function smarty_function_internal_api($params, &$smarty)
{

    if ($params['method']=="GET") {
    	$request = new InternalAPIRestRequest($params['domain'].$params['path'], 'GET');  	
    }
    if ($params['method']=="POST") {
    	$body = explode("&",$params['body']);

    	foreach ($body as $pair) {
    		$pair = explode("=",$pair);
    		$bodyArray[$pair[0]] = $pair[1];
    	}
    	$request = new InternalAPIRestRequest($params['domain'].$params['path'], 'POST', $bodyArray);
    }

    if ($params['method']=="PUT") {
    	$body = explode("&",$params['body']);

    	foreach ($body as $pair) {
    		$pair = explode("=",$pair);
    		$bodyArray[$pair[0]] = $pair[1];
    	}
    	$request = new InternalAPIRestRequest($params['domain'].$params['path'], 'PUT', $bodyArray);
    }
    
	$request->authHeaders  = array(
		'API-KEY: '.$params['api_key']
		,'Host: '.$_SERVER['HTTP_HOST']
		);
 	
	$request->execute();

	$response = json_decode($request->responseBody,true);

	if (isset($params['name'])) {
    	$smarty->assign($params['name'],$request->responseInfo['http_code']);		
	}

	if (isset($params['output'])) {
	    $smarty->assign($params['output'],$response);
	}

}