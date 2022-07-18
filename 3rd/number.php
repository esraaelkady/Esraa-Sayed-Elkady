<?php   
SESSION_start();



if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $_SESSION ["phone"]=$_POST['phone'];
        
    header('location:Review.php');
    
}



?>


<!doctype html>
<html lang="en">
  <head>
    <title>Hospital</title>
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
                        <h1 class="mt-5 text-center text-primary" name="hos">Hospital </h1>
                        <div class="col-4 offset-4">
                            <form  method="post">
                            <div class="form-group">
                                
                                <input type="number" name="phone" id="num" class="form-control mb-2" placeholder="" aria-describedby="helpId">
                                <button class="btn btn-outline-dark rounded btn-sm mb-5">Phone</button>
                            </div>
                           
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