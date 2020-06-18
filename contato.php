<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>
      Home | Maktub Seguros
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link href="./css/bootstrap.min.css" type="text/css" rel="stylesheet">
  </head>
  <body>

    <?php require_once("header.php")?>

    <section class="bg-blue-gradient">
      <div class="container text-white text-center pt-5 pb-5">
        <div class="d-flex justify-contet-center align-items-center flex-column">
          <h1 class="display-4"> Lorem Ipsum is simply  </h1>
          <p> the printing and typesetting industry</p>
          <div class="btn btn-success"> Lorem </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">

          <div class="col-md-6">

          </div>

          <div class="col-md-6">
            <form method="POST" class="w-50"  name="frmsimulation" action="">
              <div class="form-group">
                <label for="inputNome">Nome</label>
                <input type="text" name="txtnome" class="form-control"
                 id="inputNome">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" 
                aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">
                  Não compartilharemos seu email com mais ninguém.
                </small>
              </div>
              <div class="form-group">
                <label for="inputTelefone">Tel/Cel</label>
                <input type="email" name="txttelefone" class="form-control" 
                id="inputTelefone">
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Mensagem</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" 
                rows="4"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

        </div>
      </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>