<?php
require_once "medicinehelper.php";
$helper     = new MedicineHelper();
$username   = $_POST['username'];
$password   = $_POST['password'];
$product_id = $_POST['product_id'];

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
   	echo "<script>window.location = 'ordernow.php?product_id=".$product_id."';</script>";
}
else
{
    //$msg='Sorry! Invalid Details.';
    echo "<script>window.location = 'ordernow.php?product_id=".$product_id."&error=1';</script>";
}
?>