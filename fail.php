<?php


    $username = "wido";
	$password = "Wido1234";
	$campaign_id = "1559";
	$partner_id = "5036";
	

   $endPoint = "http://reporting.leadwrench.com/leads/declined.json";

	
	$endPoint .= "?username=" . $username;
	$endPoint .= "&password=" . $password;
	$endPoint .= "&campaign_id=" . $campaign_id;
	$endPoint .= "&partner_id=" . $partner_id;
	
	
	
	
	$leads = makeCurlRequest($endPoint);
	
	echo $leads;
	
	$arr = json_decode($leads);
	
	//for($i=count($arr)-1;$i>=0;$i--)
	//{
		
	$i = count($arr)-1;
		
	$data = $arr[$i]->partner_response;
   $arr = explode("||",$data);

	  echo "<pre>";
	   print_r($arr[0]);
	  echo "</pre>";


	
	
	function makeCurlRequest($url) {
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_MAXREDIRS, 4);
		curl_setopt($ch, CURLOPT_TIMEOUT, 10);
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
?>	