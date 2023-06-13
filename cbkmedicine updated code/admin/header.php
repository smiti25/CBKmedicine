<?php
    error_reporting(0);
    session_start();
?>

<!--[if (lt IE 9) | IE 9]>
	<div style="background:#fff;padding:8px 0 10px;">
	<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
<![endif]-->
<!--markup header-->
<style>#footer{padding:2px 0 0;}</style>
<header role="banner">
	<!--header top part-->
	<section class="h_top_part">
		<div class="container">
			
		</div>
	</section>
	<!--header bottom part-->
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
    						<li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a class="tr_delay_hover color_dark tt_uppercase r_corners" href="dashboard.php"><b>Home</b></a></li>
                            <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a class="tr_delay_hover color_dark tt_uppercase r_corners" href="orders.php"><b>Orders</b></a></li>
                            <li class="relative f_xs_none m_xs_bottom_5"><a href="#" class="tr_delay_hover color_light tt_uppercase"><b>Categories</b></a>
								<!--sub menu-->
								<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
									<ul class="sub_menu">
										<li><a class="color_dark tr_delay_hover" href="addcategory.php">Add Category</a></li>
										<li><a class="color_dark tr_delay_hover" href="categories.php">View Categories</a></li>
									</ul>
								</div>
							</li>
                            <li class="relative f_xs_none m_xs_bottom_5"><a href="products.php" class="tr_delay_hover color_light tt_uppercase"><b>Products</b></a>
								<!--sub menu-->
								<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
									<ul class="sub_menu">
										<li><a class="color_dark tr_delay_hover" href="addproduct.php">Add Product</a></li>
										<li><a class="color_dark tr_delay_hover" href="products.php">View Products</a></li>
									</ul>
								</div>
							</li>
                            <li class="relative f_xs_none m_xs_bottom_5 m_left_10 m_xs_left_0"><a class="tr_delay_hover color_dark tt_uppercase r_corners" href="logout.php"><b>Logout</b></a></li>    
    
    					</ul>
    				</nav>
    			</div>
    		</div>
    	</div>
	</section>
</header>