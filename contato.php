<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>
      Contato | Maktub Seguros
    </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="./css/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" 
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" 
      integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" 
      crossorigin="anonymous">
      
    <style>
      .botao-green {
        background-color: #16C772;
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
      }

      .botao-green:hover {
        background-color: #14b367;
      }
      .btn-big{
        width: 120px;
        border-radius: 20px;
      }
      .bg-arvore{
        background-image: url("images/arvore01.png");
        background-size: cover;
      }
      .w-60 {
        width: 60%;
      }
      #snackbar{
        position: absolute;
        z-index: 1;
      }
      .showoff{
        visibility: hidden;
      }
      .show{
        visibility: visible;
      }
    </style>
  </head>
  <body>

    <?php require_once("header.php")?>

    <!-- TOPO DA PÁGINA -->
    <section class="bg-blue-gradient">
      <div class="container text-white text-center pt-4 pb-4">
        <div class="d-flex justify-contet-center align-items-center flex-column">
          <h1 class="display-4 mb-5"> Lorem Ipsum is simply  </h1>
          <p> Tel: (11) 3619-3309</p>
          <p> Email: maktubseguros@gmail.com</p>
          <p> 
              Endereço: Rua Robert Bosch, 544 - Barra Funda, São Paulo - SP,
              06453-017
          </p>
        </div>
      </div>
    </section>


    <!-- FORMULÁRIO -->
    <section>
      <div class="container">
        <div class="row">
          <div class="col-md-5"> <!-- COL -->

            <!-- TOAST -->
            <div class="showoff" 
            style="min-height: 200px; width: 400px;" id="snackbar">
              <div class="toast-header w-100">
                <strong class="mr-auto">Mensagem</strong>
                <small>1 sec ago</small>
                <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="toast-body w-100 text-white bg-blue-dark">
                Sua mensagem foi enviada com sucesso.
              </div>
            </div>

            <!-- FORM -->
            <form method="POST" action="bd/insert-contato.php" 
              class="w-60 ml-auto mr-auto mt-5 mb-5"> 
                <div class="form-group">
                  <label for="input1">Nome Completo*</label>
                  <input name="txtnome" type="text" required  
                  onkeypress="return validarEntrada(event, 'string');"
                  class="form-control" id="input1" maxlength="3000">
                </div>

                <div class="form-group">
                  <label for="telefone">Telefone*</label>
                  <input name="txttelefone" type="text" required 
                  class="form-control" id="telefone" 
                  onkeypress="return mascaraFone(this, event);"
                  >
                </div>

                <div class="form-group">
                  <label for="input3">Email</label>
                  <input type="email" name="txtemail" class="form-control" 
                    id="input3" maxlength="3000">
                </div>
                
                <div class="form-group">
                  <label for="textarea">Mensagem*</label>
                  <textarea class="form-control" id="textarea" name="txtmensagem"
                  rows="4" required maxlength="4000"></textarea>
                </div>

                <input type="submit" value="ENVIAR" name="btnenviar"
                  class="btn botao-green btn-big text-white"/>
              </form>
          
          
          
          </div> <!-- COL -->

          <div class="col-md-7 bg-blue text-white"> <!-- COL -->
            <div class="bg-arvore w-100 h-100 d-flex flex-column 
              justify-content-center pl-3">
              <h1 class="display-4 text-uppercase ">
                Precisamos 
              </h1>
              <h1 class="display-4 text-uppercase ">
                da sua 
              </h1>
              <h1 class="display-4 text-uppercase ">
                opinião 
              </h1>
              <h1 class="display-4 text-uppercase ">
                para 
              </h1>
              <h1 class="display-4 text-uppercase ">
                crescermos
              </h1>
            </div>
          </div> <!-- COL -->
        </div>
      </div>
    </section>

    <?php
      require_once("footer.php");
    ?>

    <script 
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
      crossorigin="anonymous"></script>
    <script 
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" 
      integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" 
      crossorigin="anonymous"></script>
    <script 
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" 
      integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
      crossorigin="anonymous"></script>
    <script src="js/modulos.js"></script>

    <script>
      //Resgata URL
      var query = location.search.slice(1);
      
      //Verifica o modo e estado
      if(query == "modo=contato&status=200"){
        window.scroll(0,500);

        //Resgata o toast e atribui a classe show (que deixa visivel)
        var x = document.getElementById("snackbar");  
        x.className = "show d-flex flex-column justify-content-center align-items-center";

        //Após 4 segudos substitui para showoff (que oculta)
        setTimeout(() => {
          x.className = 
            x.className.replace("show d-flex flex-column justify-content-center align-items-center",
            "showoff");
        }, 3000);
      }
    </script>

  </body>
</html>