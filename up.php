<?php
include("config.php");

if (isset($_POST['update'])) {
$name =$_POST['name'];
$id =$_POST['id'];
$price =$_POST['price'];
$image =$_FILES['image'];

$location = $image['tmp_name'];
$image_name =$image['name'];
$newlocation = "images/".$image_name;


    
 move_uploaded_file($location,$newlocation);
 mysqli_query($conn,"update product set name='$name' , price='$price' , image='$newlocation' where id = $id");
// if(move_uploaded_file($location,$newlocation)) {
//     echo "<script>console.log('تم اضافه المنتج بنجاح')</script>";}
//     else echo "<script>alert( 'لم يتم اضافه المنتج' )</script>";


    header('location:products.php');
}






?>