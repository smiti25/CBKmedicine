<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
<head>
		<title>Online Medicine Shopping</title>
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
	</head>

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

						<li><a href="#" class="default_t_color">Add User</a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<!--left content column-->

						<section class="col-lg-9 col-md-9 col-sm-9" style="min-height: 380px;">

							<div class="row clearfix">


								<div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">

									<h2 class="tt_uppercase color_dark m_bottom_25">Add User</h2>

									<form id="contactform">

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
                                            
                                            <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Name</label>

													<input type="text" id="name" name="name" class="full_width r_corners">

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">
                                                <div class="f_left half_column">

													<label for="cf_email" class="required d_inline_b m_bottom_5">Email</label>

													<input type="text" id="email" name="email" class="full_width r_corners">

												</div>

                                            </li>
                                            
                                            <li class="clearfix m_bottom_15">
                                                <div class="f_left half_column">

													<label for="cf_phone" class="required d_inline_b m_bottom_5">Phone No.</label>

													<input type="text" id="phone" name="phone" class="full_width r_corners">

												</div>

                                            </li>
                                            
											<li>

												<button class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">Save User</button>

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