<?php
  session_start();
?>

<div style="display:none;">
	<iframe src="http://tracking.quickclickhop.com/aff_lsr?transaction_id=<?=$_SESSION['TRANSACTION_ID']?>"></iframe>
</div>

<div style="display:none;">
  <?php	
	//$url = "http://tracking.quickclickhop.com/aff_lsr?offer_id=918&transaction_id=".$_SESSION['TRANSACTION_ID'];
	//echo file_get_contents($url);
  ?>
</div>

<div>SUCCESS</div>
<div><a href="http://tracking.mysecureredirect.com/aff_c?offer_id=698&aff_id=2"><input name="" type="button" value="Click here to input new lead" /></a></div>

<?php

/*
   $username = "wido";
	$password = "Wido1234";
	$campaign_id = "1564";
	$partner_id = "5101";
	

   $endPoint = "http://reporting.leadwrench.com/leads/success.json";

	
	$endPoint .= "?username=" . $username;
	$endPoint .= "&password=" . $password;
	$endPoint .= "&campaign_id=" . $campaign_id;
	$endPoint .= "&partner_id=" . $partner_id;
	
	
	
	
	$leads = makeCurlRequest($endPoint);
	
	

	
	$arr = json_decode($leads);
	
	//for($i=count($arr)-1;$i>=0;$i--)
	//{
		
		$i = count($arr)-1;
		

	  echo "<pre>";
	   print_r($arr[$i] );
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
	
	*/
?>	
