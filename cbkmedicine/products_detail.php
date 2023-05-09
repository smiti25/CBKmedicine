<!doctype html>

<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->

<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->

	

<head>

		<title>Online Medicine Shopping</title>

		<meta charset="utf-8"/>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

		<!--meta info-->

		<meta name="author" content="">

		<meta name="keywords" content="">

		<meta name="description" content="">

		<link rel="icon" type="image/ico" href="images/fav.ico">

		<!--stylesheet include-->

		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.fancybox-1.3.4.css">

		<link rel="stylesheet" type="text/css" media="all" href="css/colorpicker.css">

		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">

		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">

		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">

		 <link rel="stylesheet" type="text/css" media="all" href="css/style.css">

		<!--font include-->

		<link href="css/font-awesome.min.css" rel="stylesheet">

		<script src="js/modernizr.js"></script>
        
        <script type="text/javascript">
            function validate_form()
            {
                var review = document.getElementById("review").value;
               
                
                if(review=='')
                {
                    alert("Please Enter Review.");
                    return false;
                    
                }
                
            }
        </script>
        
        
        <?php
        error_reporting(0);
        session_start();
        require_once "medicinehelper.php";
        $helper = new MedicineHelper();
        $msg = '';
        
        $product_info = $helper->getProductinfo($_GET['id']);
        
        $img          = "admin/productimages/".$product_info->image;
        ?>


	</head>
    
    <?php
       
        if($_POST)
        {
            
            //var_dump($_POST);die;
            $msg = $helper->addReview();
            
        }
        
    ?>
	<body>

	

		<div class="boxed_layout relative w_xs_auto">

			<!--[if (lt IE 9) | IE 9]>

				<div style="background:#fff;padding:8px 0 10px;">

				<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>

			<![endif]-->

			<!--markup header-->
            <?php
                require_once "header.php";
            ?>
		
			<!--breadcrumbs-->

			<section class="breadcrumbs">

				<div class="container">

					<ul class="horizontal_list clearfix bc_list f_size_medium">

						<li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

						<li class="m_right_10"><a href="#" class="default_t_color">Shop</a><i class="fa fa-angle-right d_inline_middle m_left_10"></i></li>

						<li><a href="#" class="default_t_color"><?php echo $product_info->product_name;?></a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="clearfix m_bottom_30 t_xs_align_c">

						<div class="photoframe type_2 shadow r_corners f_left f_sm_none d_xs_inline_b product_single_preview relative m_right_30 m_bottom_5 m_sm_bottom_20 m_xs_right_0 w_mxs_full">

							<span class="hot_stripe"><img src="images/sale_product.png" alt=""></span>

							<div class="relative d_inline_b m_bottom_10 qv_preview d_xs_block">

								<img width="230" height="330" id="zoom_image" src="<?php echo $img;?>" data-zoom-image="<?php echo $img;?>" class="tr_all_hover" alt="">

								<a href="<?php echo $img;?>" class="d_block button_type_5 r_corners tr_all_hover box_s_none color_light p_hr_0">

									<i class="fa fa-expand"></i>

								</a>

							</div>

							<!--carousel-->

						</div>

						<div class="p_top_10 t_xs_align_l">

							<!--description-->

							<h2 class="color_dark fw_medium m_bottom_10"><?php echo $product_info->product_name;?></h2>

							<div class="m_bottom_10">

							
							

							</div>

							<hr class="m_bottom_10 divider_type_3">


							<p class="m_bottom_10"><?php echo $product_info->product_desc;?></p>

							<hr class="divider_type_3 m_bottom_15">

							<div class="m_bottom_15">

								
                                <span class="v_align_b f_size_big m_left_5 scheme_color fw_medium">Rs. <?php echo $product_info->cost;?></span>

							</div>

						

							<div class="d_ib_offset_0 m_bottom_20">

								<a href="ordernow.php?product_id=<?php echo $product_info->id;?>" class="button_type_12 r_corners bg_scheme_color color_light tr_delay_hover d_inline_b f_size_large">Order  Now</a>

							</div>
							

						</div>

					</div>

					<!--tabs-->

					<div class="tabs m_bottom_45">

						<!--tabs navigation-->

						<nav>

							<ul class="tabs_nav horizontal_list clearfix">

								<li class="f_xs_none"><a href="#tab-1" class="bg_light_color_1 color_dark tr_delay_hover r_corners d_block">Description</a></li>

								
							</ul>

						</nav>

						<section class="tabs_content shadow r_corners">

							<div id="tab-1">

								<p class="m_bottom_10"><?php echo $product_info->product_desc;?> </p>

							</div>




						</section>

					</div>

					<div class="clearfix">

						
					</div>


					<hr class="divider_type_3 m_bottom_15">

					

				</div>

			</div>

			<!--markup footer-->

        <?php
            require_once "footer.php";
        ?>

		</div>

		<!--social widgets-->



		

		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>

		<!--scripts include-->

		<script src="js/jquery-2.1.0.min.js"></script>

		<script src="js/jquery-ui.min.js"></script>

		<script src="js/jquery-migrate-1.2.1.min.js"></script>

		<script src="js/retina.js"></script>

		<script src="js/elevatezoom.min.js"></script>

		<script src="js/waypoints.min.js"></script>

		<script src="js/owl.carousel.min.js"></script>

		<script src="js/jquery.custom-scrollbar.js"></script>

		<script src="js/jquery.fancybox-1.3.4.js"></script>

        <script src="js/scripts.js"></script>

	</body>



</html>