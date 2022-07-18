        <?php

session_start();  


    


        if($_SERVER['REQUEST_METHOD'] === 'POST'){
        
          $_SESSION["cleanLiness"]= $_POST['cleanLiness'];
          $_SESSION["prices"]= $_POST['prices'];
          $_SESSION["nursing"]= $_POST['nursing'];
          $_SESSION["doctors"]= $_POST['doctors'];
          $_SESSION["calmness"]= $_POST['calmness'];

       
       
            header('location:Result.php');

        }


        ?>




        <!doctype html>
        <html lang="en">

        <head>
          <title>Review</title>
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
                  <h1 class="mt-5 text-center text-danger">Survay </h1>
                  <div class="col-12 ">
                    <form action  method="post">
                      <table class="table table-striped">
                        <thead>
                          <tr>
                            <th >Question</th>
                            <th>Bad</th>
                            <th>Good</th>
                            <th>Very good</th>
                            <th>Excllent</th>
                          </tr>
                        </thead>
                        <tbody>
            <tr>
              <th scope="row">Are you satisfied with the level of cleanliness?</th>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="cleanLiness" type="radio" value="bad" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
                          
              <input class="form-check-input" name="cleanLiness" type="radio" value="good" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="cleanLiness" type="radio" value="verygood" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="cleanLiness" type="radio" value="excllent" id="defaultCheck1">
            </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Are you satisfied with the prices of services?</th>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="prices" type="radio" value="bad" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="prices" type="radio" value="good" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="prices" type="radio" value="verygood" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="prices" type="radio" value="excllent" id="defaultCheck1">
            </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Are you satisfied with the nursing service?</th>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="nursing" type="radio" value="bad" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="nursing" type="radio" value="good" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="nursing" type="radio" value="verygood" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="nursing" type="radio" value="excllent" id="defaultCheck1">
            </div>
              </td>
            </tr>

            <tr>
              <th scope="row">Are you satisfied with the level of doctors?</th>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="doctors" type="radio" value="bad" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="doctors" type="radio" value="good" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="doctors" type="radio" value="verygood" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="doctors" type="radio" value="excllent" id="defaultCheck1">
            </div>
              </td>
            </tr>
            <tr>
              <th scope="row">Are you satisfied with the calmness of hospital?</th>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="calmness" type="radio" value="bad" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="calmness" type="radio" value="good" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="calmness" type="radio" value="verygood" id="defaultCheck1">
            </div>
              </td>
              <td>
              <div class="form-check">
              <input class="form-check-input" name="calmness" type="radio" value="excllent" id="defaultCheck1">
            </div>
              </td>
            </tr>
            <?PHP echo $massage ?? ""; ?>
            <button class="btn btn-outline-dark rounded btn-sm mb-5" name="add">Result</button>
                        </tbody>
                        
                    </form>
                   
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </section>
          
          <!-- <button class="btn btn-outline-dark rounded btn-sm mb-5 w-50  bg-primary text-light">Submit</button> -->
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        </body>

        </html>