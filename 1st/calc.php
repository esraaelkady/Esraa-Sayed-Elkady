<?php
if($_POST){
    $num_one = $_POST["firstnumber"];
    $num_two = $_POST["secondnumber"];
    $operator = $_POST["operat"];
    $add_num =   $num_one +   $num_two ;
    $mins_num = $num_one -   $num_two ;
    $sub_num = $num_one *   $num_two ;
    $div_num = $num_one /   $num_two ;
    $mal_num =$num_one %   $num_two ;
    
    if($operator == "+"){
       $result = "<div class='alert alert-danger'>
       the result EQual $add_num
   </div>";
    }elseif($operator == "-"){
       $result = "<div class='alert alert-danger'>
       the result EQual $mins_num
   </div>";
    }elseif($operator == "*"){
       $result = "<div class='alert alert-danger'>
       the result EQual $sub_num 
   </div>";
    }elseif($operator == "/"){
       $result = "<div class='alert alert-danger'>
       the result EQual  $div_num
   </div>";
   }elseif($operator == "%"){
       $result = "<div class='alert alert-danger'>
       the result EQual $mal_num
   </div>";
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
                <h2 class="text-danger"> Your Calculator </h2>
            </div>
            <div class="mb-3 ">
                <label for="formGroupExampleInput" class="form-label">First Number </label>
                <input name="firstnumber" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="form-group">
                           
                           <select name="operat" class="w-50 text-center">
                           <option > Your Opreator</option>
                               <option value="+">+</option>
                               <option value="-">-</option>
                               <option value="*">*</option>
                               <option value="/">/</option>
                               <option value="%">%</option>
                           </select>
                            
                          </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Second Number </label>
                <input name="secondnumber" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="col-6 mx-auto"> 
            <button class="btn btn-danger col-12 mx-auto" type="submit"> GET RESULT </button>
            </div>
        </form>
        
            <div class=" col-6 mx-auto mt-5 alert alert-danger">
                    
                    
            <?PHP echo $result ?? "" ;?>
            </div>
            
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>