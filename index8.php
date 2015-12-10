<?php
	global $itsOK, $error_msg;
	$itsOK=0;
	
	
	$YOUR_API_KEY="AIzaSyCvO684NlsACc79xhxPa7mNe4DJZvFXiAY";
	$url_for_geocode="https://maps.googleapis.com/maps/api/geocode/xml?address=".urlencode($_GET["st_ad"]).",".urlencode($_GET["city"]).",".urlencode($_GET["stsel"])."&key=".$YOUR_API_KEY;
	
	$xml_response=simplexml_load_file($url_for_geocode) or die("Error: Cannot create object");;
   	
	
	$status_returned_geocode=$xml_response->status;
	//echo $status_returned_geocode;
	if($status_returned_geocode!="ZERO_RESULTS"&&$status_returned_geocode!="OK")
	{
		$error_msg="OOPS! SOMETHING WENT WRONG, TRY AGAIN LATER.";
	
	}
	if($status_returned_geocode=="ZERO_RESULTS")
	{
		$error_msg="NO RESULTS RETURNED, PLEASE TRY ANOTHER ADDRESS.";
	}
	if($status_returned_geocode=="OK")
	{
	$itsOK=1;
	$lati=$xml_response->result->geometry->location->lat;
	$longi=$xml_response->result->geometry->location->lng;
	
	
	
	//--------------------------------longitude and latitude retrieved, now call forecast.io api--------------------------------
	
	$forecast_api_key="a821eb134b5303451c194bb2ec12d078";
	if($_GET["degree"]=="fahrenheit")
	{	$degr="us";
			}
	if($_GET["degree"]=="celsius")
	{	$degr="si";
			}
	$url_for_forecast="https://api.forecast.io/forecast/".$forecast_api_key."/".$lati.",".$longi."?units=".$degr."&exclude=flags";
	
	$forecast_response_bd = file_get_contents($url_for_forecast);
	
	//$forecast_response=json_decode($forecast_response_bd,TRUE);
	//echo json_encode($forecast_response_bd);	
	//return json_encode($forecast_response_bd);
	//$return->data = array();
	
	echo json_encode($forecast_response_bd);
	}
	
	
	
	
	

?>
