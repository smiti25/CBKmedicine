<?php
require_once "medicinehelper.php";
$helper     = new MedicineHelper();
$product_id = $_POST['product_id'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$name       = $_POST['name'];
$mobile     = $_POST['mobile'];
$email      = $_POST['email'];
$db = new Database();
$db->open();
$msg='';
$sql="INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `mobile`) 
      VALUES (NULL, '".$username."', '".$password."', '".$name."', '".$email."', '".$mobile."' );";
$result=$db->query($sql);
if($result)
{
    $sql="SELECT * FROM `users` WHERE username='".$username."' AND password='".$password."'";
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
        echo "<script>window.location = 'ordernow.php?product_id=".$product_id."&error=1';</script>";
    }
}
else
{
    echo "<script>window.location = 'ordernow.php?product_id=".$product_id."&error=1';</script>";
}

?>