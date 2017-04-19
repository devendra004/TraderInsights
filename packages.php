<?php 

$contact_us_email_to = "support@traderinsight.co.uk";


if(isset($_POST['send_mail']))
{
  $your_name    = $_POST['your_name'];
  $your_email     = $_POST['your_email'];
  $address   = $_POST['address'];
  $contact_number   = $_POST['contact_number'];
/*
  $headers .= "Organization: Sender Organization\r\n";
  $headers .= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
  $headers .= "X-Priority: 3\r\n";
  $headers .= "X-Mailer: PHP". phpversion() ."\r\n";
$headers .= "-f info@yourdomain.com \r\n";
  $headers .= "From: "."<".$your_email.">"."\r\n";
$headers .= "Reply-To: <rahuljoshi.gogu@gmail.com>\r\n";
$headers .= "Return-Path: <rahuljoshi.gogu@gmail.com>\r\n";
$headers .= "CC: <rahuljoshi.gogu@gmail.com>\r\n";
$headers .= "BCC: <rahuljoshi.gogu@gmail.com>\r\n";
*/
$headers  = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  $headers .= "From: "."<".$your_email.">"."\r\n";




  $to      =  $contact_us_email_to;
  
  $contact_us_subject = 'Trader Insight Enquiry ';
  
  //$message = "Dear Sir/Mam";
  $message = '
<html>
<head>
  <title>New Inquiry </title>
</head>
<body>

  <p style="line-height:5px; font-size:13px;">Name:  '.$your_name.'  </p>
   <p style="line-height:5px; font-size:13px;">Email.:  '.$your_email.'  </p>
   <p style="line-height:5px; font-size:13px;">Address.:  '.$address.'  </p>
  <p style="line-height:5px; font-size:13px;">Phone Number:  '.$contact_number.' </p>

</body>
</html>
';
  $mail_statu = mail($contact_us_email_to, $contact_us_subject, $message, $headers);
  if($mail_statu)
  {
    //$msg_count = 1;  die;
    echo '<META http-equiv="refresh" content="0;URL=packages.php"> ';
  }
  else
  {
    //echo $msg_count = 0;  die;
    
  }
}
 ?>


<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>What we do| TraderInsights</title>
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/custom.css">

  <link href="css/hr.css" rel="stylesheet">
 
 
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100italic' rel='stylesheet' type='text/css'>
 <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  </head>
  <body>
  
  <?php include('header.php');?>
  
<section class="pakages_banner flex">
  <div class="container pakages_banner_contain">
    <h1 > Research stocks, ETFs and FX on your own terms</h1>
    <p class="padb_20">Break away from the constraints of other brokers</p>
    <a class="button" href="registration.php">sign up to TraderInsight</a>
  </div>
</section>
<section class="best_for_u">
  <div class="container best_for_u_conatain pad_both_50">
  <h1>TraderInsight – Which is best for you?</h1>
  <div class="blueLine"></div>
     <div class="row">
       <div class="col-lg-4">
         
        
         <center><img   alt="slider" src="images/pakages1.png"></center>
        
        <h3> Take control of your investments </h3>
        </div>
        <div class="col-lg-4">
         
         
         <center><img   alt="slider" src="images/pakages2.png"></center>
        
        <h3>Research from £19.99 per month</h3>
        </div>
        <div class="col-lg-4">
         
        
         <center><img   alt="slider" src="images/pakages3.png"></center>
         
        <h3>Find single stock inspiration with TraderInsight</h3>
        </div>
       </div>
       
     </div>
  </div>
  <hr>
</section>
<section class="table">
  <div class="container table_contain pad_both_50">
    <div class="row">
    <div class="container">
  <div class="row">
        <div class="span12">
        <table class="table table-condensed table-hover table-striped">
          <thead>
            <tr>
              <th> </th>
          <!--    <th class="basic_back"><span class="logo ">Trader<span >Insight</span> <span>Basic</span></span> -->

             <th class="basic_back"> <img src="images/trader-basic1.png" alt="" title="Trader Basic" />
              
                     </th>
              <th class="silver_back"> <img src="images/trader-silver1.png" alt="" title="Trader Silver" />

              <!--<span class="logo ">Trader<span>Insight</span> <span>Silver</span></span> -->
              
                </th>
              <th class="basic_back"> <img src="images/trader-pro1.png" alt="" title="Trader pro" />
              
              <!--<span class="logo ">Trader<span>Insight</span> <span >Pro</span></span> -->
          
              
               </th>
              
            </tr>
          </thead>
          <tbody>
            <tr>
              <td >LSE & AIM Research  </td>
              <td class=""><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back_dark"><i class="fa fa-check"></i></td>
            
            </tr>
            <tr>
              <td>US Stock Research</td>
              <td> </td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back"><i class="fa fa-check"></i></td>
             
            </tr>
            <tr>
              <td>European Stock Research </td>
              <td> </td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back_dark"> <i class="fa fa-check"></i></td>
             
            </tr>
            <tr>
              <td>Financial Calendar</td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back"><i class="fa fa-check"></i></td>
             
            </tr>
            
         
            <tr>
              <td>Technical Analysis  </td>
              <td><i class="fa fa-check"></i></td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back_dark"><i class="fa fa-check"></i></td>
             
            </tr>
            <tr>
              <td>Alerts  </td>
              <td><i class="fa fa-check"></td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back"><i class="fa fa-check"></i></td>
            
            </tr>
            <tr>
              <td>Stock Filtering </td>
              <td> </td>
              <td><i class="fa fa-check"></i></td>
              <td class="green_back"><i class="fa fa-check"></i></td>
             
            </tr>
            <tr>
              <td>Index Signals</td>
              <td> </td>
              <td><i class="fa fa-check"> </td>
              <td class="green_back_dark"><i class="fa fa-check"></i></td>
             
            </tr>
            <tr>
              <td>FX signals  </td>
              <td> </td>
              <td> </td>
              <td class="green_back"><i class="fa fa-check"></i></td>
             
            </tr>
            <tr>
              <td>ETF signals </td>
              <td> </td>
              <td> </td>
              <td class="green_back_dark"><i class="fa fa-check"></i></td>
             
            </tr>
             <tr>
              <td>Commodity signals </td>
              <td> </td>
              <td> </td>
              <td class="green_back"><i class="fa fa-check"></td>
             
            </tr>
             <tr>
              <td>Editorial Research</td>
              <td><i class="fa fa-check"></td>
              <td><i class="fa fa-check"></td>
              <td class="green_back_dark"><i class="fa fa-check"></td>
             
            </tr>
             <tr>
              <td>Telephone & Email support</td>
              <td><i class="fa fa-check"></td>
              <td><i class="fa fa-check"></td>
              <td class="green_back"><i class="fa fa-check"></td>
             
            </tr>
            <tr>
              <td> </td>
              <td><h3 class="padb_20">£19.99/<font style="font-size:18px;">Month</font></h3>
              <a class="btn" href="https://dashboard.gocardless.com/api/template_plans/10WPZMG6KY/paylink" target="_blank">Subscribe</a>
              </td>
              <td>
              <h3 class="padb_20">£30.00/<font style="font-size:18px;">Month</font></h3>
              <a class="btn" href="https://dashboard.gocardless.com/api/template_plans/10WPSSNG4A/paylink" target="_blank">Subscribe</a></td>
              <td>
              <h3 class="padb_20">£45.00/<font style="font-size:18px;">Month</font></h3>
              <a class="btn" href="https://dashboard.gocardless.com/api/template_plans/10WPAVG4BE/paylink" target="_blank">Subscribe</a></td>
              
            </tr>
          </tbody>
        </table>
      </div>
  </div>
</div>
    </div>
  </div>
</section>

<section class="bg-packages">
  <div class="container">
      <div class="row">
        <div class="col-lg-4 right_border padding_20">

          <h3>What is investing?</h3>
          <p>Why do people invest their money rather than just save? It's not just about growing your savings so that you will have more money in the future. It's about growing the buying power of your money. You want the £1 that you are investing today to buy more things in the future than it does now.</p>
          
          <p class="table">
       <!--   <a class="btn" href="productlist_sharepad.jsp">Read More</a> -->
          </p>
        </div>
        <div class="col-lg-4 text-center right_border padding_20">
          <div class="stats">
                            <div class="stats-percentage">95<sup>%</sup></div>
                            <div>of users rate our products</div>
                            <div class="stats-quote">“very good”</div>
                            <div>or</div>
                            <div class="stats-quote">“excellent”</div>
                        </div>
        </div>
            <div class="col-lg-4 ">
          <h3>How YOU can beat the professionals</h3>
          <p>If you are new to investing, you may doubt your ability to match or beat the performance of professional wealth managers or fund managers. But you'll often be paying for mediocre performance and, as a private investor, you have several advantages over the professionals to help you out-perform.</p>
          
          <p class="table">
         <!--   <a class="btn" href="productlist_sharepad.jsp">Read More</a> -->
          </p>
        </div>
    </div>

     <div class="row top_border">
               
                <div class="col-lg-4 text-center right_border padding_both_40 ">
          
          <div class="stats">
                            <div class="stats-percentage">88<sup>%</sup></div>
                            <div>of customers said</div>
                            <div class="stats-quote">“I have become a better investor”</div>
                            
                        </div>
        </div>
            <div class="col-lg-4 right_border padding_20">
          <h3>Choosing your first investments</h3>
          <p>Stock-picking needn't be complicated. Here's a guide to the characteristics to look for when buying your first shares.</p>
          
          <p class="table">
         <!--   <a class="btn" href="productlist_sharepad.jsp">Read More</a> -->
          </p>
        </div>
               <div class="col-lg-4 text-center padding_both_40">
          <div class="stats">
                            <div class="stats-percentage">87<sup>%</sup></div>
                            <div>of users rate our customer support</div>
                            <div class="stats-quote">“very good”</div>
                            <div>or</div>
                            <div class="stats-quote">“exemplary”</div>
                        </div>
        </div>
    </div>

  </div>
</section>

<section class="graph-section">
   <div class="container">
     <div class="row">
       <div class="col-lg-6">
         <h1 class="padb_20">Giving you the benefit of diversification and the chat</h1>
         <p>We employ ETFs that track indexes for all the major asset classes used in our portfolios. Each ETF is chosen by our investment research team based on its relative cost, tracking error, market liquidity, and securities lending policies. We always tell you why we chose each ETF over its alternatives.</p>
       </div>
       <div class="col-lg-6">
         <img width="450" src="images/diversified2.png" style="margin-top:30px" alt="" />
       </div>
     </div>
   </div>
</section>

<section class="form">
    <div class="container form_contain">
       <h1 class="text-center">Submit Your Enquiry</h1>
    
       <form method="POST" class="form-inline col-lg-12">
       
             <div class="form-group col-sm-6">
               <input type="text" placeholder="Name" name="your_name" class="form-control">
             </div>
             <div class="form-group col-sm-6">
               <input type="email" placeholder="Email" name="your_email" class="form-control">
             </div>

           
             <div class="form-group col-sm-6">
               <input type="text" placeholder="Address" name="address" class="form-control">
             </div>

             <div class="form-group col-sm-6">
               <input type="text" placeholder="Phone Number" name="contact_number" class="form-control">
             </div>
                
            <div class="form-group col-sm-12">
               
               <textarea name="comment" class="form-control">Comments</textarea> 
        
             </div>
             
               <div class="form-group col-sm-3">
               <button class="btn custom_btn" type="submit" name="send_mail">Submit</button>
              
              </div>
       </form>
    </div>
      
    </section>

<div id="contact"></div>

<?php include('footer.php');?>
 
 
  </body>
</html>
