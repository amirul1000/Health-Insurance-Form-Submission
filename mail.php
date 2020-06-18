<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pata Insurance Form</title>

</head>
<body>
</body>
</html>

<?php 

include("leadwrench_curl.php");

$ToEmail = 'abhijit@primediart.com'; 
$EmailSubject = 'Pata Insurance Form';
$mailheader = "From: ".$_POST["ContactInfoEmail"]."\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n";

$MESSAGE_BODY .= "<b>Gender&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicantGender"]."<br><br>";

$MESSAGE_BODY .= "<b>Date Of Birth&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicantDateOfBirth"]."<br><br>";

$MESSAGE_BODY .= "<b>Height&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicant_height"]."<br><br>";

$MESSAGE_BODY .= "<b>Weight&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicant_weight"]."<br><br>";

$MESSAGE_BODY .= "<b>Smoker/Tobacco Use&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicantsmoker"]."<br><br>";

$MESSAGE_BODY .= "<b>How many people are in your household?&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicantHouseholdSize"]."<br><br>";

$MESSAGE_BODY .= "<b>Expected annual household income?&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicantAnnualIncomeString"]."<br><br>";

$MESSAGE_BODY .= "<b>Have you experienced any major life events in the past 30 days?&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["HealthApplicantQualifyingLifeEvent"]."<br><br>";

$MESSAGE_BODY .= "<b>Are you self employed?&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["MedicalHistorySelfEmployed"]."<br><br>";

$MESSAGE_BODY .= "<b>Does anyone have any major health conditions?&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["MedicalHistoryMedicalMajorConditionsMajorHealthConditions"]."<br><br>";

$MESSAGE_BODY .= "<b>First Name&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["ContactInfoFirstName"]."<br><br>";

$MESSAGE_BODY .= "<b>Last Name&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["ContactInfoLastName"]."<br><br>";

$MESSAGE_BODY .= "<b>Address&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["ContactInfoAddress"]."<br><br>";

$MESSAGE_BODY .= "<b>Zip Code&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["ContactInfoZipCode"]."<br><br>";

$MESSAGE_BODY .= "<b>Day phone&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["ContactInfoPhoneDay"]."<br><br>";

$MESSAGE_BODY .= "<b>Email&nbsp;&nbsp;-&nbsp;&nbsp;</b>".$_POST["ContactInfoEmail"]."<br><br>";
//echo $MESSAGE_BODY;
mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader) or die ("Failure"); 
echo "<script>location.href='thank-you.html'</script>";
?>