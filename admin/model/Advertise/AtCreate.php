<?php
    include '../../connection/conect.php';


    if(isset($_POST['btnDissave'])){
$DProductName=$_POST['DName'];
$DDescription=$_POST['DClass'];
$img_name=$_FILES['upload']['name'];
$tmp=$_FILES['upload']['tmp_name'];
$path='../../Upload/DiscountPrd/';
move_uploaded_file($tmp,$path.$img_name);



$DQL="INSERT INTO `tbl_menu`(`Menu_Id`, `Menu_Name`, `Menu_Class`) VALUES (Null,'$DProductName','$DDescription')";
$res=$con->query($DQL);
header('location:MenuInterface.php');
    };


    if(isset($_GET['action'])=='delete'){
$idD=$_GET['id'];
$delete="DELETE FROM `tbl_menu` WHERE Menu_Id =$idD";
$show=$con->query($delete);
header('location:MenuInterface.php');
    };

    if(isset($_POST['btnDisupdate'])){
        $DisId=$_POST['MenuId'];
        $DisProductName=$_POST['MenuName'];
        $DisDescription=$_POST['MenuDescription'];
        $Image=$_POST['upload'];
        $update="UPDATE `tbl_menu` SET `Menu_Name`='$DisProductName',`Menu_Class`='$DisDescription' WHERE Menu_Id=$DisId";
        $excute=$con->query($update);
        header('location:MenuInterface.php');}


?>