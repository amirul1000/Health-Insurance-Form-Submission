<?php

	$a['BirthYear'] = $_REQUEST['BirthYear'];   
	$a['BirthMonth'] = $_REQUEST['BirthMonth'];    
	$a['IPAddress'] = $_SERVER['REMOTE_ADDR'];
	$a['BirthDate'] = $_REQUEST['LifeApplicantDateOfBirth']; 
	$a['Gender'] = $_REQUEST['LifeApplicantGender'];  
	$a['ZIPCode'] = $_REQUEST['ContactInfoZipCode'];  
	$a['EmailAddress'] = $_REQUEST['ContactInfoEmail'];   
	$a['FirstName'] = $_REQUEST['ContactInfoFirstName'];  
	$a['LastName'] = $_REQUEST['ContactInfoLastName']; 
	$a['Address'] = $_REQUEST['ContactInfoAddress']; 
	$a['City'] = $_REQUEST['ContactInfoCity']; 
	$a['InsuredSince'] = $_REQUEST['LifeHistoryCurrentInsuranceCurrentlyInsured']; 
	$a['InsuranceCompany'] = $_REQUEST['InsuranceCompany'];  
	$a['Conditions'] = $_REQUEST['Conditions'];
	$a['CoverageType'] = $_REQUEST['RequestedCoveragePolicyType'];
	$a['Pregnant'] = $_REQUEST['Pregnant']; 
	$a['ExpirationDate'] = $_REQUEST['ExpirationDate'];  
	$a['Education'] = $_REQUEST['Education']; 
	$a['HouseHoldSize'] = $_REQUEST['HouseHoldSize']; 
	$a['lead_id'] = $_REQUEST['lead_id'];  
	$a['CreditRating'] = $_REQUEST['CreditRating']; 
	$a['HouseHoldIncome'] = $_REQUEST['HouseHoldIncome'];
	$a['Alcoholabstain'] = $_REQUEST['Alcoholabstain'];
	$a['Hospitalized'] = $_REQUEST['Hospitalized'];
	$a['Smoker'] = $_REQUEST['Smoker'];
	$a['DeniedInsurance'] = $_REQUEST['DeniedInsurance'];
	$a['YearsAtResidence'] = $_REQUEST['YearsAtResidence'];
	$a['MonthsAtResidence'] = $_REQUEST['MonthsAtResidence'];
	$a['ResidenceType'] = $_REQUEST['ResidenceType'];
	$a['DayPhoneNumber'] = $_REQUEST['ContactInfoPhoneDay'];
	$a['State'] = $_REQUEST['ContactInfoState'];
	$a['PhoneNumber'] = $_REQUEST['ContactInfoPhoneEvening'];
	$a['MaritalStatus'] = $_REQUEST['LifeApplicantMaritalStatus'];
	$a['RelationshipToApplicant'] = $_REQUEST['RelationshipToApplicant'];
	$a['Weight'] = $_REQUEST['LifeApplicantWeightInPounds'];
	$a['Student'] = $_REQUEST['Student'];
	$a['Height_Inch'] = $_REQUEST['LifeApplicantHeightInInches'];
	$a['Height_FT'] = $_REQUEST['LifeApplicantHeightInFeet'];
	$a['USResidence'] = $_REQUEST['USResidence'];
	$a['Occupation'] = $_REQUEST['Occupation'];
   
   $server_url  =  "http://www.leadwrench.com/api/1574e2f46ab2f5cd24b75f3561ee6c1a22a55/";
			   
   //post to t3 as string URL
	$postValuesString = ""; // blank to start
			
	foreach($a as $var => $val){
		if(strlen($postValuesString))$postValuesString.= "&";
		$postValuesString.= $var . "=" . urlencode($val);        
	}   
	// cURL t3
	$ch = curl_init();
	
	curl_setopt(    $ch,    CURLOPT_URL,               $server_url              );
	curl_setopt(    $ch,    CURLOPT_POST,              0                        );
	curl_setopt(    $ch,    CURLOPT_POSTFIELDS,        $postValuesString        );    
	curl_setopt(    $ch,    CURLOPT_HTTPHEADER,        array("Expect:")         ); 
	curl_setopt(    $ch,    CURLOPT_FAILONERROR,       1                        );
	curl_setopt(    $ch,    CURLOPT_HEADER,            0                        );
	curl_setopt(    $ch,    CURLOPT_RETURNTRANSFER,    1                        );
	curl_setopt(    $ch,    CURLOPT_SSL_VERIFYPEER,    false                    );
	curl_setopt(    $ch,    CURLOPT_SSL_VERIFYHOST,    false                    );
	curl_setopt(    $ch,    CURLOPT_TIMEOUT,           120                      );
	curl_setopt(    $ch,    CURLINFO_HEADER_OUT,       true                     );
	curl_setopt(    $ch,    CURLOPT_HTTP_VERSION,      CURL_HTTP_VERSION_1_1    );
	
	if(curl_errno($ch)){              
		echo "100: ".$error_message;
		$t3_curl_status = "ERROR: cURL t3";
		
		$message = "Data sent Error";
	}
	else {
		// successful send to t3
		$Response = curl_exec($ch);
		$t3_curl_status = "SUCCESS: T3 send";
		curl_close($ch);
		
	}
?>	