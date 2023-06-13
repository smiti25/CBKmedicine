<?php
require_once "medicinehelper.php";
$helper     = new MedicineHelper();
$user_id    = $_SESSION['fid'];
$coupon_code= $_GET['coupon_code'];
$total      = $_GET['total'];

$db = new Database();
$db->open();

$sql            = "SELECT * FROM `user_coupons` WHERE coupon_code='".$coupon_code."' AND status = 0";
$result         = $db->query($sql);
$row            = $db->fetchobject($result);
if($row)
{
    $sql = "UPDATE `user_coupons` SET `status` ='1' WHERE `id`=".$row->id;
    $db->query($sql);
    
    $discount       = $row->discount;
    $total_discount = $total*$discount/100;
    echo $total - $total_discount;die;
}
else
{
    echo $total;
}
?>