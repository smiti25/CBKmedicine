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
		
		
        
	</head>

    <?php
    require_once "medicinehelper.php";
    $helper = new MedicineHelper();
    $msg    = '';
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

						<li><a href="#" class="default_t_color">About Us</a></li>

					</ul>

				</div>

			</section>

			<!--content-->

			<div class="page_content_offset">

				<div class="container">

					<div class="row clearfix">

						<p><b> The purpose of Online Medical Store is to automate the existing manual system by the help of computerized equipments and full-fledged computer software, fulfilling their requirements, so that their valuable data/ information can be stored for a longer period with easy accessing and manipulation of the same.
                         The required software and hardware are easily available and easy to work with.
                         Online Medical Store, as described above, can lead to error free, secure, reliable and fast management system. 
                         In this project user can view the medicines online and give the orders any time.
                         Admin can add the products and view the order list. The organization can maintain computerized records without redundant entries. 
                         That means that one need not be distracted by information: that is not relevant, while being able to reach the information Basically, the project describes how to manage for good performance and better services for the clients.
</b> </p>

					

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

		<script src="js/scripts.js"></script>

	</body>
</html>