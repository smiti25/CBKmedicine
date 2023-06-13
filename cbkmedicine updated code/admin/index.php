<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
		<title>Home</title>
		<meta charset="utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    	<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="../css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/camera.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/owl.carousel.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/owl.transitions.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/jquery.custom-scrollbar.css"/>
		<link rel="stylesheet" type="text/css" media="all" href="../css/style.css"/>
		<!--font include-->
		<link href="../css/font-awesome.min.css" rel="stylesheet"/>
		<script src="../js/modernizr.js"></script>
        
        <script type="text/javascript">
            function validate_form()
            {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;
                
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
    </script>
        
        
	</head>
    <?php
        require_once "adminhelper.php";
        $helper = new AdminHelper();
        $msg    = '';
        if($_POST)
        {
            $msg = $helper->checkUser();
        }
    ?>
	<body>

		<div class="boxed_layout relative w_xs_auto">

		    <style>#footer{padding:2px 0 0;}</style>
			<header role="banner">
                <section class="h_top_part">
            		<div class="container">
            			<div class="row clearfix">
                        
                        </div>
                    </div>
                </section>
                
                <section class="h_bot_part container">
            		<div class="clearfix row">
                		<div class="col-lg-5 t_md_align_c m_md_bottom_15">
                			<a class="logo d_md_inline_b" href="index.php">
                				<h1 style="font-size: 26px;padding: 20px;">Online Medicine Shopping</h1>
                			</a>
                		</div>
                                    
                		<div class="col-lg-7 clearfix t_sm_align_c">
                			<div class="clearfix t_sm_align_l f_left f_sm_none relative s_form_wrap m_sm_bottom_15 p_xs_hr_0 m_xs_bottom_5">
                				<!--button for responsive menu-->
                				<button class="r_corners centered_db d_none tr_all_hover d_xs_block m_xs_bottom_5 color_blue" id="menu_button">
                					<span class="centered_db r_corners"></span>
                					<span class="centered_db r_corners"></span>
                					<span class="centered_db r_corners"></span>
                				</button>
                				<!--main menu-->
                				<nav class="f_left f_xs_none d_xs_none m_md_right_30 m_sm_right_0" role="navigation">	
                					<ul class="horizontal_list main_menu type_2 clearfix">
                                        <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a class="tr_delay_hover color_dark tt_uppercase r_corners" href="../index.php"><b>Back to Portal</b></a></li>
                                    </ul>
                				</nav>
                			</div>
                		</div>
                    </div>  
                </section>
                        
            </header>
			<!--content-->
            
            <hr />
            
			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->

						<section class="col-lg-9 col-md-9 col-sm-9">

							<div class="row clearfix">


								<div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">

									<h2 class="tt_uppercase color_dark m_bottom_25">Login</h2>

                                    <?php 
                                        if($msg!='')
                                        {
                                            ?>
                                            <div class="alert_box r_corners error m_bottom_10">

								                <i class="fa fa-exclamation-triangle"></i><p><?php echo $msg; ?> </p>

						          	           </div>
                                            <?php
                                        }
                                    
                                    ?>
                                    
									<form id="" action="" style="min-height: 380px;" method="post" onSubmit="return validate_form();">

										<ul>

											<li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">User Name</label>

													<input type="text" id="username" name="username" class="full_width r_corners">

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">
                                                <div class="f_left half_column">

													<label for="cf_password" class="required d_inline_b m_bottom_5">Password</label>

													<input type="password" id="password" name="password" class="full_width r_corners">

												</div>

                                            </li>

											<li>

												<button class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">Login</button>

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
			</section>

		</div>

		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>

		<!--scripts include-->

		<script src="../js/jquery-2.1.0.min.js"></script>

		<script src="../js/jquery-ui.min.js"></script>

		<script src="../js/retina.js"></script>

		<script src="../js/waypoints.min.js"></script>

		<script src="../js/jquery.isotope.min.js"></script>

		<script src="../js/owl.carousel.min.js"></script>

		<script src="../js/jquery.custom-scrollbar.js"></script>

		<script src="../js/scripts.js"></script>


	</body>
</html>