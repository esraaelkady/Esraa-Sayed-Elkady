<?php

?>



<!doctype html>
<html lang="en">
  <head>
    <title>supermarket</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <section class="sec-1">
        <div class="container">
            <div class="row">
                <div class="col-12  ">
                    <h1 class="mt-5 text-center text-primary">super market </h1>
                    <div class="col-8 offset-1">
                        <form method="post">
                        <div class="form-group">
                                <label for="user name">User name</label>
                                <input type="text" name="name" value="<?= $_POST['name'] ?? ""; ?>" id="name_gust" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                           

                               
                            </div>
                            <div class="form-group">
                                <label for="City">City</label> <br>
                                <select class="mt-3 form-control" name='city'  >
                                  <option>Your city</option>
                              
                                <option value="Cairo" <?php if($_POST){ if($_POST['city']=='Cairo'){echo 'selected';}} ?> >Cairo</option>
                                 <option value="Giza" <?php if($_POST){ if($_POST['city']=='Giza'){echo 'selected';}} ?> >Giza</option>
                                  <option  value="Alex"<?php if($_POST){ if ($_POST['city']=='Alex'){echo 'selected';}} ?>>Alex</option>
                                  <option  value="Other"<?php if($_POST){if($_POST['city']=='Other'){echo 'selected';}} ?>>Other</option>
                        <?php
                        if($_POST){
                          if($_POST['city']=='Cairo'){
                            $delivery=0;
                          }elseif($_POST['city']=='Giza'){
                            $delivery=30;
                          }elseif($_POST['city']=='Alex'){
                            $delivery=50;
                          }
                          else{
                            $delivery=100;
                          }
                        }
                    ?>
                                </select>
                                
                            </div>
                            <div class="form-group">
                                <label for="number of products"> number of products</label>
                                <input type="number" name=" products" value="<?=   $_POST['products'] ?? ""; ?>" id=" products" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                                
                            </div>

                            <button class="btn btn-outline-dark rounded btn-sm mb-5 col-8" name="btn">Search</button>

                            <?php
                    if ($_POST['products'] ?? "" > 0) {
                      echo "<div class='col-12'>
                            <table class='table table-success '>
                                <thead>
                                  <tr>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Sub total</th>
                                  
                                  </tr>
                                </thead>
                                <tbody>";
                      $total = 0;
                      for ($i = 0; $i < $_POST['products']; $i++) {

                   
                     $massage= '<tr>
                     <td><input type="text" name="productName[]" ></td>
                     <td><input type="number" name="price[]" value="<?= $_POST["price"][$i] ?? "" ?></td>
                     <td><input type="number" name="quantity[]" value="<?= $_POST["quantity"][$i] ?? "" ?></td>';
    
                  
                   
                 
                   echo $massage;


                   if (isset($_POST['price'][$i])) {

                    $subTotal = $_POST['price'][$i] * $_POST['quantity'][$i];
                    $total += $subTotal;
                    if ($total < 1000) {
                      $discount = 0;
                      $totalAfterDiscount = $total + $discount;
                    } elseif ($total > 1000 && $total < 3000) {
                      $discount = 0.10;
                      $totalAfterDiscount = $total - ($total * $discount);
                    } elseif ($total > 3000 && $total < 4500) {
                      $discount = 0.15;
                      $totalAfterDiscount = $total - ($total * $discount);
                    } else {
                      $discount = 0.20;
                      $totalAfterDiscount = $total - ($total * $discount);
                    }
                  }
                }
              }
                    

                  

          
         
                      
                    

                 
                    ?>

    <?php
                        if ($_POST['products'] ?? "" > 0) {

                          echo " <button class='btn btn-primary mb-4 mt-2 form-control'>Enter</button>
                            <br>";
                        }
                        if (isset($total) && $total > 0) {
                        ?>

                          <div class="col-12 alert alert-success">
                            <h3>Client Name : <?= $_POST['name'] ?? "" ?> .</h3>
                            <h3>City : <?= $_POST['city'] ?? "" ?> .</h3>
                            <h3>Total All Product : <?= $total ?? "" ?> EG .</h3>
                            <h3>Your Discount : <?= $discount * 100 ?> % . </h3>
                            <h3>Total After Discount : <?= $totalAfterDiscount ?? "" ?> EG .</h3>
                            <h3>Delivery : <?= $delivery ?? "" ?> EG .</h3>
                            <h3>Net Total : <?= $totalAfterDiscount + $delivery ?? "" ?> EG .</h3>
                          </div>

                        <?php
                        } ?>

                           
                        </form>
                   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>




<!-- 
<div class="container-fluid">
<div class="row ">
  <div class="col-3">
  <form class="text-center" method="post">
    <div class="form-group "text-center">
    <label for="Product Name">Product Name</label>
    <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="proName" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    
</div>
  </div>
  <div class="col-3">
  <div class="form-group ">
  <label for="Price">Price</label>
  <input type="text" name="priceO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
  <input type="text" name="priceT" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
  <input type="text" name="priceR" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
  
</div>
  </div>
  <div class="col-3">
   
    <div class="form-group">
    <label for=" Quantities"> Quantities</label>
    <input type="text" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    <input type="text" name="quanO" id="city" class="form-control mb-2" placeholder="" aria-describedby="helpId">
    
</div>
  </div>
  <div class="col-3">
  

</form>
<button class="btn btn-outline-dark rounded btn-sm mb-5 col-8">Search</button>
</div>
</div>


</div>'; -->