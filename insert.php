<?php
include("config.php");

if (isset($_POST['add'])) {
$name =$_POST['name'];
$price =$_POST['price'];
$image =$_FILES['image'];

$location = $image['tmp_name'];
$image_name =$image['name'];
$newlocation = "images/".$image_name;


    
 move_uploaded_file($location,$newlocation);
mysqli_query($conn,"insert into product (name,price,image) values('$name','$price','$newlocation')");
// if(move_uploaded_file($location,$newlocation)) {
//     echo "<script>console.log('تم اضافه المنتج بنجاح')</script>";}
//     else echo "<script>alert( 'لم يتم اضافه المنتج' )</script>";


    header('location:index.php');
}






?>