<?php
    error_reporting(0);
    session_start();
    
    require_once "medicinehelper.php";
    $helper = new MedicineHelper();
?>
<!--[if (lt IE 9) | IE 9]>
	<div style="background:#fff;padding:8px 0 10px;">
	<div class="container" style="width:1170px;"><div class="row wrapper"><div class="clearfix" style="padding:9px 0 0;float:left;width:83%;"><i class="fa fa-exclamation-triangle scheme_color f_left m_right_10" style="font-size:25px;color:#e74c3c;"></i><b style="color:#e74c3c;">Attention! This page may not display correctly.</b> <b>You are using an outdated version of Internet Explorer. For a faster, safer browsing experience.</b></div><div class="t_align_r" style="float:left;width:16%;"><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode" class="button_type_4 r_corners bg_scheme_color color_light d_inline_b t_align_c" target="_blank" style="margin-bottom:2px;">Update Now!</a></div></div></div></div>
<![endif]-->
<!--markup header-->
<header role="banner">
	<!--header top part-->
	<section class="h_top_part">
		<div class="container">
			<div class="row clearfix">
				<div class="col-lg-9 col-md-9 col-sm-9 t_xs_align_c">
					<?php
                        if($_SESSION['fid'])
                        {
                            ?>
                            <p class="f_size_small">Welcome | <?php echo $_SESSION['fusername'] ?> <a href="logout.php">Logout</a>
                            <?php
                        }
                        else
                        {
                            ?>
                            <a href="login.php" >Log In</a> or <a href="register.php">Register</a> </p>       
                            <?php
                        }
                    ?>
                     
				</div>
				<div class="col-lg-3 col-md-3 col-sm-3 t_align_c t_xs_align_c">
					<p class="f_size_small">Call us toll free: <b class="color_dark">1234567890</b></p>
				</div>
				<!--<nav class="col-lg-4 col-md-4 col-sm-5 t_align_r t_xs_align_c">
					<ul class="d_inline_b horizontal_list clearfix f_size_small users_nav">
						<li><a href="#" class="default_t_color">My Account</a></li>
						<li><a href="#" class="default_t_color">Orders List</a></li>
						<li><a href="#" class="default_t_color">Checkout</a></li>
					</ul>
				</nav>-->
			</div>
		</div>
	</section>
	<!--header bottom part-->
		<section class="h_bot_part container">
					<div class="clearfix row">
						<div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
							<a href="index.php" class="logo m_xs_bottom_15 d_xs_inline_b">
								<h1 style="font-size: 40px;padding: 16px;">Online Medicine Shopping</h1>
							</a>
						</div>
					
					</div>
				</section>
				<!--main menu container-->
				<section class="menu_wrap relative">
					<div class="container clearfix">
						<!--button for responsive menu-->
						<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
							<span class="centered_db r_corners"></span>
						</button>
						<!--main menu-->
						<nav role="navigation" class="f_left f_xs_none d_xs_none">	
							<ul class="horizontal_list main_menu clearfix">
								<li class="current relative f_xs_none m_xs_bottom_5"><a href="index.php" class="tr_delay_hover color_light tt_uppercase"><b>Home</b></a></li>
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="aboutus.php" class="tr_delay_hover color_light tt_uppercase"><b>About Us</b></a></li>
                                <li class="relative f_xs_none m_xs_bottom_5">
                                    <a href="shop.php" class="tr_delay_hover color_light tt_uppercase"><b>Shop</b></a>
                                    <?php
                                    $categories = $helper->getCategoriesData();
                                    if($categories)
                                    {
                                        ?>
                                        <div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
    									    <ul class="sub_menu">
                                            <?php
                                            foreach($categories as $category)
                                            {
                                                ?>
                                                <li><a class="color_dark tr_delay_hover" href="shop.php?category_id=<?php echo $category['id'];?>"><?php echo $category['category_name'];?></a></li>
                                                <?php
                                            }
                                            ?>
                                            </ul>
                                        </div>  
                                        <?php
                                    }
                                    ?>
                                    
                                </li>
                                <li class="relative f_xs_none m_xs_bottom_5"><a href="services.php" class="tr_delay_hover color_light tt_uppercase"><b>Services</b></a></li>
                                <?php
                                if(!$_SESSION['fid'])
                                {
                                    ?>
                                    <li class="relative f_xs_none m_xs_bottom_5"><a href="admin" class="tr_delay_hover color_light tt_uppercase"><b>Admin Login</b></a></li>
                                    <?php
                                }
                                ?>
								<li class="relative f_xs_none m_xs_bottom_5"><a href="contactus.php" class="tr_delay_hover color_light tt_uppercase"><b>Contact Us</b></a></li>
							</ul>
						</nav>
					
					</div>
				
				</section>
</header>