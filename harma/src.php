<?php

if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM `producttb` WHERE product_name LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "productdb");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" href="css/styles.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
       
    </head>
    <body>
    <div class="container py-5">
    <div class="row mt-4">
     <!-- populate table from mysql database -->
<?php 
 if($search_result->num_rows> 0){
    while($row = mysqli_fetch_array($search_result)){

?>
    
 <div class="col-md-5">
      <div class="card" style="width: 15rem";> 
      
    <?php
echo"<img  src=".$row['product_image'].">"
?>


     <div class="card-body">
      <h2 class="card-title" > &nbsp;<?php echo $row['product_name']?></h2>
             </div>
              <li class="list-group-item">৳&nbsp;<?php echo $row['product_price']?></li>
              <a href="product.php" class="btn btn-primary">Buy Now >></a>

          </div><br>
      </div> 
      
<?php

    }

 }
?>       
    </body>
</html>