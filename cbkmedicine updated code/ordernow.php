<?php
    error_reporting(0);
    session_start();
?>

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
    function validate_login_form()
    {
        var username = document.login_form.username.value;
        var password = document.login_form.password.value;
        
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
    }
    
    function validate_order_form()
    {
        var name    = document.order_form.name.value;
        var email   = document.order_form.email.value;
        var mobile  = document.order_form.mobile.value;
        var address = document.order_form.address.value;
        var city    = document.order_form.city.value;
        var state    = document.order_form.state.value;
        var zip_code= document.order_form.zip_code.value;
        
        var validchar = /^[A-Z a-z]+$/;
        
        if(name=='')
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
        else if(address=='')
        {
            alert("Please Enter Address.");
            return false;
        }
        else if(city=='')
        {
            alert("Please Enter City.");
            return false;   
        }
        else if(state=='')
        {
            alert("Please Enter State.");
            return false;   
        }
        else if(zip_code=='')
        {
            alert("Please Enter Zip Code.");
            return false;   
        }
    }
    
    function validate_reg_form()
    {
        var username = document.reg_user.username.value;
        var password = document.reg_user.password.value;
        var name     = document.reg_user.name.value;
        var email    = document.reg_user.email.value;
        var mobile   = document.reg_user.mobile.value;
      
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
        var atpos  = email.indexOf("@");   // The indexOf() method returns the position of the first occurrence of a specified value in a string. // Default value of start is 0  
        //alert(atpos);
        var dotpos = email.lastIndexOf(".");  // The lastIndexOf() method returns the position of the last occurrence of a specified value in a string. // Default value of start is 0  
        //alert(dotpos);
        
        if((atpos<1) || (dotpos<(atpos+2)) || (dotpos+2>=email.length))  
        {
            return true;
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
    
    function applycoupon()
    {
        var coupon_code = document.getElementById("coupon_code").value;
        var total       = document.getElementById("total").value;
        
        if(coupon_code=='')
        {
            alert("Please Enter Coupon Code.");
            return false;
        }
        else
        {
            jQuery("#btn_coupon").hide();
            document.getElementById("coupon_status").innerHTML = "Please wait...";
            
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    if(total == this.responseText)
                    {
                        document.getElementById("coupon_status").innerHTML = "<div style='padding: 25px 20px 25px 25px;' class='alert_box r_corners color_red error m_bottom_10'>Coupon Code already used or Invalid Coupon Code.</div>"; 
                    }
                    else
                    {
                        document.getElementById("coupon_status").innerHTML = "<div style='padding: 25px 20px 25px 25px;' class='alert_box r_corners color_green success m_bottom_10'>Coupon Code applied.</div>";
                    }
                    document.getElementById("text_total").innerHTML = "Rs. "+this.responseText;
                    document.getElementById("total").value          = this.responseText;
                }
            };
            xmlhttp.open("GET", "applycoupon.php?coupon_code="+coupon_code+"&total="+total, true);
            xmlhttp.send();
        }
    }
    </script>
        
	</head>

    <?php
    require_once "medicinehelper.php";
    $helper = new MedicineHelper();
    
    $product_info = $helper->getProductinfo($_GET['product_id']);
    $data  = array();
    if($_SESSION['fid'])
    {
        $data = $helper->getUserInfo($_SESSION['fid']);
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

						<li class="m_right_10 current"><a href="#" class="default_t_color">Order Now</a></li>

					

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->

						<section class="col-lg-9 col-md-9 col-sm-9 m_xs_bottom_30">

                            <?php if($_GET['error']) { ?> 
                            <div class="alert_box r_corners error m_bottom_10">
								<i class="fa fa-exclamation-triangle"></i><p> Sorry! Please Try Again.</p>
							</div>
                            <?php } ?>
						
							<!--tabs-->
                            <?php if(!$_SESSION['fid']){ ?> 
							<div class="tabs m_bottom_45">

								<!--tabs navigation-->

								<nav>

									<ul class="tabs_nav horizontal_list clearfix">

										<li><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Login</a></li>

										<li><a href="#tab-2" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Register</a></li>

									</ul>

								</nav>
                                
								<section class="tabs_content shadow r_corners">

									<div id="tab-1">

										<!--login form-->

										<h5 class="fw_medium m_bottom_15">I am Already Registered</h5>

										<form id="login_form" name="login_form" method="post" action="checklogin.php" onsubmit="return validate_login_form();">

											<ul>
												<li class="clearfix m_bottom_15">
													<div class="half_column type_2 f_left">
														<label for="username" class="m_bottom_5 d_inline_b">User Name</label>
														<input type="text" id="username" name="username" class="r_corners full_width m_bottom_5"/>
													</div>
													<div class="half_column type_2 f_left">
														<label for="pass" class="m_bottom_5 d_inline_b">Password</label>
														<input type="password" id="password" name="password" class="r_corners full_width m_bottom_5"/>
                                                        <input type="hidden" name="product_id" value="<?php echo $product_info->id;?>" />
													</div>
												</li>
												<li><button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Log In</button></li>
											</ul>

										</form>

									</div>

									<div id="tab-2">

										<form id="reg_user" name="reg_user" method="post" action="registeruser.php" onsubmit="return validate_reg_form();">

											<ul>

												<li class="m_bottom_15">

													<label for="username" class="d_inline_b m_bottom_5 required">Username</label>

													<input type="text" id="username" name="username" class="r_corners full_width"/>

												</li>
           	                                    <li class="m_bottom_15">

													<label for="password" class="d_inline_b m_bottom_5 required">Password</label>

													<input type="password" id="password" name="password" class="r_corners full_width"/>

												</li>
                                                <li class="m_bottom_25">

													<label for="d_name" class="d_inline_b m_bottom_5 required">Name</label>

													<input type="text" id="name" name="name" class="r_corners full_width"/>

												</li>

												<li class="m_bottom_15">

													<label for="email" class="d_inline_b m_bottom_5 required">Email</label>

													<input type="email" id="email" name="email" class="r_corners full_width"/>

												</li>

											

												<li>

													<label for="mobile" class="d_inline_b m_bottom_5 required">Mobile</label>

													<input type="text" id="mobile" name="mobile" class="r_corners full_width"/>
                                                    <input type="hidden" name="product_id" value="<?php echo $product_info->id;?>" />
												</li>
                                                
                                                <li><br /><button type="submit" class="button_type_4 r_corners bg_scheme_color color_light tr_all_hover">Register</button></li>

											</ul>

										</form>

									</div>

								</section>

							</div>
                            <?php } else { ?>

                            <form method="post" name="order_form" id="order_form" action="makeorder.php" onsubmit="return validate_order_form();">
							<h2 class="color_dark tt_uppercase m_bottom_25">Billing Information</h2>

							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">

								<div class="row clearfix">

									<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
											<ul>
												<li class="m_bottom_15">

													<label for="f_name_1" class="d_inline_b m_bottom_5 required">Name</label>

													<input type="text" id="name" name="name" class="r_corners full_width" value="<?php echo $data->name;?>" readonly=""/>

												</li>
           	                                    <li class="m_bottom_15">

													<label for="u_email" class="d_inline_b m_bottom_5 required">Email</label>

													<input type="email" id="email" name="email" class="r_corners full_width" value="<?php echo $data->email;?>" readonly=""/>

												</li>
                                                <li class="m_bottom_15">

													<label for="m_phone_1" class="d_inline_b m_bottom_5 required">Mobile</label>

													<input type="text" id="mobile" name="mobile" class="r_corners full_width" value="<?php echo $data->mobile;?>" readonly=""/>

												</li>
											
												<li class="m_bottom_15">

													<label for="address_1" class="d_inline_b m_bottom_5 required">Address </label>

													<input type="text" id="address" name="address" class="r_corners full_width"/>

												</li>

												<li class="m_bottom_15">

													<label for="city_1" class="d_inline_b m_bottom_5 required">City</label>

													<input type="text" id="city" name="city" class="r_corners full_width"/>

												</li>

												<li class="m_bottom_15">

													<label class="d_inline_b m_bottom_5 required">State</label>

													<input type="text" id="state" name="state" class="r_corners full_width"/>

												</li>

                                                <li class="m_bottom_15">

													<label for="code_1" class="d_inline_b m_bottom_5 required">Zip / Postal Code</label>

													<input type="text" id="zip_code" name="zip_code" class="r_corners full_width"/>

												</li>
											
											</ul>

									</div>

									

								</div>

							</div>

						

							<h2 class="tt_uppercase color_dark m_bottom_30">Payment</h2>

							<div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">

								<figure class="block_select clearfix relative m_bottom_15">

									<input type="radio" checked name="radio_2" class="d_none">

									<img src="images/cod.jpg" alt="" class="f_left m_right_20 f_mxs_none m_mxs_bottom_10" style="width: 115px !important;"/>

									<figcaption class="d_table d_sm_block">

										<div class="d_table_cell d_sm_block p_sm_right_0 p_right_45 m_mxs_bottom_5">

											<h5 class="color_dark fw_medium m_bottom_15 m_sm_bottom_5">Cash on delivery</h5>

											<p>Available Cash on delivery</p>

										</div>

									

									</figcaption>

								</figure>

								<hr class="m_bottom_20">

							

							</div>
                            
                            <h2 class="tt_uppercase color_dark m_bottom_30">Have a coupon?</h2>
                            <div class="bs_inner_offsets bg_light_color_3 shadow r_corners m_bottom_45">

								<div class="row clearfix">

									<div class="col-lg-6 col-md-6 col-sm-6 m_xs_bottom_30">
											<ul>
												<li class="m_bottom_15">

													<label for="coupon_code" class="d_inline_b m_bottom_5">Coupon Code</label>

													<input type="text" id="coupon_code" name="coupon_code" class="r_corners full_width" value="<?php echo $data->coupon_code;?>" />
                                                    <br /><br />
                                                    <a href="javascript:void(0);" id="btn_coupon" onclick="applycoupon();" class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Apply Coupon</a>
                                                    <div id="coupon_status"></div>
												</li>
                                            </ul>
                                    </div>
                                </div>
                            </div>
						

							<h2 class="tt_uppercase color_dark m_bottom_30">Notes and special requests</h2>

							<!--requests table-->

							<table class="table_type_5 full_width r_corners wraper shadow t_align_l">

								<tr>

									<td colspan="2">

										<label for="notes" class="d_inline_b m_bottom_5">Notes and special requests:</label>

										<textarea id="notes" name="notes" class="r_corners notes full_width"></textarea>

									</td>

								</tr>

								<tr>

									<td class="t_align_r">

										<p class="f_size_large fw_medium scheme_color">Total:</p>

									</td>

									<td>

										<p class="f_size_large fw_medium scheme_color" id="text_total">Rs. <?php echo $product_info->cost;?></p>
                                        <input type="hidden" name="payment_method" value="COD" />
                                        <input type="hidden" id="total" name="total" value="<?php echo $product_info->cost;?>" />
                                        <input type="hidden" name="product_id" value="<?php echo $product_info->id;?>" />
									</td>

								</tr>

							
								<tr>
									<td colspan="2">
										<button class="button_type_6 bg_scheme_color f_size_large r_corners tr_all_hover color_light m_bottom_20">Order Now</button>
									</td>
								</tr>

							</table>
                            </form>
                            <?php } ?>

						</section>

						<!--right column-->


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

		<script src="js/owl.carousel.min.js"></script>

		<script src="js/waypoints.min.js"></script>
	

		<script src="js/colorpicker.js"></script>

		<script src="js/scripts.js"></script>

	</body>
</html>