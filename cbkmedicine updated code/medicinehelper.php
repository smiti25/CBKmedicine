<?php
error_reporting(0);
session_start();
require_once "inc/config.php";
require_once "inc/dbhelper.php";
 
class MedicineHelper
{
    function regUsers()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $db = new Database();
        $db->open();
        $msg='';
        
        $sql    = "SELECT * FROM `users` WHERE `username` ='".$username."'";
        $result = $db->query($sql);
        
        if($db->num_of_rows($result))
        {
            $msg = 'Username already exists.';
            return $msg;
        }
        
        $sql="INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `mobile`) 
              VALUES (NULL, '".$username."', '".$password."', '".$name."', '".$email."', '".$mobile."' );";
        $result=$db->query($sql);
        if($result)
        {
            $msg ='You successfully registered.'; 
        }
        else
        {
            $msg = 'Error Occured.';
        }
        return $msg; 
    }
    
    function checkUser()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $db = new Database();
        $db->open();
        $msg='';
        $sql="SELECT * FROM `users` WHERE username='".$username."' AND password='".$password."'";
        
       //echo $sql;die;
        $result=$db->query($sql);
        $row=$db->fetchobject($result);
        
        if($row)
        {
            $_SESSION['fid']        = $row->id;
            $_SESSION['fusername']  = $row->username;
           	echo "<script>window.location = 'index.php';</script>";
        }
        else
        {
            $msg='Sorry! Invalid Details.';
        }
        
        return $msg; 
    }

    
    function getUserInfo($id)
    {
        $db = new Database();
        $db->open();
        $msg='';
        $sql="SELECT * FROM `users` WHERE id='".$id."'";
        
       //echo $sql;die;
        $result=$db->query($sql);
        $row=$db->fetchobject($result);
        
        return $row;
    }
    
    
    public function getLatestProducts()
    {
        $category_id = $_REQUEST['category_id'];
        
        $extraSql = '';
        if($category_id)
        {
            $extraSql = ' AND a.category_id = '.$category_id;
        }
        
        $db     = new Database();
        $db->open();
        
        $sql    = "SELECT a.*, b.category_name FROM `products` as a JOIN `categories` as b ON a.category_id = b.id WHERE 1 ".$extraSql;
        $result = $db->query($sql);
        
        $html = '';
        
        if($db->num_of_rows($result))
        {
            while($row = $db->fetcharray($result))
            {
                $img    = "admin/productimages/".$row['image'];
                $html  .='<div class="product_item">
							<figure class="r_corners photoframe shadow relative hit animate_ftb long">
								<!--product preview-->
								<a href="products_detail.php?id='.$row['id'].'" class="d_block relative pp_wrap">
									<!--hot product-->
									
									<img src="'.$img.'" class="tr_all_hover" alt="" width="243" height="242">
									<span  class="button_type_5 box_s_none color_light r_corners tr_all_hover d_xs_none">View More</span>
								</a>
								<!--description and price of product-->
								<figcaption>
									<h5 class="m_bottom_10"><a href="#" class="color_dark">'.$row['product_name'].'</a></h5>
									
									<p class="scheme_color f_left f_size_large m_bottom_5 m_top_10">Rs. '.$row['cost'].'</p>
								    
									<a href="ordernow.php?product_id='.$row['id'].'" class="tr_delay_hover r_corners button_type_15 bg_scheme_color color_light f_right">Order Now</a>
                                    <div class="clearfix">	</div>
								</figcaption>
							</figure>
						</div>';
            }
        }
        else
        {
            $html .= '<div class="row clearfix">
							<div class="col-lg-8 col-md-8 col-sm-8 m_xs_bottom_30">
                                <div class="alert_box r_corners error m_bottom_10">
        
        		                <i class="fa fa-exclamation-triangle"></i><p> No Products Found</p>
        
                  	           </div>
                               <div class=" clearfix"></div>
                            </div>
                        </div><div class=" clearfix"></div>';
        }
        
        return $html;
    }
    
    function getProductinfo($id)
    {
        $db = new Database();
        $db->open();
        
        $sql    = "SELECT * FROM `products` WHERE `id`=".$id;
        $result = $db->query($sql);
        $result = $db->fetchobject($result);
        
        return $result;
    }
    
    function getCategoryName($id)
    {
        $db = new Database();
        $db->open();
        
        $sql    = "SELECT * FROM `categories` WHERE `id`=".$id;
        $result = $db->query($sql);
        $row    = $db->fetchobject($result);
        
        return $row->category_name;
    }
    
    function getCategoriesData()
    {
        $db = new Database();
        $db->open();
        
        $sql    = "SELECT * FROM `categories`";
        $result = $db->query($sql);
        $rows   = array();
        
        while($row = $db->fetcharray($result))
        {
            $rows[] = $row;
        }
        return $rows;
    }
    
 }

?>