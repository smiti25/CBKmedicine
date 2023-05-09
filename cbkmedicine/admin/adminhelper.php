<?php
 error_reporting(0);
 session_start();
 require_once "../inc/config.php";
 require_once "../inc/dbhelper.php";
 
 class AdminHelper
 {
    function checkUser()
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        
        $db = new Database();
        $db->open();
        $msg='';
        $sql="SELECT * FROM `admins` WHERE username='".$username."' AND password='".$password."'";
        
       //echo $sql;die;
        $result=$db->query($sql);
        $row=$db->fetchobject($result);
        
        if($row)
        {
            $_SESSION['aid']        = $row->id;
            $_SESSION['ausername']  = $row->username;
           	echo "<script>window.location = 'dashboard.php';</script>";
        }
        else
        {
            $msg='Sorry! Invalid Details.';
        }
        
        return $msg; 
    }
    
    static function getOrders()
    {
        $html = "";
        $data = array();
        $db = new Database();
        $db->open();
        
        $sql    = "SELECT a.*, b.product_name, c.name, c.mobile FROM `orders` as a JOIN `products` as b ON a.product_id= b.id JOIN `users` as c ON a.user_id = c.id ORDER BY a.id DESC";
        $result = $db->query($sql);
        
        if($result)
        {
        
            ?>
            <table class="table table-bordered">
            <tr>
                <th width="5%">Sr.No</th>
                <th>Product Name</th>
                <th>Order Total</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Status</th>
                <th>Remove</th>
            </tr>
            <?php
            if($result)
            {
                $i=1;
                while($row = $db->fetcharray($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $row['product_name'];?></td>
                        <td><?php echo $row['total'];?></td>
                        <td><?php echo $row['name'];?></td>
                        <td><?php echo $row['mobile'];?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><?php echo $row['city'];?></td>
                        <td><?php echo $row['state'];?></td>
                        <td style="text-align:center">
                        <?php
                        $status = $row['status'];
                        if($status)
                        {
                            ?>
                            <a href="orders.php?id=<?php echo $row['id']?>&task=status&status=0"><img src="../images/tick.png" alt="" /></a>
                            <?php
                        }
                        else
                        {
                            ?>
                            <a href="orders.php?id=<?php echo $row['id']?>&task=status&status=1"><img src="../images/publish_x.png" alt="" /></a>
                            <?php
                        }
                        ?>
                        </td>
                        <td style="width: 8%;"><a href="orders.php?id=<?php echo $row['id'];?>&task=remove">Remove</a></td>
                    </tr>
                    <?php
                    $i++;
                }
            }
            ?>
            </table>
            <?php   
        }
        else
        {
            ?>
            <p class="info">Orders not added yet.</p>
            <?php
        }   
    }
    
    static function updateOrderStatus()
    {
        $id     = $_GET['id'];
        $status = $_GET['status'];
        
        $db = new Database();
        $db->open();
        
        $sql    = "UPDATE `orders` SET status='".$status."' WHERE id=".$id;
        $result = $db->query($sql);
        
        if($status)
        {
            $sql2    = "SELECT a.*, b.product_name, c.name, c.mobile, c.email FROM `orders` as a 
                        JOIN `products` as b ON a.product_id= b.id 
                        JOIN `users` as c ON a.user_id = c.id WHERE a.id=".$id;
            $result2 = $db->query($sql2);
            $row=$db->fetchobject($result2);
        }
        else
        {
            $sql2    = "SELECT a.*, b.product_name, c.name, c.mobile, c.email FROM `orders` as a 
                        JOIN `products` as b ON a.product_id= b.id 
                        JOIN `users` as c ON a.user_id = c.id WHERE a.id=".$id;
            $result2 = $db->query($sql2);
            $row=$db->fetchobject($result2);
        
        }
    }
    
    static function getProducts()
    {
        $html = "";
        $data = array();
        $db = new Database();
        $db->open();
        
        $sql    = "SELECT a.*,b.category_name FROM `products` as a JOIN `categories` as b ON a.category_id= b.id ORDER BY a.id DESC";
        $result = $db->query($sql);
        
        if($result)
        {
        
            ?>
            <table class="table table-bordered">
            <tr>
                <th width="7%">ID</th>
                <th>Product Name</th>
                <th>Product Code</th>
                <th>Category</th>
                <th>Cost</th>
                <th style="width: 7%;">Edit</th>
                <th style="width: 7%;">Remove</th>
            </tr>
            <?php
            if($result)
            {
                while($row = $db->fetcharray($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['product_name'];?></td>
                        <td><?php echo $row['product_code'];?></td>
                        <td><?php echo $row['category_name'];?></td>
                        <td><?php echo $row['cost'];?></td>
                        <td style="width: 8%;"><a href="addproduct.php?id=<?php echo $row['id'];?>">Edit</a></td>
                        <td style="width: 8%;"><a href="products.php?id=<?php echo $row['id'];?>&task=remove">Remove</a></td>
                    </tr>
                    <?php
                }
            }
            ?>
            </table>
            <?php   
        }
        else
        {
            ?>
            <p class="info">Products not added yet.</p>
            <?php
        }   
    }
    
    function removeProduct($id)
    {
        $db = new Database();
        $db->open();
        
        $sql    = "DELETE FROM `products` WHERE id=".$id;
        $result = $db->query($sql);
        
        if($result)
        {
            return '<div class="successmsg alert">Product deleted successfully.</div>';
        }
        else
        {
            return '<div class="errormsg alert">Product not deleted successfully.</div>';
        }   
    }
    
    function removeOrder($id)
    {
        $db = new Database();
        $db->open();
        
        $sql    = "DELETE FROM `orders` WHERE id=".$id;
        $result = $db->query($sql);
        
        if($result)
        {
            return '<div class="successmsg alert">Order deleted successfully.</div>';
        }
        else
        {
            return '<div class="errormsg alert">Order not deleted successfully.</div>';
        }   
    }
    
    static function getCategories()
    {
        $html = "";
        $data = array();
        $db = new Database();
        $db->open();
        
        $sql    = "SELECT * FROM `categories`";
        $result = $db->query($sql);
        
        if($result)
        {
        
            ?>
            <table class="table table-bordered">
            <tr>
                <th width="10%">ID</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Remove</th>
            </tr>
            <?php
            
            if($result)
            {
                while($row = $db->fetcharray($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['category_name'];?></td>
                        <td style="width: 8%;"><a href="addcategory.php?id=<?php echo $row['id'];?>">Edit</a></td>
                        <td style="width: 8%;"><a href="categories.php?id=<?php echo $row['id'];?>&task=remove">Remove</a></td>
                    </tr>
                    <?php
                }
            }
            
            ?>
            </table>
            <?php   
        }
        else
        {
            ?>
            <p class="info">Categories not added yet.</p>
            <?php
        }     
    }
    
    function removeCategory($id)
    {
        $db = new Database();
        $db->open();
        
        $sql    = "DELETE FROM `categories` WHERE id=".$id;
        $result = $db->query($sql);
        
        if($result)
        {
            return '<div class="successmsg alert">Category deleted successfully.</div>';
        }
        else
        {
            return '<div class="errormsg alert">Category not deleted successfully.</div>';
        }   
    }
    
    static function addCategory()
    {
        $id = $_POST['id'];
        $category_name=$_POST['category_name'];
      
        $db=new Database();
        $db->open();
        $sql = '';
        if($id)
        {
             $sql = "UPDATE `categories` SET `category_name` ='".$category_name."' WHERE `id`=".$id;
        }
        else
        {
            $sql = "INSERT INTO `categories` (`id`, `category_name`) VALUES (NULL, '".$category_name."');";
        }
    
        $result=$db->query($sql);
        
        return $result;       
    }
    
    static function getCategoryList($selected = '')
    {
        $db = new Database();
        $db->open();
        
        $sql = "SELECT * FROM `categories`";
       
        $result = $db->query($sql);
        
        $html = '';
        while($row = $db->fetcharray($result))
        {
            $sel = "";
            if($selected == $row['id'])
            {
                $sel = "selected='selected'";
            }
            
            $html .= '<option value="'.$row['id'].'" '.$sel.'>'.$row['category_name'].'</option>';
            
        }
        
        return $html;
        
    }
    
    static function getProductSelectList($selected = '')
    {
        $db = new Database();
        $db->open();
        
        $sql = "SELECT * FROM `products`";
       
        $result = $db->query($sql);
        
        $html = '';
        while($row = $db->fetcharray($result))
        {
            $sel = "";
            if($selected == $row['id'])
            {
                $sel = "selected='selected'";
            }
            
            $html .= '<option value="'.$row['id'].'" '.$sel.'>'.$row['product_name'].'</option>';
            
        }
        
        return $html;
        
    }
    
    
    static function addProduct()
    {
        
        $newfilename = "";
        $imagefile = $_POST['imagefile'];
        if($_FILES['image']['type']=='image/jpeg' || $_FILES['image']['type']=='image/gif' || $_FILES['image']['type']=='image/png')
        {
            if($_FILES['image']['error']>0)
            {
                echo "Error :".$_FILES['image']['error'];
            }        
            else
            {
                $imagepath="productimages/";
                
                if(!is_dir($imagepath))
                {
                    mkdir($imagepath,0777);
                }
                
                if(is_uploaded_file($_FILES['image']['tmp_name']))
                {
                    $filename  = $_FILES['image']['name'];
                    $extension = end(explode(".",$filename)); 
                    $newfilename = "product_".time().".".$extension;
                   
                    move_uploaded_file($_FILES['image']['tmp_name'],$imagepath.$newfilename); 
                }
            }
        }
        else
        {
            $newfilename=$imagefile;
        }
        
        $id = $_POST['id'];
        $category_id = $_POST['category_id'];
        $product_name = $_POST['product_name'];
        $product_code = $_POST['product_code'];
        $product_desc = $_POST['product_desc'];
        $cost         = $_POST['cost'];
        
        $db=new Database();
        $db->open();
        $sql= '';
        if($id)
        {
            $sql="UPDATE `products` SET `product_name` = '".$product_name."',`product_code` = '".$product_code."',`product_desc` = '".$product_desc."',`image` ='".$newfilename."',`category_id`='".$category_id."',`cost`='".$cost."' WHERE `id`=".$id;
        }
        else
        {
            $sql="INSERT INTO `products` (`id`, `product_name`,`product_code`,`product_desc`,`image`,`category_id`,`cost`) VALUES (NULL, '".$product_name."','".$product_code."','".$product_desc."','".$newfilename."','".$category_id."','".$cost."');";
        }
        $result=$db->query($sql);
        
        return $result;       
    }
    
 }
?>