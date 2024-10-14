<?php
 include '../connection/header.php';
    $idU=$_GET['id'];
if($idU!=null){
    $select="SELECT * FROM `tbl_new` WHERE New_Id =$idU";
    $shSelect=$con->query($select);
                    $willShSl=$shSelect->fetch_assoc();
           $pName=$willShSl['New_Name'];
           $pCode=$willShSl['Product_Code'];
      $pDescription=$willShSl['New_Description'];
                $pPrice=$willShSl['New_Price'];
               $Img=$willShSl['New_Image'];
   
         
   
       
};?>
    
    
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<img src="img/<?php echo $Img ?>" alt="img">
<h1><?php echo $pName ?></h1>
<p><?php echo $pDescription ?></p>
<p><?php echo $pPrice ?></p>
