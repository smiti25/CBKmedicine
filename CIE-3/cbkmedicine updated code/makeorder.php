<?php
require_once "medicinehelper.php";
$helper     = new MedicineHelper();
$user_id    = $_SESSION['fid'];
$email      = $_POST['email'];
$address    = $_POST['address'];
$product_id = $_POST['product_id'];
$city       = $_POST['city'];
$state      = $_POST['state'];
$zip_code   = $_POST['zip_code'];
$payment_method = $_POST['payment_method'];
$notes          = $_POST['notes'];
$total          = $_POST['total'];
    
$db = new Database();
$db->open();

$sql = "INSERT INTO `orders` (`id`, `product_id`, `user_id`, `address`, `city`, `state`, `zip_code`, `payment_method`, `notes`, `total`) VALUES 
        (NULL, '".$product_id."', '".$user_id."', '".$address."', '".$city."', '".$state."', '".$zip_code."', '".$payment_method."', '".$notes."', '".$total."');";
$result   = $db->query($sql);
$order_id = $db->insertID();

if($order_id)
{
    $coupon_code = strtoupper(substr(uniqid(),9,13).mt_rand(111,999));
    $discount    = mt_rand(1, 10);
    
    $sql = "INSERT INTO `user_coupons` (`id`, `coupon_code`, `discount`, `user_id`) VALUES 
        (NULL, '".$coupon_code."', '".$discount."', '".$user_id."');";
    $db->query($sql);
    
    $msg = "Enjoy ".$discount."% off on new Orders. Use Coupon Code ".$coupon_code." when you order.";
    
    
   	echo "<script>window.location = 'thankyou.php?order_id=".$order_id."&msg=".$msg."';</script>";
}
else
{
    echo "<script>window.location = 'orderfailed.php';</script>";
}
?>