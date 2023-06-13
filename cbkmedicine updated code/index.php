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
        <link rel="stylesheet" type="text/css" media="all" href="css/custom.css"/>
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet"/>
		<script src="js/modernizr.js"></script>
        
         <?php
        require_once "medicinehelper.php";
        $helper = new MedicineHelper();
        $msg    = '';
        
        ?>
        
	</head>
	<body>
		<!--boxed layout-->
		<div class="boxed_layout relative w_xs_auto">
			<?php
            require_once "header.php";
            ?>
			<!--slider-->
			<div class="camera_wrap m_bottom_0">
				<div data-src="images/s1.png" data-custom-thumb="images/s1.png">
					
				</div>
    			<div data-src="images/s2.png" data-custom-thumb="images/s2.png">
    				
    			</div>
                
    			
			</div>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<h2 class="tt_uppercase m_bottom_20 color_dark heading1 animate_ftr">All Products</h2>
					<!--products-->
					<section class="products_container clearfix m_bottom_25 m_sm_bottom_15">
                        <!--product item-->
                        <?php
                        echo $helper->getLatestProducts();
                        ?>
						<!--product item-->
                        
					</section>
				
				</div>
				<!--banners-->
				<div class="row clearfix">
					<div class="col-lg-4 col-md-4 col-sm-4"></div>
					<div class="col-lg-4 col-md-4 col-sm-4"></div>
					<div class="col-lg-4 col-md-4 col-sm-4"></div>
				</div>
			</div>
			
			<!--markup footer-->
			<?php
            require_once "footer.php";
            ?>
		</div>
		
		<button class="t_align_c r_corners tr_all_hover animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/retina.js"></script>
		<script src="js/camera.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>
		<script src="js/scripts.js"></script>
        
	</body>


</html>