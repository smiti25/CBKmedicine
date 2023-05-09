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
        
       <script type="text/javascript">
        function validate_form()
        {
            var category_id  = document.getElementById("category_id").value;
            var product_name = document.getElementById("product_name").value;
            var product_code = document.getElementById("product_code").value;
            var product_desc = document.getElementById("product_desc").value;
            var cost         = document.getElementById("cost").value;
            
            if(category_id=='')
            {
                alert("Please Select Category.");
                return false;
                
            }
            else if(product_name=='')
            {
                alert("Please enter Product Name.");
                return false;
                
            }
            else if(product_desc=='')
            {
                alert("Please enter Product Description.");
                return false;
                
            }
            else if(cost=='')
            {
                alert("Please enter Product Cost.");
                return false;
                
            }
        }
        </script>
        
        <?php
        require_once "adminhelper.php";
        
        $msg = '';
        $data = array();
        $id = $_REQUEST['id'];
        
        $helper = new AdminHelper();
        
        if($_POST)
        {
            $result = $helper->addProduct();
            
            $ext = ($id) ? "updated" : "added";
            
            if($result)
            {
                $msg = '<div class="successmsg alert">Product '.$ext.' successfully.</div>';
            }
            else
            {
                $msg = '<div class="errormsg alert">Product not '.$ext.' successfully.</div>';
            }
        }
        
        
        if($id)
        {
            $db = new Database();
            $db->open();
            
            $sql = "SELECT * FROM `products` WHERE id=".$id;
            $result = $db->query($sql);
            $data = $db->fetcharray($result);
        } 
        ?>
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

						<li><a href="#" class="default_t_color">Add Product</a></li>

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

									<h2 class="tt_uppercase color_dark m_bottom_25">Add Product</h2>
                                    <?php
                                      if($msg!='')
                                      {
                                         echo $msg;
                                      }
                                      ?>

									<form method="post" onsubmit="return validate_form();"  enctype="multipart/form-data">

										<ul>

											<li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Category</label>

													<select name="category_id" id="category_id" class="full_width r_corners">
                                                        <option value="">Select Category</option>
                                                        <?php
                                                            echo $helper->getCategoryList($data['category_id']);
                                                        ?>
                                                    
                                                    </select>

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Product Name</label>

													<input type="text" id="product_name" name="product_name" class="full_width r_corners" value="<?php echo $data['product_name'];?>"/>

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Product Code</label>

													<input type="text" id="product_code" name="product_code" class="full_width r_corners" value="<?php echo $data['product_code'];?>"/>

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Product Desc</label>

													<textarea id="product_desc" name="product_desc" class="full_width r_corners textarea"><?php echo $data['product_desc'];?></textarea>

												</div>

											</li>
                                            
                                            <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="d_inline_b m_bottom_5">Product Image</label>

													<input type="file" name="image" value="" id="image" class="file"/>

												</div>

											</li>
                                            
                                             <li class="clearfix m_bottom_15">

												<div class="f_left half_column">

													<label for="cf_name" class="required d_inline_b m_bottom_5">Product cost</label>

													<input type="text" id="cost" name="cost" class="full_width r_corners" value="<?php echo $data['cost'];?>"/>

												</div>

											</li>
                                            
                                            
                                            
											<li>
                                                <input type="hidden" name="imagefile" value="<?php echo $data['image'];?>" />
                                                <input type="hidden" name="id" value="<?php echo $id;?>" />
												<button class="button_type_4 bg_light_color_2 r_corners mw_0 tr_all_hover color_dark">Save Product</button>

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