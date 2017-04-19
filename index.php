<?php
if (isset($_REQUEST['email']))
{
$full_name= $_REQUEST["full_name"];
$email= $_REQUEST["email"];
$telephone= $_REQUEST["telephone"];
$date_of_birth= $_REQUEST["date_of_birth"];
$general_health=$_REQUEST["general_health"];
$marital_status=$_REQUEST["marital_status"];
$dependants=$_REQUEST["dependants"];
$employment_status=$_REQUEST["employment_status"];
$investment_firm=$_REQUEST["investment_firm"];
$current_occupation=$_REQUEST["current_occupation"];
$worked_in_fi=$_REQUEST["worked_in_fi"];
$qualification=$_REQUEST["qualification"];
$employment_income=$_REQUEST["employment_income"];
$dividend_income=$_REQUEST["dividend_income"];
$pension_income=$_REQUEST["pension_income"];
$other_income=$_REQUEST["other_income"];
$mortgage=$_REQUEST["mortgage"];
$monthly_expenditure=$_REQUEST["monthly_expenditure"];
$property_ownership=$_REQUEST["property_ownership"];
$main_residence=$_REQUEST["main_residence"];
$listed_shares=$_REQUEST["listed_shares"];
$unlisted_shares=$_REQUEST["unlisted_shares"];
$savings=$_REQUEST["savings"];
$outstanding_mortgage=$_REQUEST["outstanding_mortgage"];
$personal_loans=$_REQUEST["personal_loans"];
$credit_card_loans=$_REQUEST["credit_card_loans"];
$other_liabilities=$_REQUEST["other_liabilities"];
$joint_asset_liabilities=$_REQUEST["joint_asset_liabilities"];
$investment_objectives=$_REQUEST["investment_objective"];
$funds_for_investment=$_REQUEST["funds_for_investment"];
$investment_attitude=$_REQUEST["investment_attitude"];
$experience_listed_shares=$_REQUEST["experience_listed_shares"];
$experience_unlisted_shares=$_REQUEST["experience_unlisted_shares"];
$experience_bonds=$_REQUEST["experience_bonds"];
$experience_cfds=$_REQUEST["experience_cfds"];
$experience_betting=$_REQUEST["experience_betting"];
$experience_foreign_exchange=$_REQUEST["experience_foreign_exchange"];
$experience_other=$_REQUEST["experience_other"];
$information=$_REQUEST["information"];

$to  = 'admin@commodityindex.co.uk'; // note the comma
// subject
$subject = 'Suitability Questionnaire';

// message
$message = '
<html>
<head>
  <title>New Inquiry </title>
</head>
<body>
   
  <table border="0" cellspacing="0" cellpadding="0" width="602" align="center">
  <tbody><tr>
    <td align="left" style="font-size:12px;font-family:Arial; border-bottom:1px solid #c8c8c8;">

    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <tbody><tr valign="middle">
     
      </tr>
    </tbody></table>
    &nbsp;<br>
    
    </td>
  </tr>
  
  <tr>
    <td align="left" style="border:solid 1px #c8c8c8;font-size:12px;font-family:Arial;padding:20px;">
<h1>Dear Admin,</h1>

<p>You have an enquiry from website. Please contact him</p>

<div style="width:550px;min-height:30px;border:solid 1px #e5e5e5;background:-webkit-gradient(linear,left top,left bottom,from(#fff),to(#eee));background:-moz-linear-gradient(top,#fff,#eee)">
<table border="0" cellpadding="0" cellspacing="0" style="width:550px;height:30px;margin:auto">
        <tbody>
    
             <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Full Name</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$full_name.'</p>
                </td>
            </tr>
      
             <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>E-Mail</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$email.'</p>
                </td>
            </tr>
          <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Telephone</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$telephone.'</p>
                </td>
            </tr>
           <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Date of Birth</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$date_of_birth.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>General Health</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$general_health.'</p>
                </td>
            </tr>
      <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td colspan="2" style="padding-left:10px">
       <h3>Financial Situation</h3>
                </td>
             </tr>
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Marital Status</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$marital_status.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Number of Dependants</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$dependants.'</p>
                </td>
            </tr>
        <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Employment Status</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$employment_status.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Is your employer an investment firm regulated by the Financial Conduct Authority?</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$investment_firm.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Current Occupation</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$current_occupation.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Have you worked in finance industry?</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$worked_in_fi.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Do you have degree level qualification?</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$qualification.'</p>
                </td>
            </tr>
      
      <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td colspan="2" style="padding-left:10px">
       <h3>Income and Expenses</h3>
                </td>
             </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Annual Employment Income (net of tax)</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$employment_income.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Annual Interest and dividend Income</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$dividend_income.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Annual Pension Income</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$pension_income.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Annual Other Income</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$other_income.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Monthly mortgage/rent</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$mortgage.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Other monthly expenditure</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$monthly_expenditure.'</p>
                </td>
            </tr>
      <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td colspan="2" style="padding-left:10px">
       <h3>Assets & Liabilities</h3>
                </td>
             </tr>
          <tr valign="" style="height:30px;">
                <td colspan="2" style="padding-left:10px">
       <strong>Assets</strong>
                </td>
             </tr>
       <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Property Ownership</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$property_ownership.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Main Residence</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$main_residence.'</p>
                </td>
            </tr>
      
   <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Listed Shares</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$listed_shares.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Unlisted Shares</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$unlisted_shares.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Savings</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$savings.'</p>
                </td>
            </tr>
        <tr valign="" style="height:30px;">
                <td colspan="2" style="padding-left:10px">
       <strong>Liabilities</strong>
                </td>
             </tr>
     <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Outstanding Mortgage</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$outstanding_mortgage.'</p>
                </td>
            </tr>
   <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Personal Loans</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$personal_loans.'</p>
                </td>
            </tr>
      
   <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Credit card loans</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$credit_card_loans.'</p>
                </td>
            </tr>
     <tr valign="" style="height:30px;">
                <td style="padding-left:10px">
        <p>Other liabilities</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$other_liabilities.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Are your assets and liabilities jointly owned?*</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$joint_asset_liabilities.'</p>
                </td>
            </tr>
        <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td colspan="2" style="padding-left:10px">
       <h3>Investment Objectives and Risks</h3>
                </td>
             </tr>
   <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Investment Objectives</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$investment_objectives.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Available funds for speculative/high risk investments</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$funds_for_investment.'</p>
                </td>
            </tr>
      
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Overall attitude towards investment risk</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$investment_attitude.'</p>
                </td>
            </tr>
        <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td colspan="2" style="padding-left:10px">
       <h3>Knowledge and Experience</h3>
                </td>
             </tr>
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Listed Shares</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_listed_shares.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Unlisted Shares</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_unlisted_shares.'</p>
                </td>
            </tr>
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Bonds</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_bonds.'</p>
                </td>
            </tr>
      <tr valign="" style="height:30px">
                <td style="padding-left:10px">
        <p>CFDs</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_cfds.'</p>
                </td>
            </tr>
       <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Spread Betting</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_betting.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Foreign Exchange</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_foreign_exchange.'</p>
                </td>
            </tr>
   <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Other</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$experience_other.'</p>
                </td>
            </tr>
      
     <tr valign="" style="height:30px; border-bottom:1px solid#DDD;">
                <td style="padding-left:10px">
        <p>Please provide any other information that you may feel is relevant to the service we provide:</p>
                </td>
                <td style="padding-left:10px;border-left:solid 1px #e5e5e5" width="50%">
        <p>'.$information.'</p>
                </td>
            </tr>
  
         
  </tbody>
</table>
</div>



<div style="clear:both"></div>
<br><br>

<div style="clear:both"></div>
      <br>&nbsp;
    </td>
  </tr>
   <tr>
    <td align="left" style="font-size:12px;font-family:Arial">

    <br>
    
    </td>
  </tr>
</tbody></table>
</body>
</html>
';

// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'From: Website <info@nsightconsulting.in>' . "\r\n";
$headers .= 'Cc:'.$user_email. "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
}
?>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>TraderInsights</title>
<link rel="stylesheet" type="text/css" href="all-ie-only.css" />
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">

  <link href="css/hr.css" rel="stylesheet">

 

  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100italic' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  
  </head>
  <body>
  
  <?php include('header.php');?>

  <section class="banner">
    <div class="container banner_contain">
      <div class="row">
        <div class="col-md-9">
          <aside>Let No Great Idea Go Uninvested</aside>
            <h3>There’s nothing passive about investing. <br>Your portfolio should be a reflection of your goals, your views, your ideas. <br>Welcome to the real world of investing. Your world.</h3>
            <a href="registration.php" class="banner_button btn-outlined btn-primary ">Sign Up for a Free Account</a>
           
              
        </div>
      </div>
    </div>
   </section>

<section class="whataretraderinsights">
   <div id="what-are-traderinsights">
    <div class="container">
        <h3>What is TraderInsight?</h3>
    </div>
    <div class="details">
        <div class="devicesOverlay"></div>
        <div class="container">
            <div class="inlineContent row">
                <div class="col-md-4">
                    <h4>TraderInsight is a research package like no other</h4>
                    <p>TraderInsight takes investing to the next level. We offer the tools needed to make the most educated investment decision not only in Stocks but also FX, Commodities, ETFs and More.</p>
                </div>
                <div class="col-md-4">
                    <h4>TraderInsight adopts a new philosophy for investing</h4>
                    <p>TraderInsight harnesses the skills of independent analysts to offer a complete and unbiased research package with trade signals in a range of instruments that are suited to your individual investment needs.</p>
                </div>
                <div class="col-md-4">
                    <h4>TraderInsight is designed <br>for all</h4>
                    <p>TraderInsight offers packages for investors who are new to investing along with investors with years of experience. With the financial climate forever changing TraderInsight keeps you up to date with market news and new trade ideas.</p>
                </div>
            </div>
            <div class="action">
                <a href="packages.php" class="btn btn-outlined btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</div>
</section>

<section class="description">

  <div class="container">
    <div class="row" align="center">
    <div class="margnt_40"></div>
      <div class="col-lg-4">  
        <h4>Real Time Insight</h4>
          <p>Quickly catch up on what is happening with the stocks you own and which companies everyone is talking about today.</p>
            <img src="images/laptop.jpg" class="img-responsive" alt="Real Time Insight">
      </div>
      <div class="col-lg-4">  
        <h4>Collaborate & Profit</h4>
          <p>Compare and contrast trade ideas from a range of market professionals and you decided what is best for your portfolio so you can reach your goals faster.</p>
            <img src="images/collaborate-and-profit.png" class="img-responsive" alt="Collaborate & Profit">
      </div>
      <div class="col-lg-4">  
        <h4>Gauge Real Time Sentiment</h4>
          <p>We appreciate how market data and announcements effect stock prices along with strategies, TraderInsight will offer Intraday reports to keep you in the know.</p>
            <img src="images/real-time-sentiment.png" class="img-responsive" alt="Gauge Real Time Sentiment">
      </div>
    </div>
  </div>
</section>
<section class="pad_both_50 our-investment">
  <div class="container">
   <div class="row">
    <div class="col-lg-6">
      <h1 class="padb_20">Our Investment Strategy</h1>
      <p>We have developed our TraderInsight packages to encompass an unbiased approach to research. TraderInsight harnesses the views and opinions of a range of market professionals so you can make the most educated decision for your portfolio. </p>
    </div>
    <div class="col-lg-6">
      <img src="images/our-strategy.png" class="img-responsive" alt="" />
    </div>
   </div>
  </div>
</section> 

<section class="pad_both_50 sound-stratgy">
  <div class="container">
    <div class="row">
        <h1 class="text-center padb_20">A Sound Strategy </h1>
      <div class="col-lg-4">
       <center>
         <img src="images/icon-forecast.png" class="img-responsive padb_20" alt="" />
         <p>Our helpful team will help you identify the optimal approach that meets your financial needs.</p>
       </center>
      </div>
      <div class="col-lg-4">
         <center>
         <img src="images/icon-plan.png" class="img-responsive padb_20" alt="" />
         <p>We can tailor a research package to suit your portfolio strategy along with your specific financial situation and to your level of risk tolerance.<p>
       </center>
      </div>
      <div class="col-lg-4">
         <center>
         <img src="images/icon-strategy.png" class="img-responsive padb_20" alt="" />
         <p>We’ll work with you to build a research package that is both cost- and tax-efficient. We can offer research that focuses only on Income and security .</p>
       </center>
      </div>
    </div>
  </div>
</section>



<section class="leading-why">
  <div class="container">
     <div class="row">
       <div class="col-lg-8 col-lg-offset-2 text-center">
        <h1 class="padb_20"> Discover A New World Of Research </h1>
        

        <a class="button" href="registration.php">Sign Up Today</a> 

       </div>
       
     </div>
  </div>
</section>                

<div id="contact"></div>

<?php include('footer.php');?>
   
  

  </body>
</html>
