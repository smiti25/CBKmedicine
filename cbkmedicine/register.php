<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
		<title>Online Medicine Shopping</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    	<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="css/camera.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css"/>
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		<script src="js/modernizr.js"></script>
        
        <script type="text/javascript">
function validate_form()
{
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var mobile = document.getElementById("mobile").value;
  
    
    var validchar = /^[A-Z a-z]+$/;
    if(username=='')
    {
        alert("Please Enter User Name.");
        return false;
        
    }
    else if(password=='')
    {
        alert("Please Enter Password.");
        return false;
        
    }
    else if(name=='')
    {
        alert("Please Enter Name.");
        return false;
        
    }
    else if(!validchar.test(name))
            {
            alert("Name should not be numeric.");
            return false;
            
            }
   
    else if(email=='')
    {
        alert("Please Enter Email Address.");
        return false;
        
    }
    else if(validateEmail(email))
    {
        alert("Please Enter Valid Email Address.");
        return false;
        
    }
    
    else if(mobile=='')
    {
        alert("Please Enter Mobile Number.");
        return false;  
    }
    else if(isNaN(mobile))
    {
        alert("Mobile Number should be numeric.");
        return false;  
    }
    else if(checkInternationalPhone(mobile)==false)
    {
        alert("Please Enter a Valid Mobile Number");
		return false;
        
    }
    
    
}

function validateEmail(email)
{
    
   if(!email.value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
   {
        alert("Enter valid email ");
        email.focus();
        return false;
   }
        
    else
    {
        return false;
    }
}

// Declaring required variables
var digits = "0123456789";
// non-digit characters which are allowed in phone numbers
var phoneNumberDelimiters = "()- ";
// characters which are allowed in international phone numbers
// (a leading + is OK)
var validWorldPhoneChars = phoneNumberDelimiters + "+";
// Minimum no of digits in an international phone no.
var minDigitsInIPhoneNumber = 10;

function isInteger(s)
{   var i;
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function trim(s)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not a whitespace, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (c != " ") returnString += c;
    }
    return returnString;
}

function stripCharsInBag(s, bag)
{   var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++)
    {   
        // Check that current character isn't whitespace.
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function checkInternationalPhone(strPhone){
    var bracket=3;
    strPhone=trim(strPhone);
    if(strPhone.indexOf("+")>1) return false;
    if(strPhone.indexOf("-")!=-1)bracket=bracket+1;
    if(strPhone.indexOf("(")!=-1 && strPhone.indexOf("(")>bracket)return false;
    var brchr=strPhone.indexOf("(");
    if(strPhone.indexOf("(")!=-1 && strPhone.charAt(brchr+2)!=")")return false;
    if(strPhone.indexOf("(")==-1 && strPhone.indexOf(")")!=-1)return false;
    s=stripCharsInBag(strPhone,validWorldPhoneChars);
    return (isInteger(s) && s.length >= minDigitsInIPhoneNumber);
}

</script>


        
        
	</head>

    <?php
    require_once "medicinehelper.php";
    $helper = new MedicineHelper();
    $msg    = '';
    if($_POST)
    {
        $msg = $helper->regUsers();
    }
    ?>
    
	<body>

	
		<div class="boxed_layout relative w_xs_auto">

		<?php
            require_once "header.php";
        ?>
			<!--breadcrumbs-->

			<section class="breadcrumbs">

				<div class="container">

					<ul class="horizontal_list clearfix bc_list f_size_medium">

						<li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

						<li><a href="#" class="default_t_color">Register</a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->

						<section class="col-lg-9 col-md-9 col-sm-9">

							<h2 class="tt_uppercase color_dark m_bottom_25">Register</h2>

							

							<div class="row clearfix">

								

								<div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">

                                    <?php
                                        if($msg!='')
                                        {
                                            ?>
                                            
                                            <div class="alert_box r_corners color_green success m_bottom_10">

								                <i class="fa fa-smile-o"></i><p><?php echo $msg; ?> </p>

						                  	</div>
                                            <?php
                                        }
                                    
                                    ?>
								    	

								

									<form method="post" action="" onSubmit="return validate_form();">

										<ul>

											<li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">User Name</label>

													<input type="text" id="username" name="username" class="full_width r_corners">

												</div>

												<div class="f_left half_column">

													<label class="required d_inline_b m_bottom_5">Password</label>

													<input type="password" id="password" name="password" class="full_width r_corners">

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Name</label>

													<input type="text" id="name" name="name" class="full_width r_corners">

												</div>

												<div class="f_left half_column">

													<label for="cf_email" class="required d_inline_b m_bottom_5">Email</label>

													<input type="text" id="email" name="email" class="full_width r_corners">

												</div>

											</li>

											<li class="m_bottom_15">

											<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Mobile</label>

													<input type="text" id="mobile" name="mobile" class="full_width r_corners" size="10">

												</div>
											</li>

										      <div class="clearfix"></div>

											<li class="clearfix m_bottom_15">

												<input type="submit" class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large" style="margin-top: 8px;" value="Register"/>

											</li>

										</ul>

									</form>

								</div>

							</div>

						</section>

					

					</div>

				</div>

			</div>

			<!--markup footer-->

		<?php
            require_once "footer.php";
        ?>

		</div>


		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>

		<!--scripts include-->

		<script src="js/jquery-2.1.0.min.js"></script>

		<script src="js/jquery-ui.min.js"></script>

		<script src="js/retina.js"></script>

		<script src="js/waypoints.min.js"></script>

		<script src="js/jquery.isotope.min.js"></script>

		<script src="js/jquery.tweet.min.js"></script>

		<script src="js/owl.carousel.min.js"></script>

		<script src="js/jquery.custom-scrollbar.js"></script>

		<script src="js/styleswitcher.js"></script>

		<script src="js/colorpicker.js"></script>

		<script src="js/scripts.js"></script>

	</body>
</html>