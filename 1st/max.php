<?php
if($_POST){
    if($_POST['firstnumber'] > $_POST['secondnumber'] and $_POST['firstnumber'] >$_POST['thirdnumber']){
        $maxresult='Max Number is the first number';
    }
    elseif($_POST['secondnumber'] > $_POST['firstnumber'] and $_POST['secondnumber'] > $_POST['thirdnumber']){
        $maxresult='Max Number is the second number';}
    elseif($_POST['thirdnumber'] > $_POST['firstnumber'] and $_POST['thirdnumber'] > $_POST['secondnumber']){
        $maxresult='Max Number is the third number';}
    }
    if($_POST){
        if($_POST['firstnumber'] < $_POST['secondnumber'] and $_POST['firstnumber'] < $_POST['thirdnumber']){
            $miniresult='Mini Number is the first number';
        }
        elseif($_POST['secondnumber'] < $_POST['firstnumber'] and $_POST['secondnumber'] < $_POST['thirdnumber']){
            $miniresult='Mini Number is the second number';}
        elseif($_POST['thirdnumber'] < $_POST['firstnumber'] and $_POST['thirdnumber'] < $_POST['secondnumber']){
            $miniresult='Mini Number is the third number';}
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
                <h2 class="text-danger"> Max And Mini</h2>
            </div>
            <div class="mb-3 ">
                <label for="formGroupExampleInput" class="form-label">First Number </label>
                <input name="firstnumber" type="text" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Second Number </label>
                <input name="secondnumber" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Third Number</label>
                <input name="thirdnumber" type="text" class="form-control" id="formGroupExampleInput2" placeholder="">
            </div>
            <div class="col-6 mx-auto"> 
            <button class="btn btn-danger col-12 mx-auto" type="submit"> GET RESULT </button>
            </div>
        </form>
        
            <div class=" col-6 mx-auto mt-5 alert alert-danger">
                    
                    <?php
                    echo $maxresult ?? '  ' ; 
                    
                    echo $miniresult ?? '  ' ;
                    ?>
            </div>
            
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>