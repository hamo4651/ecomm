<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<link rel="stylesheet" href="style.css">


<div class="container  text-center">
    <div class="row">

    <?php
     include("config.php");

      $r= mysqli_query($conn,"select * from product ");
      while ($row=mysqli_fetch_array($r)) {

        echo "
        
        
        <div class='col-4 mb-3 mt-5'>

          <div class='card' style='width: 18rem;'>
            <img src=$row[image] class='card-img-top' alt='...'>
            <div class='card-body'>
            <h5 class='card-title'>$row[name]</h5>
            <p class='card-text'>$row[price]</p>
            <a href='update.php ? id=$row[id]' class='btn btn-primary'>تعديل المنتج </a>
            <a href='delete.php ? id=$row[id]' class='btn btn-danger'>حذف المنتج </a>
            </div>
            </div>


      </div>
        
        
        
        
        
        
        ";

    }

     ?>



     
      
    </div>
</div>