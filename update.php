


<?php
     include("config.php");
     $id = $_GET['id'];
     $r= mysqli_query($conn,"select * from product where id = $id");
     $data = mysqli_fetch_array($r);
    //  header("location:products.php")
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&family=Great+Vibes&family=Marhey:wght@300;400;600&family=Noto+Kufi+Arabic:wght@300;400;900&family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">    <title>Document</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    
<div class="contain">
    <h1>موقع تسويقي اونلاين</h1>

    <form method="POST" action="up.php" enctype="multipart/form-data">
  <div class="mb-3">
    <label class="form-label"></label><?php echo  "المنتج رقم  " . "$data[id]"?> </label>
    <input type="text"  style="display:none" class="form-control" value= <?php echo " $data[id]"; ?> name="id" ></div>
  <div class="mb-3">
    <label class="form-label">اسم المنتج </label>
    <input type="text" class="form-control" value=<?php echo " $data[name]"; ?> name="name" ></div>
  <div class="mb-3">
    <label class="form-label">سعر المنتج</label>
    <input type="text" class="form-control" value=<?php echo " $data[price]" ;?> name="price">
  </div>
 
  <div class="mb-3">
    <label class="form-label">تحديث الصوره </label>
    <input type="file" class="form-control" id="file" value=<?php echo "  $data[image]" ;?> name="image">
  </div>
 <div class="btn d-flex">
  <button type="submit" name="update" class="btn btn-primary">تعديل المنتج</button>
  <!-- <button type="submit" name="edit" class="btn btn-info">تعديل  المنتج</button>
  <button type="submit" name="del" class="btn btn-danger">حذف المنتج </button> -->
  </div>
  <!-- <a href="products.php">عرض كل المنتجات</a> -->
</form>
</div>



</body>
</html>

