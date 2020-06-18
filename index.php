<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js OldSchoolPatriot quoteform classic-form Life v1  lpv-default    lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="no-js OldSchoolPatriot quoteform classic-form Life v1  lpv-default    lt-ie10 lt-ie9 lt-ie8 ie7"> <![endif]-->
<!--[if IE 8]>    <html class="no-js OldSchoolPatriot quoteform classic-form Life v1  lpv-default    lt-ie10 lt-ie9 ie8"> <![endif]-->
<!--[if IE 9]>    <html class="no-js OldSchoolPatriot quoteform classic-form Life v1  lpv-default    lt-ie10 ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js OldSchoolPatriot quoteform classic-form Life v1  lpv-default   ">
<!--<![endif]-->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="format-detection" content="telephone=no">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Affordable Life Insurance | PataInsurance</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
<link href="css/cssLessLayout.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox.css" media="screen" />
<link href="css/cssLessMain.css" rel="stylesheet" />
<script src="js/jquery-1.11.0.min.js"></script>
<script type="text/javascript">

function validate()
{

var radioSelected=false;
for(i=0; i<f1.gender.length; i++)
{
if(f1.gender[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please select your Gender");
return false;
}

dob=document.getElementById("dob").value;
if(dob=="")
{
alert("Please Fill up the Date of Birth Field");
return false;
}

if(document.getElementById("ft").selectedIndex<=0)
{
alert("Please select the Ft. Option");
return false;
}
if(document.getElementById("in").selectedIndex<=0)
{
alert("Please select the Inches Option");
return false;
}

weight=document.getElementById("weight").value;
if(weight=="")
{
alert("Please Enter your Weight");
return false;
}

if(document.getElementById("ms").selectedIndex<=0)
{
alert("Please select your Marital Status Option");
return false;
}

if(document.getElementById("policy").selectedIndex<=0)
{
alert("Please select one of the Policy option");
return false;
}

if(document.getElementById("coverage").selectedIndex<=0)
{
alert("Please select your Coverage Amount");
return false;
}

var radioSelected=false;
for(i=0; i<f1.lifestyle.length; i++)
{
if(f1.lifestyle[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please select your Avtivities");
return false;
}

var radioSelected=false;
for(i=0; i<f1.dui.length; i++)
{
if(f1.dui[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please select your Convicted option");
return false;
}

var radioSelected=false;
for(i=0; i<f1.insurance.length; i++)
{
if(f1.insurance[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please selct your Insurance option");
return false;
}

var radioSelected=false;
for(i=0; i<f1.military.length; i++)
{
if(f1.military[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please select that have you ever served in Military");
return false;
}

var radioSelected=false;
for(i=0; i<f1.medication.length; i++)
{
if(f1.medication[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please select the Medication option");
return false;
}

var radioSelected=false;
for(i=0; i<f1.major.length; i++)
{
if(f1.major[i].checked)
radioSelected=true;
}
if(!radioSelected)
{
alert("Please select your Health Condition option");
return false;
}

ContactInfo_FirstName=document.getElementById("ContactInfo_FirstName").value;
if(ContactInfo_FirstName=="")
{
alert("Please fill up your First Name");
return false;
}

ContactInfo_LastName=document.getElementById("ContactInfo_LastName").value;
if(ContactInfo_LastName=="")
{
alert("Please Fill up your Last Name");
return false;
}

ContactInfo_Address=document.getElementById("ContactInfo_Address").value;
if(ContactInfo_Address=="")
{
alert("Please Fill up your Address");
return false;
}

ContactInfo_City=document.getElementById("ContactInfo_City").value;
if(ContactInfo_City=="")
{
alert("Please enter your City Name");
return false;
}

if(document.getElementById("ContactInfo_State").selectedIndex<=0)
{
alert("Choose One State");
return false;
}

ContactInfo_ZipCode=document.getElementById("ContactInfo_ZipCode").value;
if(ContactInfo_ZipCode=="")
{
alert("Please enter your Zip Code");
return false;
}

ContactInfo_PhoneDay=document.getElementById("ContactInfo_PhoneDay").value;
if(ContactInfo_PhoneDay=="")
{
alert("Please enter your Day Phone No.");
return false;
}

ContactInfo_PhoneEvening=document.getElementById("ContactInfo_PhoneEvening").value;
if(ContactInfo_PhoneEvening=="")
{
alert("Please enter your Evening Phone No.");
return false;
}

ContactInfo_Email=document.getElementById("ContactInfo_Email").value;
if(ContactInfo_Email=="")
{
alert("Please enter your Valid Email Address");
return false;
}

}
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="true"){
         $(".openbox").not(".true").hide();			
            $(".openbox").show();
        }
        if($(this).attr("value")=="false"){
            $(".openbox").not(".false").hide();
            $(".openbox").hide();
        }
    });
  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="yes"){
         $(".opensource").not(".yes").hide();			
            $(".opensource").show();
        }
        if($(this).attr("value")=="no"){
            $(".opensource").not(".no").hide();
            $(".opensource").hide();
        }
    });
  });

</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="yup"){
         $(".unlevel").not(".yup").hide();			
            $(".unlevel").show();
        }
        if($(this).attr("value")=="nope"){
            $(".unlevel").not(".nope").hide();
            $(".unlevel").hide();
        }
    });
  });

</script>
</head>
<body>
<div id="main-container">
  <div id="background-hack"></div>
  <div id="header-container">
    <div id="header-inner-container">
      <div id="header-one">
        <div class="header-content">
          <div id="mobile-menu" class="hidden only-mobile">
            <div id="steps-button"> <i class="fa-bars"></i> </div>
          </div>
          <div id="logo" class=""> <a href="index.html" tabindex="-1"> <span class="helper"></span> <img src="images/logo.png" alt="PataInsurance Logo"/> </a> </div>
        </div>
      </div>
      <div id="header-two">
        <div class="header-content"></div>
      </div>
    </div>
  </div>
  <div id="main-content-container">
    <div id="main-content-inner-container">
      <div id="main-content">
        <div id="form-container">
          <div class="intro layout-section">
            <h2>The Fastest Way to Get Free Life Insurance Quotes!</h2>
          </div>
          <form name="f1" ID="quoteform" action="mail.php" method="post" onsubmit="return validate()">
            <div id="MedicalPrimaryApplicantInfoContainer">
              <div id="MedicalPrimaryApplicantInfoSection" class="layout-section form-section horizontal-questions">
                <div class="question" id="HealthGenderQuestion">
                  <label class="label-validation-valid" for=" ">Gender<span class="required"></span></label>
                  <div class="radios">
                    <label>
                      <input id="gender" name="LifeApplicantGender" type="radio" value="Male" />
                      M</label>
                    <label>
                      <input id="gender" name="LifeApplicantGender" type="radio" value="Female" />
                      F</label>
                  </div>
                </div>
                <div class="question maskeddate" id="HealthDobQuestion">
                  <label class="label-validation-valid" for="LifeApplicant_DateOfBirth">Date of birth <span class="only-mobile date-format">mm/dd/yyyy</span><span class="required"></span></label>
                  <input class="dbirth mobile-type-date" data-mask-sign="date" id="dob" max="2015-12-05" maxlength="10" min="1915-12-31" name="LifeApplicantDateOfBirth" placeholder="mm/dd/yyyy" type="text" value="" />
                </div>
                <div class="question" id="HealthHeightQuestion">
                  <label class="label-validation-valid" for="LifeApplicant_HeightInFeet">Height<span class="required"></span></label>
                  <div class="selects">
                    <select class="odd" id="ft" name="LifeApplicantHeightInFeet">
                      <option value="">Ft</option>
                      <option value="Three">3&#39;</option>
                      <option value="Four">4&#39;</option>
                      <option value="Five">5&#39;</option>
                      <option value="Six">6&#39;</option>
                      <option value="Seven">7&#39;</option>
                    </select>
                    <select class="odd" id="in" name="LifeApplicantHeightInInches">
                      <option value="">In</option>
                      <option value="Zero">0&quot;</option>
                      <option value="One">1&quot;</option>
                      <option value="Two">2&quot;</option>
                      <option value="Three">3&quot;</option>
                      <option value="Four">4&quot;</option>
                      <option value="Five">5&quot;</option>
                      <option value="Six">6&quot;</option>
                      <option value="Seven">7&quot;</option>
                      <option value="Eight">8&quot;</option>
                      <option value="Nine">9&quot;</option>
                      <option value="Ten">10&quot;</option>
                      <option value="Eleven">11&quot;</option>
                    </select>
                  </div>
                </div>
                <div class="question maskedweight" id="HealthWeightQuestion">
                  <label class="label-validation-valid" for="LifeApplicant_WeightInPounds">Weight<span class="required"></span></label>
                  <input class="weight" data-mask-sign="weight" id="weight" maxlength="3" name="LifeApplicantWeightInPounds" placeholder="e.g. 120" type="tel" value="" />
                </div>
                <div class="question" id="HealthTobaccoQuestion">
                  <label class="label-validation-valid" for=" ">Tobacco?<span class="required"></span></label>
                  <div class="radios">
                    <label>
                      <input id="tobacco" name="LifeApplicantTobaccoUser" type="radio" value="True" />
                      Yes</label>
                    <label>
                      <input checked="checked" id="tobacco" name="LifeApplicantTobaccoUser" type="radio" value="False" />
                      No</label>
                  </div>
                </div>
              </div>
            </div>
            <div id="PolicyInfoSection" class="layout-section form-section label-width-75">
              <div class="question">
                <label class="label-validation-valid" for="LifeApplicant_MaritalStatus">What is your current marital status?<span class="required"></span></label>
                <select id="ms" name="LifeApplicantMaritalStatus">
                  <option value="Single">Single</option>
                  <option selected="selected" value="Married">Married</option>
                  <option value="Separated">Separated</option>
                  <option value="Divorced">Divorced</option>
                  <option value="Widowed">Widowed</option>
                  <option value="DomesticPartner">Domestic Partner</option>
                </select>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for="RequestedCoverage_PolicyType">What type of policy are you interested in?<span class="required"></span></label>
                <select id="policy" name="RequestedCoveragePolicyType">
                  <option value="TermOneYear">Term - 1 year</option>
                  <option value="TermFiveYears">Term - 5 years</option>
                  <option selected="selected" value="TermTenYears">Term - 10 years</option>
                  <option value="TermFifteenYears">Term - 15 years</option>
                  <option value="TermTwentyYears">Term - 20 years</option>
                  <option value="TermTwentyFiveYears">Term - 25 years</option>
                  <option value="TermThirtyYears">Term - 30 years</option>
                  <option value="WholeLife">Whole Life</option>
                  <option value="UniversalLife">Universal Life</option>
                  <option value="CashValue">Cash value</option>
                  <option value="NotSure">Not sure</option>
                </select>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for="RequestedCoverage_PolicyAmount">How much coverage would you like?<span class="required"></span></label>
                <select id="coverage" name="RequestedCoveragePolicyAmount">
                  <option value="NoPreference">No preference</option>
                  <option value="TenThousand">$10,000</option>
                  <option value="TwentyFiveThousand">$25,000</option>
                  <option value="FiftyThousand">$50,000</option>
                  <option value="SeventyFiveThousand">$75,000</option>
                  <option selected="selected" value="OneHundredThousand">$100,000</option>
                  <option value="OneHundredFiftyThousand">$150,000</option>
                  <option value="TwoHundredThousand">$200,000</option>
                  <option value="TwoHundredFiftyThousand">$250,000</option>
                  <option value="ThreeHundredThousand">$300,000</option>
                  <option value="ThreeHundredFiftyThousand">$350,000</option>
                  <option value="FourHundredThousand">$400,000</option>
                  <option value="FourHundredFiftyThousand">$450,000</option>
                  <option value="FiveHundredThousand">$500,000</option>
                  <option value="FiveHundredFiftyThousand">$550,000</option>
                  <option value="SixHundredThousand">$600,000</option>
                  <option value="SixHundredFiftyThousand">$650,000</option>
                  <option value="SevenHundredThousand">$700,000</option>
                  <option value="SevenHundredFiftyThousand">$750,000</option>
                  <option value="EightHundredThousand">$800,000</option>
                  <option value="EightHundredFiftyThousand">$850,000</option>
                  <option value="NineHundredThousand">$900,000</option>
                  <option value="NineHundredFiftyThousand">$950,000</option>
                  <option value="OneMillion">$1,000,000</option>
                  <option value="OneMillionOneHundredThousand">$1,100,000</option>
                  <option value="OneMillionTwoHundredThousand">$1,200,000</option>
                  <option value="OneMillionThreeHundredThousand">$1,300,000</option>
                  <option value="OneMillionFourHundredThousand">$1,400,000</option>
                  <option value="OneMillionFiveHundredThousand">$1,500,000</option>
                  <option value="OneMillionSixHundredThousand">$1,600,000</option>
                  <option value="OneMillionSevenHundredThousand">$1,700,000</option>
                  <option value="OneMillionEightHundredThousand">$1,800,000</option>
                  <option value="OneMillionNineHundredThousand">$1,900,000</option>
                  <option value="TwoMillion">$2,000,000</option>
                  <option value="TwoMillionOneHundredThousand">$2,100,000</option>
                  <option value="TwoMillionTwoHundredThousand">$2,200,000</option>
                  <option value="TwoMillionThreeHundredThousand">$2,300,000</option>
                  <option value="TwoMillionFourHundredThousand">$2,400,000</option>
                  <option value="TwoMillionFiveHundredThousand">$2,500,000</option>
                  <option value="TwoMillionSixHundredThousand">$2,600,000</option>
                  <option value="TwoMillionSevenHundredThousand">$2,700,000</option>
                  <option value="TwoMillionEightHundredThousand">$2,800,000</option>
                  <option value="TwoMillionNineHundredThousand">$2,900,000</option>
                  <option value="ThreeMillion">$3,000,000</option>
                  <option value="ThreeMillionOneHundredThousand">$3,100,000</option>
                  <option value="ThreeMillionTwoHundredThousand">$3,200,000</option>
                  <option value="ThreeMillionThreeHundredThousand">$3,300,000</option>
                  <option value="ThreeMillionFourHundredThousand">$3,400,000</option>
                  <option value="ThreeMillionFiveHundredThousand">$3,500,000</option>
                  <option value="ThreeMillionSixHundredThousand">$3,600,000</option>
                  <option value="ThreeMillionSevenHundredThousand">$3,700,000</option>
                  <option value="ThreeMillionEightHundredThousand">$3,800,000</option>
                  <option value="ThreeMillionNineHundredThousand">$3,900,000</option>
                  <option value="FourMillion">$4,000,000</option>
                  <option value="FourMillionOneHundredThousand">$4,100,000</option>
                  <option value="FourMillionTwoHundredThousand">$4,200,000</option>
                  <option value="FourMillionThreeHundredThousand">$4,300,000</option>
                  <option value="FourMillionFourHundredThousand">$4,400,000</option>
                  <option value="FourMillionFiveHundredThousand">$4,500,000</option>
                  <option value="FourMillionSixHundredThousand">$4,600,000</option>
                  <option value="FourMillionSevenHundredThousand">$4,700,000</option>
                  <option value="FourMillionEightHundredThousand">$4,800,000</option>
                  <option value="FourMillionNineHundredThousand">$4,900,000</option>
                  <option value="FiveMillion">$5,000,000</option>
                  <option value="SixMillion">$6,000,000</option>
                  <option value="SevenMillion">$7,000,000</option>
                  <option value="EightMillion">$8,000,000</option>
                  <option value="NineMillion">$9,000,000</option>
                  <option value="TenMillion">$10,000,000</option>
                  <option value="MoreThanTenMillion">More than $10,000,000</option>
                </select>
              </div>
            </div>
            <div id="MedicalHistorySection" class="layout-section form-section label-width-100">
              <div class="question">
                <label class="label-validation-valid" for=" ">Do you participate in activities such as piloting, sky diving, scuba diving, rock climbing, etc.?<span class="required"></span></label>
                <div class="radios">
                  <label>
                    <input id="lifestyle" name="LifeHistoryHazardousLifestyle" type="radio" value="True" />
                    Yes</label>
                  <label>
                    <input checked="checked" id="lifestyle" name="LifeHistoryHazardousLifestyle" type="radio" value="False" />
                    No</label>
                </div>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for=" ">Have you ever been convicted of DUI/DWI?<span class="required"></span></label>
                <div class="radios">
                  <label>
                    <input id="dui" name="LifeHistoryDui" type="radio" value="True" />
                    Yes</label>
                  <label>
                    <input checked="checked" id="dui" name="LifeHistoryDui" type="radio" value="False" />
                    No</label>
                </div>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for=" ">Have you had insurance within the last 30 days?<span class="required"></span></label>
                <div class="radios">
                  <label>
                    <input id="insurance" name="LifeHistoryCurrentInsuranceCurrentlyInsured" type="radio" value="true" />
                    Yes</label>
                  <label>
                    <input checked="checked" id="insurance" name="LifeHistoryCurrentInsuranceCurrentlyInsured" type="radio" value="false" />
                    No</label>
                </div>
              </div>
              <div id="CurrentInsuranceSection" class="openbox layout-section form-section form-subsection" style="display: none;" >
                <div class="question">
                  <label class="label-validation-valid" for="LifeHistory_CurrentInsurance_InsuranceCarrier">Who is/was your insurance company?<span class="required"></span></label>
                  <select id="LifeHistory_CurrentInsurance_InsuranceCarrier" name="LifeHistoryCurrentInsuranceInsuranceCarrier">
                    <option value="">-- Choose One --</option>
                    <option selected="selected" value="Other / My Company Is Not Listed">Other / My Company Is Not Listed</option>
                    <option value="AETNA">AETNA</option>
                    <option value="AIG">AIG</option>
                    <option value="Aflac">Aflac</option>
                    <option value="Allianz">Allianz</option>
                    <option value="Allstate Insurance">Allstate Insurance</option>
                    <option value="American Family Insurance">American Family Insurance</option>
                    <option value="American Financial">American Financial</option>
                    <option value="American Republic Insurance">American Republic Insurance</option>
                    <option value="Amica Insurance">Amica Insurance</option>
                    <option value="Blue Cross Blue Shield">Blue Cross Blue Shield</option>
                    <option value="CIGNA">CIGNA</option>
                    <option value="CNA">CNA</option>
                    <option value="Cal Farm Insurance">Cal Farm Insurance</option>
                    <option value="Chubb">Chubb</option>
                    <option value="Colonial Insurance">Colonial Insurance</option>
                    <option value="Erie Insurance">Erie Insurance</option>
                    <option value="Farm Bureau Insurance">Farm Bureau Insurance</option>
                    <option value="Farmers Insurance">Farmers Insurance</option>
                    <option value="Genworth Financial">Genworth Financial</option>
                    <option value="Golden Rule Insurance">Golden Rule Insurance</option>
                    <option value="Hartford Insurance">Hartford Insurance</option>
                    <option value="Investors Life">Investors Life</option>
                    <option value="John Hancock">John Hancock</option>
                    <option value="Liberty Mutual Insurance">Liberty Mutual Insurance</option>
                    <option value="Liberty National">Liberty National</option>
                    <option value="Mass Mutual">Mass Mutual</option>
                    <option value="Metlife Insurance">Metlife Insurance</option>
                    <option value="Monument Life Insurance Co">Monument Life Insurance Co</option>
                    <option value="Monumental Life Insurance">Monumental Life Insurance</option>
                    <option value="Mutual Of Omaha">Mutual Of Omaha</option>
                    <option value="Nationwide Insurance">Nationwide Insurance</option>
                    <option value="New York Life Insurance">New York Life Insurance</option>
                    <option value="Northwestern Mutual Life">Northwestern Mutual Life</option>
                    <option value="PacifiCare">PacifiCare</option>
                    <option value="Prudential Insurance Co.">Prudential Insurance Co.</option>
                    <option value="State Farm Insurance">State Farm Insurance</option>
                    <option value="Travelers Insurance Company">Travelers Insurance Company</option>
                    <option value="USAA Casualty Insurance">USAA Casualty Insurance</option>
                    <option value="United American Insurance">United American Insurance</option>
                    <option value="Zurich Insurance">Zurich Insurance</option>
                  </select>
                </div>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for=" ">Have you or your spouse ever served in the U.S. military?<span class="required"></span></label>
                <div class="radios">
                  <label>
                    <input id="military" name="LifeApplicantIsMilitary" type="radio" value="True" />
                    Yes</label>
                  <label>
                    <input checked="checked" id="military" name="LifeApplicantIsMilitary" type="radio" value="False" />
                    No</label>
                </div>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for=" ">Does anyone take prescription medications?<span class="required"></span></label>
                <div class="radios">
                  <label>
                    <input id="medication" name="LifeHistoryMedication" type="radio" value="yes" />
                    Yes</label>
                  <label>
                    <input checked="checked" id="medication" name="LifeHistoryMedication" type="radio" value="no" />
                    No</label>
                </div>
              </div>
              <div id="MedicalHistoryMedicationsSection" class="layout-section form-section form-subsection opensource" style="display: none;" >
                <div class="question medications">
                  <label class="label-validation-valid" for="LifeHistory_Medications">Please list the prescription medications<span class="required"></span></label>
                  <input class="medical-history-medications-input" id="LifeHistory_Medications" maxlength="200" name="LifeHistoryMedications" placeholder="e.g. Paxil, Lipitor, Ambien" type="text" value="" />
                </div>
              </div>
              <hr/>
              <div class="question">
                <label class="label-validation-valid" for=" ">Does anyone have any major health conditions? *</label>
                <div class="radios">
                  <label>
                    <input id="major" name="LifeHistoryMedicalMajorConditionsMajorHealthConditions" type="radio" value="yup" />
                    Yes</label>
                  <label>
                    <input checked="checked" id="major" name="LifeHistoryMedicalMajorConditionsMajorHealthConditions" type="radio" value="nope" />
                    No</label>
                </div>
              </div>
              <div id="MedicalMajorConditionsSection" class="layout-section form-section form-subsection checkbox-grid unlevel" style="display: none;" >
                <h4>Please select any health conditions that apply:</h4>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Aids" name="LifeHistory.MedicalMajorConditions.Aids" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Aids" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Aids">AIDS / HIV</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_AlcoholOrDrugs" name="LifeHistory.MedicalMajorConditions.AlcoholOrDrugs" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.AlcoholOrDrugs" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_AlcoholOrDrugs">Alcohol / Drug Abuse</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_AlzheimerDementia" name="LifeHistory.MedicalMajorConditions.AlzheimerDementia" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.AlzheimerDementia" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_AlzheimerDementia">Alzheimer's / Dementia</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Asthma" name="LifeHistory.MedicalMajorConditions.Asthma" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Asthma" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Asthma">Asthma</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Cancer" name="LifeHistory.MedicalMajorConditions.Cancer" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Cancer" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Cancer">Cancer</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Depression" name="LifeHistory.MedicalMajorConditions.Depression" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Depression" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Depression">Clinical Depression</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Diabetes" name="LifeHistory.MedicalMajorConditions.Diabetes" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Diabetes" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Diabetes">Diabetes</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Emphysema" name="LifeHistory.MedicalMajorConditions.Emphysema" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Emphysema" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Emphysema">Emphysema</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Epilepsy" name="LifeHistory.MedicalMajorConditions.Epilepsy" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Epilepsy" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Epilepsy">Epilepsy</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_HeartAttack" name="LifeHistory.MedicalMajorConditions.HeartAttack" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.HeartAttack" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_HeartAttack">Heart Attack</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_HeartDisease" name="LifeHistory.MedicalMajorConditions.HeartDisease" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.HeartDisease" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_HeartDisease">Heart Disease</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_HepatitisLiver" name="LifeHistory.MedicalMajorConditions.HepatitisLiver" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.HepatitisLiver" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_HepatitisLiver">Hepatitis / Liver</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_HighBloodPressure" name="LifeHistory.MedicalMajorConditions.HighBloodPressure" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.HighBloodPressure" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_HighBloodPressure">High Blood Pressure</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_HighCholesterol" name="LifeHistory.MedicalMajorConditions.HighCholesterol" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.HighCholesterol" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_HighCholesterol">High Cholesterol</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_KidneyDisease" name="LifeHistory.MedicalMajorConditions.KidneyDisease" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.KidneyDisease" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_KidneyDisease">Kidney Disease</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_MentalIllness" name="LifeHistory.MedicalMajorConditions.MentalIllness" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.MentalIllness" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_MentalIllness">Mental Illness</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_MultipleSclerosis" name="LifeHistory.MedicalMajorConditions.MultipleSclerosis" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.MultipleSclerosis" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_MultipleSclerosis">Multiple Sclerosis</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_PulmonaryDisease" name="LifeHistory.MedicalMajorConditions.PulmonaryDisease" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.PulmonaryDisease" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_PulmonaryDisease">Pulmonary Disease</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Stroke" name="LifeHistory.MedicalMajorConditions.Stroke" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Stroke" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Stroke">Stroke</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Ulcers" name="LifeHistory.MedicalMajorConditions.Ulcers" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Ulcers" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Ulcers">Ulcers</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_VascularDisease" name="LifeHistory.MedicalMajorConditions.VascularDisease" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.VascularDisease" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_VascularDisease">Vascular Disease</label>
                </div>
                <div class="question">
                  <input id="LifeHistory_MedicalMajorConditions_Other" name="LifeHistory.MedicalMajorConditions.Other" type="checkbox" value="true" />
                  <input name="LifeHistory.MedicalMajorConditions.Other" type="hidden" value="false" />
                  <label class="label-validation-valid" for="LifeHistory_MedicalMajorConditions_Other">Other / Not Listed</label>
                </div>
              </div>
            </div>
            <div id="ContactInfoSection" class="layout-section form-section two-columns">
              <div class="question">
                <label class="label-validation-valid" for="ContactInfo_FirstName">First Name<span class="required"></span></label>
                <input id="ContactInfo_FirstName" maxLength="100" name="ContactInfoFirstName" type="text" value="" />
              </div>
              <div class="question lastname">
                <label class="label-validation-valid" for="ContactInfo_LastName">Last Name<span class="required"></span></label>
                <input id="ContactInfo_LastName" maxLength="100" name="ContactInfoLastName" type="text" value="" />
              </div>
              <hr />
              <div class="question address">
                <label class="label-validation-valid" for="ContactInfo_Address">Address<span class="required"></span></label>
                <input id="ContactInfo_Address" maxLength="200" name="ContactInfoAddress" type="text" value="" />
              </div>
              <div class="question">
                <label class="label-validation-valid" for="ContactInfo_City">City<span class="required"></span></label>
                <input id="ContactInfo_City" maxLength="100" name="ContactInfoCity" type="text" value="" />
              </div>
              <hr />
              <div class="question state">
                <label class="label-validation-valid" for="ContactInfo_State">State<span class="required"></span></label>
                <select class="odd" id="ContactInfo_State" name="ContactInfoState">
                  <option value="">-- Choose One --</option>
                  <option value="Alabama">Alabama</option>
                  <option value="Alaska">Alaska</option>
                  <option value="Arizona">Arizona</option>
                  <option value="Arkansas">Arkansas</option>
                  <option value="California">California</option>
                  <option value="Colorado">Colorado</option>
                  <option value="Connecticut">Connecticut</option>
                  <option value="Delaware">Delaware</option>
                  <option value="District of Columbia">District of Columbia</option>
                  <option value="Florida">Florida</option>
                  <option value="Georgia">Georgia</option>
                  <option value="Hawaii">Hawaii</option>
                  <option value="Idaho">Idaho</option>
                  <option value="Illinois">Illinois</option>
                  <option value="Indiana">Indiana</option>
                  <option value="Iowa">Iowa</option>
                  <option value="Kansas">Kansas</option>
                  <option value="Kentucky">Kentucky</option>
                  <option value="Louisiana">Louisiana</option>
                  <option value="Maine">Maine</option>
                  <option value="Maryland">Maryland</option>
                  <option value="Massachusetts">Massachusetts</option>
                  <option value="Michigan">Michigan</option>
                  <option value="Minnesota">Minnesota</option>
                  <option value="Mississippi">Mississippi</option>
                  <option value="Missouri">Missouri</option>
                  <option value="Montana">Montana</option>
                  <option value="Nebraska">Nebraska</option>
                  <option value="Nevada">Nevada</option>
                  <option value="New Hampshire">New Hampshire</option>
                  <option value="New Jersey">New Jersey</option>
                  <option value="New Mexico">New Mexico</option>
                  <option value="New York">New York</option>
                  <option value="North Carolina">North Carolina</option>
                  <option value="North Dakota">North Dakota</option>
                  <option value="Ohio">Ohio</option>
                  <option value="Oklahoma">Oklahoma</option>
                  <option value="Oregon">Oregon</option>
                  <option value="Pennsylvania">Pennsylvania</option>
                  <option value="Rhode Island">Rhode Island</option>
                  <option value="South Carolina">South Carolina</option>
                  <option value="South Dakota">South Dakota</option>
                  <option value="Tennessee">Tennessee</option>
                  <option value="Texas">Texas</option>
                  <option value="Utah">Utah</option>
                  <option value="Vermont">Vermont</option>
                  <option value="Virginia">Virginia</option>
                  <option value="Washington">Washington</option>
                  <option value="West Virginia">West Virginia</option>
                  <option value="Wisconsin">Wisconsin</option>
                  <option value="Wyoming">Wyoming</option>
                </select>
              </div>
              <div class="question zipcode">
                <label class="label-validation-valid" for="ContactInfo_ZipCode">Zip Code<span class="required"></span></label>
                <input data-mask-sign="zip" id="ContactInfo_ZipCode" maxLength="5" name="ContactInfoZipCode" type="tel" value="" />
              </div>
              <hr />
              <div class="question maskedphone">
                <label class="label-validation-valid" for="ContactInfo_PhoneDay">Day phone <span class="only-mobile">555-555-5555</span><span class="required"></span></label>
                <input data-mask-sign="phone" id="ContactInfo_PhoneDay" name="ContactInfoPhoneDay" placeholder="555-555-5555" type="tel" value="" />
              </div>
              <div class="question maskedphone">
                <label class="label-validation-valid" for="ContactInfo_PhoneEvening">Evening phone</label>
                <input data-mask-sign="phone" id="ContactInfo_PhoneEvening" name="ContactInfoPhoneEvening" placeholder="555-555-5555" type="tel" value="" />
              </div>
              <hr />
              <div class="question email">
                <label class="label-validation-valid" for="ContactInfo_Email">Email<span class="required"></span></label>
                <input id="ContactInfo_Email" maxLength="100" name="ContactInfoEmail" type="email" value="" />
              </div>
            </div>
            <div id="CtaSection" class="layout-section">
              <div class="cta">
                <div class="activity-indicator"></div>
                <button id="FormSubmit" class="next-step button" type="submit"> <span class="description">Get My Quotes</span> </button>
                <div class="infoSecure">Your info is secure ;)</div>
                <div class="truste">
                  <div id="cccd1b2c-17ff-4ecf-affb-921f286b0f0e"> <a title="TRUSTe online privacy certification" target="_blank" href="#"> <img alt="TRUSTe online privacy certification" src="images/seal.png" /> </a> </div>
                </div>
              </div>
            </div>
            <div id="HiddenInputSection" class="hidden">
              <input id="leadid_token" name="LeadiDTokenGuid" type="hidden" value="" />
            </div>
            <div class="clearfix"></div>
          </form>
        </div>
      </div>
      <div id="legal-content">
        <div id="LegalSection" class="layout-section legalese">
          <p class="copy-top only-desktop">
            <input id="leadid_tcpa_disclosure" type="hidden">
            <label for="leadid_tcpa_disclosure"> By clicking Request Quote, I authorize that <a href="#" rel="nofollow" onclick="javascript:void window.open('terms.html?leadType=LIFE&amp;as=hwbbuc1nbtrxb34ojfytlrek', 'Companies','width=400,height=220,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">insurance companies, their agents and partner companies</a> may contact me about life insurance offers via telephone, including calls and/or text messages to the phone number I provided above. I authorize that these marketing or telemarketing communications may be delivered to me using an automatic telephone dialing system or by pre-recorded message. I understand that consent is not a condition of purchase of any goods or services.” </label>
          </p>
          <p class="copy-bottom only-desktop">
            <input id="leadid_tcpa_disclosure_2" type="hidden">
            <label for="leadid_tcpa_disclosure_2"> I understand that the insurance companies or their agents or partner companies may confirm my information through the
              use of a consumer report. I agree to this website's <a href="#inline2" class="fancybox" title="Privacy Policy">Privacy Policy</a> and acknowledge that as a member I will receive insurance quote
              reminders and special promotions sent to me via e-mail from: member@PataInsurance.com. I acknowledge that I have
              read and understand this website's <a href="#inline1" class="fancybox" title="Terms and Conditions">Terms and Conditions</a>, and I
              agree to be bound by them. </label>
          </p>
          <p class="copy-mobile only-mobile">
            <input id="leadid_tcpa_disclosure_3" type="hidden">
            <label for="leadid_tcpa_disclosure_3"> By clicking Request Quote, I authorize that <a href="#" rel="nofollow" onclick="javascript:void window.open('terms.html?leadType=LIFE&amp;as=hwbbuc1nbtrxb34ojfytlrek', 'Companies','width=400,height=220,toolbar=0,menubar=0,location=0,status=0,scrollbars=0,resizable=1,left=0,top=0');return false;">insurance companies, their agents and partner companies</a> may contact me about life insurance offers via telephone, including calls and/or text messages to the phone number I provided above. I authorize that these marketing or telemarketing communications may be delivered to me using an automatic telephone dialing system or by pre-recorded message. I understand that consent is not a condition of purchase of any goods or services.”  </label>
          </p>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>
  <div id="footer-container">
    <div id="footer-inner-container">
      <div id="footer-one">
        <div class="footer-content">
          <ul class="links">
            <li class="home only-desktop"><a href="#">Home</a></li>
            <li class="terms"><a href="#inline1" class="fancybox" title="Terms">Terms of Use</a></li>
            <li class="privacy"><a href="#inline2" class="fancybox" title="Privacy Policy">Privacy Policy</a></li>
          </ul>
        </div>
      </div>
      <div id="footer-two">
        <div class="footer-content">
          <p class="copyright">&copy; PataInsurance.com, all rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div id="inline1" class="page-inner" style="display: none;">
  <h2>Terms And Conditions Of Use</h2>
  <p>Last Revised 11/21/2008</p>
  <p>By using or accessing Usinsuranceonline.com (the "Site"),   or any of the Site's Content (as defined below),  you acknowledge that   you agree to and are subject to the following terms and conditions (the "Terms").   If you do not fully agree to these Terms, you may not access or   otherwise use the Site. You should read through all the Terms carefully.   The Terms constitute a legally binding agreement between you and All   Web Leads, Inc., a Delaware corporation that is the owner of the Site ("AWL", "us" or "our").   You covenant, represent and warrant that you have any and all   authorizations as may be necessary to enter into this agreement and that   your use of the Site, including provision or use of any Content,  does   not violate any applicable law.</p>
  <p>1. Our Services. PLEASE BE ADVISED THAT WE ARE NOT A PARTY TO ANY INSURANCE OR OTHER TRANSACTION.   We do not offer or sell any insurance or other products described on   the Site. Instead, the Site acts as a venue to allow insurance   companies, insurance agents and other parties who are customers of our   Site (each, a "Provider") to offer for sale   and sell, in a variety of formats, insurance and other authorized   products to potential consumers (each, a "Prospect", and all Prospects and Providers are collectively called the Site&rsquo;s "users")   who have visited one of our affiliated sites and applied to receive   insurance or other authorized quotations from a Provider (the "Service").   We are not involved in the actual transaction between any Prospect and   any Provider even though we may, through our affiliate sites, and with   each Prospect&rsquo;s authorization, collect certain information   (collectively, a "Lead") about any Prospect   and sell such Lead to a Provider. As a result, the quality, safety or   legality of the products offered by any Provider for sale, the truth or   accuracy of the representations regarding such products, the ability of   Providers to offer or sell such products or the ability of Prospects to   pay for the products offered are solely the responsibility of each user.   We are an independent contractor for all purposes.  Importantly, we do   not issue insurance contracts or bind coverage. We are not responsible   in any way for the conduct of any Prospect or Provider. We do not   endorse or recommend any companies or insurance policies. We do not   provide insurance, tax, legal or any other financial advice. We do not   guarantee that any of the Providers to whom we forward any Prospect's   application will contact such Prospect or agree to provide the Prospect   with the desired coverage. If you are a Prospect and you would like   personal advice or specific policy recommendations, please consult with   an insurance agent, broker or other qualified professional.</p>
  <p>2. Personal Use. Although   we do charge a fee to Providers to purchase Leads, and we may from   time-to-time charge users fees for utilizing various other services that   may now or in the future be provided by our Site, we do not charge   users to access the public portions of our Site. Accordingly, we grant   each user a limited, revocable, non-exclusive license to access the Site   in order to, as applicable, view or make legitimate inquiries to us   regarding our Service, all in accordance with these Terms. We further   grant each Provider a limited, revocable, non-exclusive license to   access the password-protected portions of the Site in accordance with   these Terms and any written agreement between us and the Provider. Any   other use of the Site is expressly prohibited. Importantly, this limited   license does not include any right of collection, aggregation, copying,   duplication, display or derivative use of the Site nor any right of use   of data mining, robots, spiders or similar data gathering and   extraction tools without our prior written permission; provided,   however, that a limited exception from the foregoing exclusion is   provided to general purpose internet search engines and non-commercial   public archives that use tools to gather information for the sole   purpose of displaying hyperlinks to the Site, provided that they each do   so from a stable IP address or range of IP addresses using an easily   identifiable agent and comply with our robots.txt file.</p>
  <p>3. Proprietary Rights and Downloading of Information from the Site.   The Site is protected by copyright as a collective work and/or   compilation, pursuant to U.S. copyright laws, international conventions,   and other copyright laws. The text, files, images, photos, maps and   other materials on the Site (collectively, the "Content")   are only for each user's personal use in accordance with the limited   license grant contained herein or in the case of Providers also pursuant   to any separate written agreement.  All Content on the Site, and the   Site itself, is protected by copyright and database rights, and you will   abide by any and all additional copyright notices, information, or   restrictions contained in or relating to any Content on the Site.   Copying or storing of any Content other than for your personal,   noncommercial use is expressly prohibited without the prior written   permission from us or the applicable copyright holder.</p>
  <p>4. Unauthorized Use. Unless   otherwise provided within these Terms, or unless otherwise applicable   law requires us to allow you to do so, you may not do any of the   following without our prior written consent:</p>
  <ul>
    <li>Copy reproduce, upload, post, display, republish, distribute, or transmit any part of the Content in any form whatsoever; </li>
    <li>Reproduce any portion of the Site on your   website or otherwise, using any device including, but not limited to,   use of a frame or border environment around the Site, or other framing   technique to enclose any portion or aspect of the Site, or mirror or   replicate any portion of the Site;</li>
    <li>Modify, translate into any language or computer language, or create derivative works from, any Content or any part of this Site;</li>
    <li>Reverse engineer any part of this Site;</li>
    <li>Sell, offer for sale, transfer, or license any portion of the Site in any form to any third parties;</li>
    <li>Use any robot, spider, other automatic device,   or manual process to monitor, copy, or keep a database copy of the   Content or any portion of the Site;</li>
    <li>Use the Site other than to learn about our Service and to make legitimate inquiries to us regarding our Service;</li>
    <li>Use the Site to create any false or fraudulent account or inquiry;</li>
    <li>Post or transmit any unlawful, threatening,   abusive, libelous, defamatory, obscene, vulgar, indecent, inflammatory,   sexually explicit, pornographic or profane material or any material that   could constitute or encourage conduct that would be considered a   criminal offense, give rise to civil liability, or otherwise violate any   law or for any other purpose that is unlawful or prohibited by these   Terms;</li>
    <li>Post or transmit any information that constitutes or contains false or misleading indications of origin or statements of fact;</li>
    <li>Use or access the Site in any way that, in our   sole discretion, adversely affects the performance or function of the   Site or any other computer systems or networks used by us or the Site,   or infringes on our copyright or any copyright of our Providers;</li>
    <li>Violate, plagiarize or infringe the rights of   third parties including, without limitation, copyright, trademark or   patent rights, rights of publicity or privacy or any other proprietary   rights;</li>
    <li>Upload or transmit to the Site or use in   connection with the Site any device, software or routine that contains   viruses, Trojan horses, worms, time bombs, or other computer programming   routines that may damage, interfere or attempt to interfere with, or in   any way intercept the normal operation of the Site, or appropriate the   Site or any system, or take any action that imposes an unreasonable load   on our computer equipment, or any action that infringes upon the rights   of any third party; or</li>
    <li>Disguise the origin of any information or inquiry transmitted through the Site.</li>
  </ul>
  <p>If you are aware of or experience any Content,   activity or communication through or in connection with the Site that   appears to be in violation of the above, or in violation of any other   provision of these Terms, we ask that you please inform us of any such   violation by clicking the following link: <a href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=legal@PataInsurance.com" target="_blank">LEGAL</a>.</p>
  <p>5. Changes to Site. We may   change, suspend or discontinue any aspect of the Site at any time,   including the availability of any Site features, database, or Content.   We may also impose limits on certain features or services or restrict   your access to parts or all of the Site without notice to you or   liability to us.</p>
  <p>6. Your E-mail Address and Our Privacy Policy.    When you use the Site to send an inquiry to us, you agree to allow the   Site and our affiliates to add your e-mail address to our database of   users. You may receive one or more promotional e-mails from the Site   and/or our affiliates. You may opt not to receive such promotional   e-mails from us at any time. Please review our <a href="#">Privacy Policy</a> for more information regarding our information collection practices and   safeguards, and how to opt not to receive such e-mails. Your use of the   Site signifies your acknowledgement of and agreement with our <a href="#">Privacy Policy</a> which is expressly incorporated into these Terms.</p>
  <p>7. Data Transmittal. Each   user acknowledges and agrees that, regardless of such user's physical   location, we may store and process any data transmitted to the Site from   such user at locations both within and outside of the United States.</p>
  <p> 8. Identity Verification. <br>
    8.1. User verification on the Internet   is difficult and we cannot and do not confirm each user's purported   identity. We encourage you to use appropriate caution with anyone with   whom you may be doing business via the Site or the Internet, generally. <br>
    8.2. If you are a Provider, you agree   to (i) keep your password and online ID for this Site secure and   strictly confidential, providing it only to authorized users of your   account, (ii) instruct each person to whom you give your online ID and   password that he or she is not to disclose it to any unauthorized   person, (iii) notify us immediately and select a new online ID and   password if you believe your password may have become known to an   unauthorized person, and (iv) notify us immediately if you are contacted   by anyone requesting your online ID and password. When you give someone   your online ID and online password, you are authorizing that person to   access and use your account, and you are responsible for any and all   transactions that person performs while using your account, even those   transactions that are fraudulent or that you did not intend or want   performed. <br>
    8.3. EACH USER ACKNOWLEDGES AND AGREES   THAT: (i) NEITHER THE SITE NOR ANY OF ITS AFFILIATES WILL HAVE ANY   LIABILITY TO ANY USER FOR ANY UNAUTHORIZED TRANSACTION MADE USING ANY   USER'S ONLINE ID AND PASSWORD THAT OCCURS BEFORE SUCH USER HAS NOTIFIED   US OF POSSIBLE UNAUTHORIZED USE OF SUCH ONLINE ID AND PASSWORD AND WE   HAVE HAD A REASONABLE OPPORTUNITY TO ACT ON THAT NOTICE; AND (ii) THE   UNAUTHORIZED USE OF YOUR ONLINE ID AND PASSWORD COULD CAUSE YOU TO INCUR   LIABILITY TO BOTH THE SITE AND OTHER USERS. Further, we may suspend or   cancel your account or your access to the Site at any time even without   receiving notice from you if we suspect that your account and/or   password is being used in an unauthorized or fraudulent manner. </p>
  <p>9. Limitation of Liability. IN NO EVENT WILL THE SITE, AWL, OUR SUBSIDIARIES, AFFILIATES, OFFICERS, DIRECTORS AND/OR EMPLOYEES (COLLECTIVELY, THE "AWL GROUP")   BE LIABLE FOR ANY LOST PROFITS OR ANY INDIRECT, CONSEQUENTIAL, SPECIAL,   INCIDENTAL, OR PUNITIVE DAMAGES ARISING OUT OF, BASED ON, OR RESULTING   FROM OUR SITE, THESE TERMS, YOUR USE OF THE SITE AND/OR ANY TRANSACTION   BETWEEN PROVIDERS AND PROSPECTS OR BETWEEN SITE USERS, GENERALLY, EVEN   IF WE HAVE BEEN ADVISED OF THE POSSIBLITY OF SUCH DAMAGES. THESE   LIMITATIONS AND EXCLUSIONS APPLY WITHOUT REGARD TO WHETHER THE DAMAGES   ARISE FROM (i) BREACH OF CONTRACT, (ii) BREACH OF WARRANTY, (iii) STRICT   LIABILITY, (iv) TORT, (v) NEGLIGENCE, OR (vi) ANY OTHER CAUSE OF   ACTION, TO THE MAXIMUM EXTENT SUCH EXCLUSION AND LIMITATIONS ARE NOT   PROHIBITED BY APPLICABLE LAW. IF YOU ARE DISSATISFIED WITH THE SITE, IF   YOU DO NOT AGREE WITH ANY PART OF THIS AGREEMENT, OR IF YOU HAVE ANY   OTHER DISPUTE OR CLAIM WITH OR AGAINST THE AWL GROUP, ANOTHER USER OR   THE SITE WITH RESPECT TO THESE TERMS OR THE SITE ITSELF, THEN YOUR SOLE   AND EXCLUSIVE REMEDY AGAINST US IS TO DISCONTINUE USING THE SITE. IN ALL   EVENTS, OUR LIABILITY, AND THE LIABILITY OF ANY MEMBER OF THE AWL   GROUP, TO YOU OR TO ANY THIRD PARTY IN ANY CIRCUMSTANCE ARISING OUT OF   OR IN CONNECTION WITH THE SITE IS LIMITED TO THE GREATER OF (i) AMOUNT   OF FEES ACTUALLY RECEIVED BY US FROM YOU DURING THE CALENDAR MONTH   DURING WHICH SUCH ALLEGED CLAIM(S) ACCRUED, AND (ii) $100.00.</p>
  <p>10. Disclaimer. THE   SITE, INCLUDING ALL CONTENT, SOFTWARE, FUNCTIONS, SERVICES, MATERIALS   AND INFORMATION MADE AVAILABLE ON OR ACCESSED THROUGH THE SITE, IS   PROVIDED "AS IS." TO THE FULLEST EXTENT PERMISSIBLE BY LAW, WE MAKE NO   REPRESENTATIONS OR WARRANTIES OF ANY KIND WHATSOEVER FOR THE CONTENT ON   THE SITE OR THE SERVICES, MATERIALS, INFORMATION AND FUNCTIONS MADE   ACCESSIBLE BY THE SOFTWARE USED ON OR ACCESSED THROUGH THE SITE, FOR ANY   PRODUCTS OR SERVICES OR HYPERTEXT LINKS TO THIRD PARTIES OR FOR ANY   BREACH OF SECURITY ASSOCIATED WITH THE TRANSMISSION OF SENSITIVE   INFORMATION THROUGH THE SITE OR ANY LINKED SITE. FURTHER, WE EXPRESSLY   DISCLAIM ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, WITHOUT   LIMITATION, NON-INFRINGEMENT, MERCHANTABILITY, AND FITNESS FOR A   PARTICULAR PURPOSE OR ACCURACY. WE DO NOT WARRANT THAT THE FUNCTIONS   CONTAINED IN THE SITE OR ANY SERVICES, MATERIALS OR CONTENT CONTAINED   THEREIN WILL BE UNINTERRUPTED OR ERROR FREE, THAT DEFECTS WILL BE   CORRECTED, OR THAT THE SITE OR THE SERVER THAT MAKES IT AVAILABLE IS   FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS.</p>
  <p>11. Release. IN   THE EVENT THAT YOU HAVE A DISPUTE WITH ONE OR MORE OTHER USERS OF THE   SITE (INCLUDING, WITHOUT LIMITATION, ANY DISPUTE BETWEEN ANY PROVIDER   AND PROSPECT REGARDING ANY TRANSACTION), YOU HEREBY AGREE TO RELEASE,   REMISE AND FOREVER DISCHARGE THE SITE AND ANY MEMBER OF THE AWL GROUP,   EACH OF THEIR RESPECTIVE AGENTS, DIRECTORS, OFFICERS, EMPLOYEES, AND ALL   OTHER RELATED PERSONS OR ENTITIES FROM ANY AND ALL MANNER OF RIGHTS,   CLAIMS, COMPLAINTS, DEMANDS, CAUSES OF ACTION, PROCEEDINGS, LIABLITIES,   OBLIGATIONS, LEGAL FEES, COSTS, AND DISBURSEMENTS OF ANY NATURE   WHATSOEVER, WHETHER KNOWN OR UNKNOWN, WHICH NOW OR HEREAFTER ARISE FROM,   RELATE TO, OR ARE CONNECTED WITH SUCH DISPUTE AND/OR YOUR USE OF THE   SITE. IF YOU ARE A CALIFORNIA RESIDENT, YOU WAIVE CALIFORNIA CIVIL CODE   SECTION 1542, WHICH SAYS: "A GENERAL RELEASE DOES NOT EXTEND TO CLAIMS   WHICH THE CREDITOR DOES NOT KNOW OR SUSPECT TO EXIST IN HIS FAVOR AT THE   TIME OF EXECUTING THE RELEASE, WHICH, IF KNOWN BY HIM MUST HAVE   MATERIALLY AFFECTED HIS SETTLEMENT WITH THE DEBTOR." IF YOU ARE A   RESIDENT OF A STATE OTHER THAN CALIFORNIA, YOU EXPLICITLY WAIVE THE   TERMS AND PROTECTIONS OF ANY STATUTE OF YOUR OWN STATE THAT HAS A   SIMILAR IMPORT OR INTENT.</p>
  <p>12. Indemnity. YOU HEREBY AGREE TO INDEMNIFY, DEFEND AND HOLD THE SITE ANDTHE AWL GROUP (COLLECTIVELY, THE "INDEMNIFIED PARTIES")   HARMLESS FROM AND AGAINST ANY AND ALL LIABILITY AND COSTS INCURRED BY   THE INDEMNIFIED PARTIES IN CONNECTION WITH ANY CLAIM ARISING OUT OF YOUR   USE OF THE SITE (INCLUDING, WITHOUT LIMITATION, ANY DISPUTE BETWEEN A   PROVIDER AND PROSPECT REGARDING ANY TRANSACTION), ANY ACT (OR FAILURE TO   ACT) BY YOU OR OTHER USERS OF YOUR ACCOUNT OR ANY BREACH BY YOU OF   THESE TERMS OR THE REPRESENTATIONS, WARRANTIES AND COVENANTS MADE BY YOU   HEREIN, INCLUDING, WITHOUT LIMITATION, ATTORNEYS' FEES AND COSTS. YOU   SHALL COOPERATE AS FULLY AS REASONABLY REQUIRED IN THE DEFENSE OF ANY   CLAIM. THE AWL GROUP RESERVES THE RIGHT, AT OUR OWN EXPENSE, TO ASSUME   THE EXCLUSIVE DEFENSE AND CONTROL OF ANY MATTER OTHERWISE SUBJECT TO   INDEMNIFICATION BY YOU AND YOU SHALL NOT IN ANY EVENT SETTLE ANY MATTER   WITHOUT OUR WRITTEN CONSENT.</p>
  <p>13. Choice of Law and Forum.  ANY   AND ALL SERVICES AND RIGHTS OF USE HEREUNDER ARE PERFORMABLE AND/OR   SOLD IN THE STATE OF TEXAS, UNITED STATES OF AMERICA, AND YOU   IRREVOCABLY AGREE THAT ANY CAUSE OF ACTION YOU MAY SUBMIT ARISING OUT OF   OR RELATING TO YOUR USE OF THE SITE, ANY SERVICES ON THE SITE OR   PURSUANT TO THESE TERMS WILL BE FILED IN THE STATE OR FEDERAL COURTS OF   TRAVIS COUNTY, TEXAS, WHICH WILL BE THE SOLE AND EXCLUSIVE VENUE OF ANY   LEGAL DISPUTE.  YOU COVENANT NOT TO SUE US IN ANY OTHER FORUM FOR ANY   CAUSE OF ACTION.  YOU ALSO AGREE THAT ANY DISPUTE BETWEEN YOU AND US   WILL BE GOVERNED BY THE LAWS OF THE STATE OF TEXAS, EXCLUSIVE OF ANY   CONTRARY CHOICE OF RULE.</p>
  <p>14. No Agency. The   relationship between AWL and each user is that of independent   contractors, and no agency, partnership, joint venture,   employee-employer or franchiser-franchisee relations is intended or   created by these Terms or your use of the Site.</p>
  <p>15. Notices. Except as   explicitly stated otherwise, any notices shall be submitted (in the case   of you contacting us) via e-mail using the following link:  Legal and   with a copy of such notice by certified postal mail, return receipt   requested, to:</p>
  <p> </p>
  <p>All Web Leads, Inc.<br>
    Attn: General Counsel<br>
    7300 FM 2222, Bldg 2, Suite 100<br>
    Austin, Texas 78730</p>
  <p>or, when we need to send you notice,   to any e-mail address you may provide to the Site during the   registration process (as applicable). Notice shall be deemed given upon   receipt or 24 hours after e-mail is sent, unless the sending party is   notified that the e-mail address is invalid. Alternatively, we may give   you notice by certified mail, postage prepaid and return receipt   requested, to any address provided to us during the registration process   (as applicable). In such case, notice shall be deemed given three days   after the date of mailing.</p>
  <p> </p>
  <p>16. Amendments. We reserve   the right, in our sole discretion, to change, modify, add or remove any   portion of these Terms, in whole or in part, at any time. Notification   of changes to these Terms will be posted on the Site and will be   effective immediately thereafter. Your submission of a quote request   and/or other use of the Site following the posting of any such change,   modification or amendment to these Terms will constitute your acceptance   thereof.</p>
  <p>17. Links to Third-Party Sites.   This Site may contain links and pointers to other Internet sites. Links   to and from the Site to other sites, maintained by third parties, do   not constitute an endorsement by us of such third-party sites or the   contents thereof.</p>
  <p>18. Your Record of These Terms.   We do not separately file the Terms entered into by each user of the   Site. Please make a copy of these Terms for your records by printing   and/or saving a downloaded copy of the Terms on your personal computer.</p>
  <p>19. Miscellaneous. We may   immediately and in our sole discretion terminate any user's access to or   use of the Site due to such user's breach of these Terms, our Privacy   Policy or other unauthorized use of the Site. Any cause of action you   may have hereunder or with respect to your use of the Site must be   commenced within one (1) year after the claim or cause of action first   arises. Our failure to exercise or enforce any right or provision of   these Terms shall not constitute a waiver of any such right or   provision. If for any reason a court of competent jurisdiction finds any   provision of these Terms, or portion thereof, to be unenforceable, that   provision shall be enforced to the maximum extent permissible so as to   affect the intent of these Terms, and the remainder of these Terms shall   continue in full force and effect.</p>
  <p>[End of Terms and Conditions of Use]</p>
</div>
<div id="inline2" class="page-inner" style="display: none;">
  <h2>Privacy Policy</h2>
  <p>Last revised 7/8/2015</p>
  <h3>Our commitment to your privacy</h3>
  <p><strong>Introduction.</strong> We want to make your   experience online satisfying and safe. This site is owned and operated   by All Web Leads, Inc., a Delaware corporation                       (collectively "<em>Company</em>," "<em>we</em>" or "<em>us</em>") headquartered in Austin, Texas. We understand that you value your privacy. This privacy policy ("<em>Privacy Policy</em>")                       governs information that you provide to us and information that we gather from your use of this website <span id="website-link">(<a href="http://PataInsurance.com">www.PataInsurance.com</a>) </span>and mobile websites,                       and it tells you how we may collect, use, and share this information.</p>
  <p>Except as described in this Privacy Policy, or unless   we are given permission by you, we will not sell or disclose your   personally identifiable information to third parties.</p>
  <div id="trusteID">
    <div id="cccd1b2c-17ff-4ecf-affb-921f286b0f0e"> <a title="TRUSTe online privacy certification" target="_blank" href="https://privacy.truste.com/privacy-seal/All-Web-Leads,-Inc-/validation?rid=9bc518a3-f243-4964-986e-23ea830100ab"></a></div>
    <p>All Web Leads, Inc. has received TRUSTe's   Privacy Seal signifying that this privacy policy and our practices have   been reviewed for compliance with the                                   TRUSTe program viewable on the   validation page available by clicking the TRUSTe seal. The TRUSTe   program does not cover information that may be collected                                   through downloadable software. The   TRUSTe program covers only information that is collected through this   Web site, <a href="http://PataInsurance.com">www.PataInsurance.com</a>.</p>
    <p>If you have an unresolved privacy or data use concern that we have not addressed satisfactorily, please contact TRUSTe <a href="https://feedback-form.truste.com/watchdog/request" target="_blank">here</a>.</p>
  </div>
  <p><strong>Why do we collect your information?</strong> We help consumers shop for insurance, discounted health plans and other   related products by connecting consumers with insurance companies,   insurance agents, discount program representatives and other vendors,   including vendors who also help match consumers with insurance providers   or other vendors (we refer to all of these as "<em>Providers</em>", and we sometimes refer to both consumers and Providers as our "<em>users</em>").   Since we deal with many Providers, the more detailed information you   provide to us, the more accurate a quote our Providers may help you   locate. </p>
  <p>We do not ask you for, access or track any location   based information from your mobile device at any time while using our   mobile sites or services. </p>
  <p><strong>Newsletters. </strong>If you elect to   subscribe to our newsletter(s), we will use your name and email address   to send the newsletter to you. If you no longer wish to receive our   newsletter, you may opt-out at any time by following the instructions   included in each newsletter.</p>
  <h3>Information we collect and how we use it</h3>
  <p><strong>What do we collect and how do we use it?</strong>  By clicking "Get My Quotes" you expressly authorize up to eight   insurance companies or their agents or partner companies to contact you   at the number and address provided with insurance quotes or to obtain   additional information for such purpose, via live, prerecorded or   autodialed calls, text messages or email. You understand that your   signature is not a condition of purchasing any property, goods or   services and that you may revoke your consent at any time.  You   understand that the insurance companies or their agents or partner   companies may confirm your information through the use of a consumer   report, which may include your credit score and driving record. </p>
  <p>By clicking "Get My Quotes" you also agree to this   Privacy Policy and consent to your receipt of insurance quote reminders   and special promotions via email from:   member@myinsurancequotefinder.com. If you no longer wish to receive   promotional emails from us you may opt-out at any time by using the   unsubscribe link located at the bottom of each email communication or   contact us at <a href="mailto:unsubscribe@PataInsurance.com">unsubscribe@PataInsurance.com</a>.    You acknowledge that you have read and understand this website's Terms   and Conditions, and you agree to be bound by them.  We are not   responsible, and shall not be held liable, if a Provider or other third   party to whom we have forwarded any of the information you submitted to   us violates our Privacy Policy or such third party's own privacy policy   (if any), or otherwise violates the law.</p>
  <p>Our users may from time-to-time provide us with   personally identifiable information. Personally identifiable information   generally means any information that may be used to identify an   individual, including, but not limited to, your name, home address,   telephone number, and email address.</p>
  <p>Examples of personally identifiable information may include:</p>
  <ul>
    <li>First and Last Name</li>
    <li>Postal Address</li>
    <li>Email Address</li>
    <li>Phone Number</li>
    <li>Driver's License Number*</li>
    <li>Date of Birth</li>
  </ul>
  <p><em>* While not required, this information may be helpful in processing your request to receive insurance or other quotations.</em></p>
  <p>Some of our users requesting quotations for health   insurance may also be asked to provide certain personal health   information, such as:</p>
  <ul>
    <li>Major Health Conditions</li>
    <li>Prescription Medications you or a family member may be taking</li>
    <li>Whether or not you have been hospitalized in the past 5 years</li>
    <li>Whether or not you have been treated by a doctor for a major health condition in the past year</li>
  </ul>
  <p>We process personally identifiable information as described herein and also for such purposes as:</p>
  <ul>
    <li>To deliver our products and services to users, including the display of customized content and advertising;</li>
    <li>To conduct research and analysis in order to maintain and improve our products and services;</li>
    <li>Ensuring the technical functioning of our system and network;</li>
    <li>To aid us in developing new services;</li>
    <li>To alert you to product updates, special offers,   updated information and other new services. (You may opt-out of these   communications if you so choose.)</li>
    <li>To contact you in response to your requests for information; and</li>
    <li>To provide you quotes from up to 8 Providers who   may contact you using the information you provide or to obtain   additional information needed to provide quotes.</li>
  </ul>
  <p>Further, we may aggregate information we receive from   you and from our other users and may use or disclose such aggregate   information to third parties in a manner that does not disclose any   individual user's personally identifiable information.</p>
  <p>When you access the sites through a mobile device, we   automatically collect information on the type of device you use,   operating system version, and the device identifier (or &ldquo;UDID&rdquo;).</p>
  <p><strong>Affiliate Information.</strong> If you wish   to contact us as an affiliate or register as an affiliate we collect   your name, company name, email address and phone number.                       We use this information to respond to your   message/comment and for contacting potential affiliates to determine the   potential for a business relationship. We do not disclose this                      information to third parties.</p>
  <p>The other driver/s may contact us at <a href="mailto:information@life360.com">information@PataInsurance.com</a> to request that we remove this information from our database.</p>
  <p><strong>IMPORTANT NOTICE REGARDING CONSUMER REPORT PRACTICES</strong> AS STATED ABOVE, BY CLICKING "GET MY QUOTES" AND SEEKING A QUOTE   REQUEST, YOU AUTHORIZE AND AGREE THAT A PROVIDER MAY OBTAIN ADDITIONAL   BACKGROUND INFORMATION ABOUT YOU TO PROVIDE YOU WITH YOUR REQUESTED   INSURANCE QUOTE OR POLICY INFORMATION. FOR EXAMPLE, CONSUMER AND/OR   CREDIT REPORTS, OR DRIVING RECORDS, MAY BE ORDERED IN CONNECTION WITH   YOUR QUOTE REQUEST. THESE REPORTS MAY PROVIDE ADDITIONAL INFORMATION   THAT MAY ASSIST PROVIDERS IN DETERMINING YOUR ELIGIBILITY FOR INSURANCE,   DISCOUNT HEALTH PLANS OR OTHER PRODUCTS OR SERVICES, AND RATES THAT YOU   MAY BE CHARGED. CONSUMER REPORTS MAY ALSO BE USED FOR UPDATES,   RENEWALS, OR EXTENSIONS OF ANY INSURANCE YOU MAY OBTAIN. A PROVIDER MAY   ALSO OBTAIN AND USE A CREDIT-BASED INSURANCE SCORE CONTAINED IN YOUR   CREDIT REPORT. THIS INFORMATION MAY BE COMBINED BY A PROVIDER WITH   INFORMATION YOU SUBMIT TO US, AND BY CLICKING SUBMIT AND SEEKING A QUOTE   REQUEST, YOU ACKNOWLEDGE THAT YOU ARE PROVIDING YOUR WRITTEN PERMISSION   TO OUR PROVIDERS TO OBTAIN YOUR CREDIT REPORT.</p>
  <h3>Usage Tracking</h3>
  <p><strong>Log Files.</strong> We may combine this   automatically collected log information with other information we   collect about you. We do this to improve services we offer you, to   improve marketing, analytics, or site functionality.</p>
  <p><strong>Cookies/Tracking Technologies.</strong> Technologies such as: cookies, beacons, tags and scripts are used by All   Web Leads, Inc. and our marketing partners, affiliates, or analytics or   service. These technologies are used in analyzing trends, administering   the site, tracking users&rsquo; movements around the site and to gather   demographic information about our user base as a whole. We may receive   reports based on the use of these technologies by these companies on an   individual as well as aggregated basis.</p>
  <p>We use cookies to authenticate the user on each page   after the user logs onto any portion of our website requiring a login.   Users can control the use of cookies at the individual browser level. If   you reject cookies, you may still use our site, but your ability to use   some features or areas of our site may be limited.</p>
  <p><strong>LSOs.</strong> We use Local Storage Objects   (LSOs) such as HTML5 to store content information and preferences.   Various browsers may offer their own management tools for removing HTML5   LSOs. Third parties with whom we partner to provide certain features on   our site or to display advertising based upon your Web browsing   activity use LSOs such as HTML 5 and Flash to collect and store   information. To learn how to manage privacy and storage settings for   Flash cookies click here: <a href="http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html#117118" target="_blank">http://www.macromedia.com/support/documentation/en/flashplayer/help/settings_manager.html#117118</a></p>
  <p>We partner with a third party to either display   advertising on our Web site or to manage our advertising on other sites.   Our third party partner may use technologies such as cookies                       to gather information about your activities on this   site and other sites in order to provide you advertising based upon your   browsing activities and interests.  If you wish to                       not have this information used for the purpose of   serving you interest-based ads, you may opt-out by clicking <a href="http://preferences-mgr.truste.com/" target="_blank">here</a> (or if located in the European Union click <a href="http://www.youronlinechoices.eu" target="_blank">here</a>). Please note this does not opt you out of being served ads.  You will continue to receive generic ads.</p>
  <p><strong>User Access.</strong> We make a good-faith   effort to enable you to update personally identifiable information you   have provided to us and to enable you to request deletion of any of your   information. If you wish to delete or update any of your personal   information please email us at information@PataInsurance.com . Please   understand that while we are able to delete or update the information   that we have received from you, this does not necessarily mean that   information about you that has already been shared by us with other   Providers may, at the same time, be updated or deleted by such other   Providers. So, in some cases it may be necessary for you to contact   other third parties who may have received your information and   separately request updates to or deletions of your information. We may   decline to process user requests that are unreasonably repetitive or   systematic, require disproportionate technical effort, jeopardize the   privacy of others, would be extremely impractical, or where information   is required to be retained by us, either by law or for legitimate   business purposes. Further, if you are a marketing affiliate, you may   login to your account at any time to correct, update or delete   inaccuracies in your personal information.</p>
  <p>We will retain your information for as long as your   account is active or as needed to provide you services. If you wish to   cancel your account or request that we no longer                       use your information to provide you services contact   us at <a href="mailto:information@life360.com">information@PataInsurance.com</a>. We will retain and use your information                       as necessary to comply with our legal obligations, resolve disputes, and enforce our agreements.</p>
  <p>To request removal of your personal information   from our blog, community forum, or testimonials contact us at the email   address listed above.  In some cases, we may not be able to remove your   personal information, in which case we will let you know if we are   unable to do so and why.</p>
  <h3>Social Media (Features) and Widgets</h3>
  <p>Our Web site includes Social Media Features, such   as the Facebook Like button and Widgets, such as the Share this button   or interactive mini-programs that run on our site. These Features may   collect your IP address, which page you are visiting on our site,   and may set a cookie to enable the Feature to function properly. Social   Media Features and Widgets are either hosted by a third party or hosted   directly on our Site. Your interactions with these Features are governed   by the privacy policy of the company providing it. </p>
  <h3>Information transfer and sharing policy</h3>
  <p><strong>Generally. </strong>When you begin to provide   personally identifiable information to us, you do so for the purpose of   our sharing this information with Providers to                       provide you with the quotes you requested, and this   information then becomes subject to each Provider's own privacy policy   (if any). Federal and state laws provide limitations                       on the information practices of financial   institutions such as insurance companies. Providers and others to whom   we may forward your personally identifiable information may contact                       you with a quote by email, telephone, postal mail,   or other forms of communication as permitted by law and you agree to   receive such contacts when you submit your information,                       regardless of the presence of your phone number(s)   on any local or national no-call or similar no solicitation list. Except   as disclosed in this Privacy Policy, we do not share                       personally identifiable information collected from   you on this website with third parties for their direct marketing   purposes. Please understand that because we are in the business                       of helping consumers and Providers identify one   another, if you are a consumer and you do not permit us to share your   personally identifiable information with a Provider, we will be                       unable to assist you and some of our services and   offerings will be unavailable to you. We expect our Providers to whom we   forward your information to follow applicable laws and                       abide by the restrictions we impose on their use of   your personally identifiable information.</p>
  <p><strong>Other Usage and Offerings.</strong> As our   business grows, from time to time we may seek to make available   additional offerings and services including those that may not be   insurance-related. In doing so, we will strive to give our users choices   about whether or not you would like to continue to receive future   promotional or marketing communications from us either directly or on   behalf of others whose offerings we think may be of interest to you. In   identifying which offerings we think may be of interest to you, we may   use and analyze information you have provided to us. If you choose not   to receive such marketing communications, you may still receive certain   relationship or transactional communications from us as described   herein. We do not plan to sell, rent or transfer your personally   identifiable information for non-insurance related purposes to any third   parties unless or except in connection with the merger, sale or   reorganization of our business as set forth elsewhere in this policy.</p>
  <p><strong>Vendors and Suppliers.</strong> We may   provide personally identifiable information to or permit access to   personally identifiable information by our subsidiaries, affiliated   companies, vendors and service providers for the purpose of verifying   data or where such access is incidental to their assisting us such as   phone number verification services and email service providers. We   expect that these parties will only process such information based on   our instructions and in compliance with this Privacy Policy and any   other appropriate confidentiality and security measures.</p>
  <p><strong>Protecting Our Legal Rights and Other's Rights.</strong> We do not otherwise share personally identifiable information about   website users with third parties unless we believe using or sharing such   information is appropriate to carry out a user's request or if we have a   good-faith belief that access, use, preservation or disclosure of such   information is reasonably necessary to (a) satisfy any applicable law,   regulation, legal process or enforceable governmental request, (b)   enforce our <a href="#">Terms and Conditions of Use</a>,   including investigation of potential violations thereof, (c) detect,   prevent or otherwise address fraud, security or technical issues, or (d)   protect against imminent harm to the rights, property or safety of the   Company, its users or the public as required or permitted by law.</p>
  <p>We reserve the right to disclose your personally   identifiable information as required by law or when we believe that   disclosure is necessary to protect our rights and/or comply with a legal   or judicial proceeding or court order.</p>
  <p><strong>Merger or Sale of Company.</strong> If we   should ever file for bankruptcy or have our assets sold to or merged   with another entity, information that we receive from you through this   website may be treated as an asset of the Company and may be transferred   to the fullest extent permitted by law.</p>
  <p><strong>Promotions and Programs.</strong> From time   to time, you may be given the opportunity to participate in sweepstakes,   contests, giveaways, or other promotions and programs offered by us,   either alone or with promotional partners. Participation in these   promotions or programs may require you to submit additional information   about yourself, including personally identifiable information. Our use   and sharing of your information, including personally identifiable   information, collected through a promotion or program will be governed   by the official rules or agreement governing that promotion or program,   as well as by this Privacy Policy. The terms of those rules or that   agreement will supersede any conflicting provisions of this Privacy   Policy.</p>
  <h3>Marketing and other communications</h3>
  <p>When you submit information to us, you agree to   receive email, fax, and other forms of communications from us and those   to whom you have authorized us to forward your personally identifiable   information. If you would like to opt-out of receiving promotional or   marketing material from us in the future, please click the following   link: or by following the unsubscribe link located at the bottom of each   promotional or marketing email communication. Your decision to opt-out   shall not preclude us from communicating with you regarding your   existing or past relationship with us and shall not preclude us,   including our employees, contractors and other representatives, from   accessing and using the information you have provided in a manner that   is not personally identifying (such as in aggregate or anonymous form).   If you do not wish to receive further communications from any person or   entity (such as a Provider) to whom we have forwarded your information   with your permission, you must contact them directly.</p>
  <h3>Affiliated websites, other websites, and advertisements</h3>
  <p>This Privacy Policy applies to websites and services   that are owned and operated by All Web Leads, Inc. We do not exercise   control over the websites of third parties that you may link to or view   as part of a frame on a page on this website. These other sites may   place their own cookies or other files on your computer, collect data,   or solicit personally identifiable information from you. We are not   responsible for the actions or policies of such third parties. You   should check the applicable privacy policies of those third parties when   providing information on a feature or page operated by a third party.   You should always be careful in how you use and share any sensitive   personal information with any third party.</p>
  <h3>Customer testimonials/reviews</h3>
  <p>We post customer testimonials/reviews on our sites,   which may contain personally identifiable information. We do obtain the   providing customer's consent prior to posting any such   testimonial/review.</p>
  <h3>Authorized users</h3>
  <p>This website is hosted in the United States and is   intended exclusively for U.S. residents. In using this website you   represent and warrant that you have any and all necessary authorization   to submit the information contained in your requests, and that you   expressly consent to the transfer, use, and forwarding by us of the   information you provide to us through the website and to the United   States.</p>
  <h3>Security</h3>
  <p>No data transmissions over the Internet can be   guaranteed to be 100% secure. Consequently, we cannot ensure or warrant   the security of any information you transmit to us and you do so at your   own risk. Once we receive your transmission, we make reasonable efforts   to ensure security on our systems. We use secure server software and   firewalls as part of our efforts to protect your information from   unauthorized access, disclosure, alteration, or destruction. However,   please note that this is not a guarantee that such information may not   be accessed, disclosed, altered, or destroyed by breach of such   firewalls and secure server software. By using our site, you acknowledge   that you understand and agree to assume these risks.</p>
  <p>The security of your personal information is   important to us. When you enter sensitive information (such as social   security number, Driver's license number, national ID, personal health   information) on our registration forms, we encrypt that information   using secure socket layer technology (SSL).</p>
  <p>If we learn of a security systems breach, we may   attempt to notify you electronically so that you can take appropriate   protective steps. By using this website or providing personally   identifiable information to us you agree that we can communicate with   you electronically regarding security, privacy and administrative issues   relating to your use of this website. We may post a notice on our   website if a security breach occurs. We may also send an email to you at   the email address you have provided to us in these circumstances.   Depending on where you live, you may have a legal right to receive   notice of a security breach in writing. To receive free written notice   of a security breach (or to withdraw your consent from receiving   electronic notice) you should notify us by clicking the following link: <a href="mailto:information@PataInsurance.com">Privacy Support</a>.</p>
  <h3>Changes and updates</h3>
  <p>We may occasionally update this Privacy Policy, and   we expect that most such changes will be minor. When we make changes, we   will also revise the "revised date" on the Privacy Policy. If we should   decide to change this Privacy Policy in a manner that we believe would   cause us to use or share your previously provided personally   identifiable information in a way that we think is materially broader or   less privacy-friendly from what we have told you here, we will make   reasonable efforts to obtain your consent. To do this we may notify you   on our homepage or this policy, by email or using other means and   technology we think are appropriate prior to the changes being   effective. We encourage you to periodically review this Privacy Policy   to stay informed about how we are protecting the personally identifiable   information we collect. Your submission of a quote request and/or other   use of this website constitutes your agreement to this Privacy Policy   and any updates.</p>
  <h3>Contacting us</h3>
  <p>If you have any questions, comments, or concerns about us or this Privacy Policy, please contact us via e-mail at <a href="mailto:information@life360.com">information@life360.com</a>,   by phone at (512) 279-3113, or by U.S. mail at 7300 FM 2222, Bldg. 2,   Suite 100, Austin, TX 78730, Attention: Customer Service.</p>
</div>
<script type="text/javascript" src="js/main.js"></script> 
<script type="text/javascript" src="js/jquery.lightbox.js"></script>
</body>
</html>
