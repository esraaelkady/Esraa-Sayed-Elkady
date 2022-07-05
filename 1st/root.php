<?php

switch ($_POST['number']) {
    case $_POST['number']>0:
        $result=2**$_POST['number'];
        break;
    
    default:
        echo 'not valied';
        break;
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
            <div class="mx-auto col-10 mt-5">
                <h2 class="text-danger"> Calculate specific Root </h2>
            </div>
            <div class="mb-3 ">
                <label for="formGroupExampleInput" class="form-label"> Enter Number </label>
                <input name="number" type="number" class="form-control" id="formGroupExampleInput" placeholder="">
            </div>
            <div class="col-6 mx-auto"> 
            <button class="btn btn-danger col-12 mx-auto" type="submit"> GET RESULT </button>
            </div>
</form>
<div class=" col-6 mx-auto mt-5 alert alert-danger">
                    
                    <?php
                    echo $result ?? '  ' ; 
                    ?>
            </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>