<?php
  if(!isset($_SESSION)){
    session_start();
  };    

?>
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
      .container-duvidas{
        min-height: 300px;
        /* margin-bottom: 130px !important;  */
      }
      @media (min-width: 1900px){
        .container-duvidas{
          margin-bottom: 130px !important; 
        }
      }
      .mt-6{
        margin-top: 40px;
      }
      .bg-gray {
        background-color: #e0e0e0;
      }
      .bg-white{
        background-color: #ffffff;
      }
    </style>
  </head>
  <body>

    <?php require_once("header.php")?>

    <section>
      <div class="container"> <!-- CONTAINER -->
        <h1 class="display-4 text-gray text-center mt-6 mb-4">
          Dúvidas? A gente te ajuda.
        </h1>

        <form method="POST" name="frmsuporte" action="bd/select-suporte.php"
          class="form-inline w-75 ml-auto mr-auto mt-6
          d-flex justify-content-center">
          <input type="text" class="form-control mx-sm-2 mb-2 w-75" 
          placeholder="Digite sua dúvida aqui" name="txtduvida">
          <button name="btnbuscar" type="submit" 
            class="btn botao-green mb-2 btn-big text-white">
            Buscar
          </button>
        </form>

        <div class="w-100 d-flex justify-content-center mb-5 mt-5">
          <div class="bg-gray container-duvidas w-75 mb-5
          d-flex flex-column align-items-center pt-4 pb-2"> <!-- CONTAINER PERGUNTAS -->
            <?php
              if(isset($_SESSION['rsDuvidas'])) {
                $rsPerguntas = $_SESSION['rsDuvidas'];
                $size = count($rsPerguntas);

                for($i = 0; $i < $size; $i++){
                  $pergunta = $rsPerguntas[$i]['pergunta'];
                  $resposta = $rsPerguntas[$i]['resposta'];
                  $numero = $i + 1;
            ?>
                <table class="table mb-3 w-75">
                  <thead>
                    <tr class="bg-primary text-white">
                      <th scope="col"><?=$numero?></th>
                      <th scope="col"><?=$pergunta?></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="bg-white">
                      <th scope="row">R:</th>
                      <td><?=$resposta?></td>
                    </tr>
                  </tbody>
                </table>
            <?php
                }
              };
            ?>
            <?php
              if(isset($_SESSION['status'])) {
            ?>
              <div>
                <h2>Ops! Nenhum resultado foi encontrado </h2>
                <p>
                  Tente usar palavras chaves: PAGAMENTO, SEGURO, REEMBOLSO, 
                  MODALIDADE, OPERADORA, REGIÃO, CONTATO, CANCELAMENTO, 
                  FUNCIONAMENTO ou CONTATO.
                </p>
               
                <p>Ou preencha o formulário na página de contato</p>

              </div>
            <?php
              }
            ?>
          </div><!-- CONTAINER PERGUNTAS -->
        </div>
      </div> <!-- CONTAINER -->
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
  </body>
</html>