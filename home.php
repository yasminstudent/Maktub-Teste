<?php 
  session_start();
  $rsPlanos = $_SESSION['rsPlanos'];
  //print_r($rsPlanos[1]);
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>
      Home | Maktub Seguros
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    
    <?php
        require_once("header.php");
    ?>

    <!-- SLIDE -->
    <section id="home" class="d-flex bg-blue-gradient"><!--home -->
      <div class="container align-self-center"><!--container -->
        <div class="row"><!--row -->
          <div class="col-md-12">
            <div id="carousel-maktub" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner"><!--Inner -->

                <div class="carousel-item active">
                  <div class="row">
                    <div class="col-md-6 d-flex align-self-center 
                          justify-content-center flex-column">
                      <h1 class="display-4 text-white ml-5">Lorem inpsum</h1>
                      <p class="text-white w-85 ml-auto text mt-2 text-left"> 
                        Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry. Lorem Ipsum has 
                        been the industry's standard dummy 
                      </p>
                    </div>
                    <div class="col-md-6 ">
                      <img src="images/slide1.png" id="img-slide1" />
                    </div>
                  </div>
                </div>
                <div class="carousel-item ">
                  <div class="row">
                    <div class="col-md-6 d-flex align-self-center 
                          justify-content-center flex-column">
                      <h1 class="display-4 text-white ml-5">The typesetting</h1>
                      <p class="text-white w-85 ml-auto text mt-2 text-left"> 
                        Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry. Lorem Ipsum has 
                        been the industry's standard dummy 
                      </p>
                    </div>
                    <div class="col-md-6 ">
                      <img src="images/slide2-removebg-preview.png" id="img-slide2" />
                    </div>
                  </div>
                </div>
                
              </div><!--/Inner -->

              <!-- Controles -->
              <a href="#carousel-maktub" class="carousel-control-prev" data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>
              <a href="#carousel-maktub" class="carousel-control-next" data-slide="next">
                <i class="fas fa-angle-right fa-3x"></i>
              </a>
            </div>
          </div>
        </div><!--/row -->
      </div><!--/container -->
    </section><!--/home -->

    <!-- SOBRE A EMPRESA -->
    <section>
      <div class="container pb-3">
        <div id="rectangle-on-top" class="ml-auto mr-auto bg-blue-dark"></div>
        <h1 class="text-capitalize text-blue mt-3 title">Conheça a nossa empresa</h1>
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="images/unnamed.png" id="home-sobre"  />
          </div>
          <div class="col-md-6 text-center text-gray">
            <p class="text ml-auto mr-auto w-75">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the 
              industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and 
              scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release 
              Lorem Ipsum passages, and more recently with desktop publishing software 
              like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
        </div>
      </div>
    </section>
    <section class="image-between-sessions"></section>

    <!-- SIMULAÇÃO -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <form method="POST" name="frmsimulation" action="bd/age-range.php" >
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio1" value="1" checked>
                <label class="form-check-label" for="radio1">
                  0-18
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio2" value="2">
                <label class="form-check-label" for="radio2">
                 19-23
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio1" value="3" checked>
                <label class="form-check-label" for="radio1">
                  24-28
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio2" value="4">
                <label class="form-check-label" for="radio2">
                 29-33
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio1" value="5" checked>
                <label class="form-check-label" for="radio1">
                  34-38
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio2" value="6">
                <label class="form-check-label" for="radio2">
                 39-43
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio1" value="7" checked>
                <label class="form-check-label" for="radio1">
                  44-48
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio2" value="8">
                <label class="form-check-label" for="radio2">
                 49-53
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio1" value="9" checked>
                <label class="form-check-label" for="radio1">
                  54-58
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="rdorange" id="radio1" value="10" checked>
                <label class="form-check-label" for="radio1">
                  59+
                </label>
              </div>
              <input type="submit" value="SALVAR" name="btnrange" class="btn btn-primary" />
            </form>
          </div>
          <div class="col-md-8">
            
          </div>
        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>