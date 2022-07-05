<?php
if($_POST){
    $unit = $_POST["Unit"];
    $vat = "20%";

    $condition1= $unit * 0.50 ; 
    $condition2= $unit * 0.75 ; 
    $condition3=  $unit *1.20 ; 
    $condition4= $unit * 1.50 ; 

    
    $vatAfter = 0.2* $condition1; 

  if($unit <="50"){
      $massage =  '<div>';
      $massage .= '<h6>Unit price 0.5</h6>';
      
      $massage .= '<h6>price after unit price </h6>'; 
      $massage .=  $condition1;
      $massage .= '<h6> Vat is </h6>'; 
      $massage .= $vat;
    
      $massage .= '<h6>total price </h6>'; 
      $massage .= $vatAfter ;
      $massage .=  '</div>';

  }elseif($unit <="100"){
      $massage =    '<div>';
      $massage .= '<h6>Unit price 0.75</h6>';
      
      $massage .= '<h6>price after unit price </h6>'; 
      $massage .=  $condition2;
      $massage .= '<h6> Vat is </h6>'; 
      $massage .= $vat;
    
      $massage .= '<h6>total price </h6>'; 
      $massage .= $vatAfter ;
      $massage .=  '</div>';
  }elseif($unit >"100"){
      $massage =    '<div>';
      $massage .= '<h6>Unit price 1.20</h6>';
      
      $massage .= '<h6>price after unit price </h6>'; 
      $massage .=  $condition3;
      $massage .= '<h6> Vat is </h6>'; 
      $massage .= $vat;
    
      $massage .= '<h6>total price</h6>'; 
      $massage .= $vatAfter ;
      $massage .=  '</div>';
  }elseif($unit >"200"){
      $massage =    '<div>';
      $massage .= '<h6>Unit price 1.50</h6>';
      
      $massage .= '<h6>price after unit price </h6>'; 
      $massage .=  $condition2;
      $massage .= '<h6> Vat is </h6>'; 
      $massage .= $vat;
    
      $massage .= '<h6>total price</h6>'; 
      $massage .= $vatAfter ;
      $massage .=  '</div>';
  }
  


}
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <form class="col-6 mx-auto " method="post" action=" "> 
            <div class="mx-auto col-6 mt-5">
                <h2 class="text-danger"> Negative or Positive </h2>
            </div>
            <div class="mb-3 ">
                <label for="formGroupExampleInput" class="form-label"> Electricity </label>
                <input name="unit" type="number" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="col-6 mx-auto"> 
            <button class="btn btn-danger col-12 mx-auto" type="submit"> View Details  </button>
            </div>
</form>
<div class=" col-6 mx-auto mt-5 alert alert-danger">
                    
                    <?php
                    echo $massage ?? '  ' ; 
                    
                    
                    ?>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>