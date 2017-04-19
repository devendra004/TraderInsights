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

    
    <link href="css/datepicker.css" rel="stylesheet"/>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,100italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <script type="text/javascript" src="js/validation.js"></script>
<script src='js/bootstrap-datepicker.min.js'></script>  
<!-- Mask-input -->
  <script src='js/jquery.maskedinput.min.js'></script>  
<script type="text/javascript">
$(function() {
  $('.datepicker').datepicker();
  $(".date").mask("99/99/9999");
});
</script>  
  </head>
  <body>
    <?php include('header.php');?>
    <div class="registration_wrap">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center">Registartion</h1>

          </div> 
          <div class="col-lg-12" >
           <form id="" action=""  method="post" class="form-horizontal sustability validateForm">
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Full Name*</label>
                                <div class="col-md-4">
                                    <input type="text" name="full_name" required="required" class="form-control" id="" placeholder="">
                                  
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Email*</label>
                                <div class="col-md-4">
                                    <input type="email" name="email"  required="required" class="form-control" id="" placeholder="">
                              
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="control-label col-md-3">Telephone*</label>
                                <div class="col-md-4">
                                    <input type="text" name="telephone" required="required" class="form-control" id="" placeholder="">
                               
                                </div>
                            </div>
                             <div class="form-group">
                                <label for="" class="control-label col-md-3">Date of Birth*</label>
                                <div class="col-md-4">
                                  
                  <input type="text" name="date_of_birth" required="required" class="form-control input-sm date" id="date-mask">
                                   
                  <p class="help-block">dd/mm/yyyy</p>
            
                                </div>
                            </div>
                            
                            <div class="form-group">
                <label class="col-md-3 control-label">General Health*</label>
                <div class="col-md-4">
                  <label class="label-radio inline">
                    <input type="radio" name="general_health" value="Poor" required="required">
                    <span class="custom-radio"></span>
                    Poor
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="general_health" value="Fair" required="required">
                    <span class="custom-radio"></span>
                    Fair
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="general_health" value="Good" required="required">
                    <span class="custom-radio"></span>
                  Good
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            <h3>Financial Situation</h3>
                            <div class="form-group">
                <label class="col-md-3 control-label">Marital Status*</label>
                <div class="col-md-6">
                  <label class="label-radio inline">
                    <input type="radio" name="marital_status" value="Single" required="required">
                    <span class="custom-radio"></span>
                    Single
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="marital_status" value="Married Civil" required="required">
                    <span class="custom-radio"></span>
                    Married Civil
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="marital_status" value="Divorced" required="required">
                    <span class="custom-radio"></span>
                  Divorced
                  </label>
                                      <label class="label-radio inline">
                    <input type="radio" name="marital_status" value="Widowed"required="required">
                    <span class="custom-radio"></span>
                  Widowed
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                             <div class="form-group">
                                <label for="" class="control-label col-md-3">Number of Dependants</label>
                                <div class="col-md-2">
                                  
                  <select class="form-control" name="dependants" >
                  <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                     <option value="5+">5+</option>
                                    </select>
            
                                </div>
                            </div>
                            
                            <div class="form-group">
                <label class="col-md-3 control-label">Employment Status*</label>
                <div class="col-md-9">
                  <label class="label-radio inline">
                    <input type="radio" name="employment_status" value="Employed" required="required">
                    <span class="custom-radio"></span>
                    Employed
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="employment_status" value="Self Employed" required="required">
                    <span class="custom-radio"></span>
                    Self Employed
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="employment_status" value="Retired" required="required">
                    <span class="custom-radio"></span>
                  Retired
                  </label>
                                      <label class="label-radio inline">
                    <input type="radio" name="employment_status" value="Semi-Retired" required="required">
                    <span class="custom-radio"></span>
                  Semi-Retired
                  </label>
                                     <label class="label-radio inline">
                    <input type="radio" name="employment_status" value="Career Break" required="required">
                    <span class="custom-radio"></span>
                  Career Break
                  </label>
                                     <label class="label-radio inline">
                    <input type="radio" name="employment_status" value="Unemployed" required="required">
                    <span class="custom-radio"></span>
                  Unemployed
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                            <div class="form-group">
                <label class="col-md-8 control-label">Is your employer an investment firm regulated by the Financial Conduct Authority?*</label>
                <div class="col-md-3">
                  <label class="label-radio inline">
                    <input type="radio" name="investment_firm" value="Yes" required="required">
                    <span class="custom-radio"></span>
                    Yes
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="investment_firm" value="No" required="required">
                    <span class="custom-radio"></span>
                    No
                  </label>
                                  
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                             <div class="form-group">
                                <label for="" class="control-label col-md-3">Current Occupation*</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control" id="" name="current_occupation" placeholder="" required="required">
                                </div>
                            </div>
                            
                            <div class="form-group">
                <label class="col-md-4 control-label">Have you worked in finance industry?*</label>
                <div class="col-md-3">
                  <label class="label-radio inline">
                    <input type="radio" name="worked_in_fi" value="Yes" required="required">
                    <span class="custom-radio"></span>
                    Yes
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="worked_in_fi" value="No" required="required">
                    <span class="custom-radio"></span>
                    No
                  </label>
                                  
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                            <div class="form-group">
                <label class="col-md-4 control-label">Do you have degree level qualification?*</label>
                <div class="col-md-3">
                  <label class="label-radio inline">
                    <input type="radio" name="qualification" value="Yes" required="required">
                    <span class="custom-radio"></span>
                    Yes
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="qualification" value="No"  required="required">
                    <span class="custom-radio"></span>
                    No
                  </label>
                                  
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                             <h3>Income and Expenses</h3>
                              <div class="form-group">
                                <label for="" class="control-label col-md-3">Annual Employment Income<br>(net of tax)</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="employment_income">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Annual Interest and dividend Income</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="dividend_income">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Annual Pension Income</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="pension_income">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Annual Other Income</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="other_income">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Monthly mortgage/rent</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="mortgage">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Other monthly expenditure</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="monthly_expenditure">
                  
                  </div>
                                </div>
                            </div>
                            
                               <h3>Assets and Liabilities</h3>
                               
                               <div class="form-group">
                <label class="col-md-3 control-label">Property Ownership*</label>
                <div class="col-md-4">
                  <label class="label-radio inline">
                    <input type="radio" name="property_ownership" value="Home Owner" required="required">
                    <span class="custom-radio"></span>
                    Home Owner
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="property_ownership" value="Tenant"  required="required">
                    <span class="custom-radio"></span>
                  Tenant
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="property_ownership" value="Other" required="required">
                    <span class="custom-radio"></span>
                  Other
                  </label>
                                  
                </div><!-- /.col -->
              </div><!--/form-group-->
                            <h5><strong>Assets</strong></h5>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Main Residence</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="main_residence">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Listed Shares</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="listed_shares">
                  
                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Unlisted Shares</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="unlisted_shares">
                  
                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Savings</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="savings">
                  
                  </div>
                                </div>
                            </div>
                            
                            <h5><strong>Liabilities</strong></h5>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Outstanding mortgage</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="outstanding_mortgage">
                  
                  </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Personal loans</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="personal_loans">
                  
                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Credit card loans</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="credit_card_loans">
                  
                  </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class="control-label col-md-3">Other liabilities</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="other_liabilities">
                  
                  </div>
                                </div>
                            </div>
                          <div class="form-group">
                <label class="col-md-3 control-label">Are your assets and liabilities jointly owned?*</label>
                <div class="col-md-4">
                  <label class="label-radio inline">
                    <input type="radio" name="joint_asset_liabilities" value="Yes" required="required">
                    <span class="custom-radio"></span>
                  Yes
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="joint_asset_liabilities" value="Yes" required="required">
                    <span class="custom-radio"></span>
                No
                  </label>
                                  
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                            <h3>Investment Objectives and Risks</h3>
                            
                            <div class="form-group">
                <label class="col-md-4 control-label">Please indicate your investment objectives*</label>
                <div class="col-md-6">
                  <label class="label-radio inline">
                    <input type="radio" name="investment_objective" value="Growth" required="required">
                    <span class="custom-radio"></span>
                  Growth
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="investment_objective" value="Income" required="required">
                    <span class="custom-radio"></span>
                Income
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="investment_objective" value="Income & Growth" required="required">
                    <span class="custom-radio"></span>
                Income & Growth
                  </label>
                                  
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                               <div class="form-group">
                                <label for="" class="control-label col-md-3">Available funds for speculative/high risk investments</label>
                                <div class="col-md-3">
                                 <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-gbp"></i></span>
                    <input type="text" class="form-control" name="funds_for_investment">
                  
                  </div>
                                </div>
                            </div>
                            
                              <div class="form-group">
                <label class="col-md-12 control-label">What do you consider as your <strong><u>overall</u></strong> attitude towards investment risk?*</label>
                <div class="col-md-12">
                  <label class="label-radio inline">
                    <input type="radio" name="investment_attitude" value="Low" required="required">
                    <span class="custom-radio"></span>
                  Low
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="investment_attitude" value="Medium Low" required="required">
                    <span class="custom-radio"></span>
                Medium Low
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="investment_attitude" value="Medium" required="required">
                    <span class="custom-radio"></span>
                Medium
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="investment_attitude" value="Medium High" required="required">
                    <span class="custom-radio"></span>
                Medium High
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="investment_attitude" value="High" required="required">
                    <span class="custom-radio"></span>
                High
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                            <h3>Knowledge and Experience</h3>
                            
                            <p>How many years <strong><u>active</u></strong> experience do you have investing in:</p>
                              <div class="form-group">
                <label class="col-md-3 control-label">Listed Shares</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_listed_shares" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_listed_shares" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_listed_shares" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_listed_shares" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_listed_shares" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                              <div class="form-group">
                <label class="col-md-3 control-label">Unlisted Shares</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_unlisted_shares" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_unlisted_shares" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_unlisted_shares" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_unlisted_shares" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_unlisted_shares" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                              <div class="form-group">
                <label class="col-md-3 control-label">Bonds</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_bonds" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_bonds" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_bonds" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_bonds" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_bonds" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                              <div class="form-group">
                <label class="col-md-3 control-label">CFDs</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_cfds" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_cfds" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_cfds" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_cfds" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_cfds" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                              <div class="form-group">
                <label class="col-md-3 control-label">Spread Betting</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_betting" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_betting" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_betting" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_betting" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_betting" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                              <div class="form-group">
                <label class="col-md-3 control-label">Foreign Exchange</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_foreign_exchange" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_foreign_exchange" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_foreign_exchange" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_foreign_exchange" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_foreign_exchange" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            
                              <div class="form-group">
                <label class="col-md-3 control-label">Other</label>
                <div class="col-md-8">
                  <label class="label-radio inline">
                    <input type="radio" name="experience_other" value="None">
                    <span class="custom-radio"></span>
                None
                  </label>
                  <label class="label-radio inline">
                    <input type="radio" name="experience_other" value="Less than a year">
                    <span class="custom-radio"></span>
                Less than a year
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_other" value="1-2 years">
                    <span class="custom-radio"></span>
                1-2 years
                  </label>
                                  <label class="label-radio inline">
                    <input type="radio" name="experience_other" value="3-4 years">
                    <span class="custom-radio"></span>
                3-4 years
                  </label>
                                    <label class="label-radio inline">
                    <input type="radio" name="experience_other" value="Over 5 years">
                    <span class="custom-radio"></span>
              Over 5 years
                  </label>
                </div><!-- /.col -->
              </div><!--/form-group-->
                            <p>&nbsp;</p>
                            <h3>Sophisticated Investor</h3>
                            <p>At least one of the following should apply:</p>
                            <ul>
                            <li>A member of a network or syndicate of business angels and have been so for at least the last six months before the date you self-certify.</li>
                            <li>You have made more than one investment in an unlisted company in the two years before the date you self-certify.</li>
                            <li>You are working, or have worked in the two years before the date you self-certify, in a professional capacity in the private equity sector, or in providing finance for small and medium enterprises.</li>
                            <li>You are currently, or have been in the two years before the date you self-certify, a director of a company with an annual turnover of at least £1 million.</li>
                            </ul>
                            <div class="form-group">
                            <div class="col-md-12">
                            <label class="label-checkbox">
                    <input type="checkbox" required="required" value="Ticked" name="confirm">
                  
                    Please tick this box to self certify yourself as a sophisticated investor.
                  </label>
                                    </div>
                                    </div>
                             <p>&nbsp;</p>
                               <div class="form-group">
                                <div class="col-md-12">
                                  <span>Please provide any other information that you may feel is relevant to the service we provide:</span>
                                 <textarea class="form-control" name="information"></textarea>
           
                                </div>
                            </div>
                            <p>I/we confirm and agree the information supplied by me/us is true and correct. Further, I/We undertake to notify Commodity Index Ltd if there is any change to my/our status such that anyone of the statements in the declaration becomes untrue.</p>
                            
                             <div class="form-group">
                                <div class="col-md-12">
                                  
                                <label class="label-checkbox">
                    <input type="checkbox" name="confirm" value="Ticked" required="required">
                    <span class="custom-checkbox"></span>
                    <strong>Please tick this box as an alternative to signing.</strong>
                  </label>
                                </div>
                            </div>
                            
                               <div class="form-group">
                                <div class="col-md-12">
                                  
                                <label class="label-checkbox">
                    <input type="checkbox" name="confirm" value="Ticked" required="required">
                    <span class="custom-checkbox"></span>
                     I have read and understood the Risk Disclosures along with the Terms and Conditions describing the
                nature of the products and the potential risks associated with them. <a href="/terms-policies">click here to see terms </a>
                  </label>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <div class="col-md-offset-2 col-md-8">
                                  
                                 <button type="submit" class="btn btn-lg btn-block form_submit" name="submit">Submit</button>
           
                                </div>
                            </div>
                        </form>
      <div class="clearfix"></div>
           <p>&nbsp;</p>
      </div>  
      </div>  
      </div> 
      </div>     

<?php include('footer.php');?>

</body>

</html>