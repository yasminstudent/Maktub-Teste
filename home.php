<?php 

  /*
    Revisar nomenclatura
    Revisar identação
    Add comentários
    Criar tabela de tipo de CNPJ
    Perguntar se é interior de SP 1 ou 2 
    Revisar os planos criados na tabela que junta tudo
    Criar variáveis para usar no laço
    filtro por preço
    filtro por modalidade
    mascara
    analisar home e resolver bugs
      (importar arquivo, criar uma função que chama outra)
    definir limite de caracteres nas textareas
  */

  if(!isset($_SESSION)){
    session_start();
  }


  if(isset($_SESSION['rsPlanos'])){
    $rsPlanos = $_SESSION['rsPlanos'];
  }

  
  
  require_once('bd/connection.php');
  $connection = connectionMysql();

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
    <link href="https://fonts.googleapis.com/css2?family=MuseoModerno&family=Work+Sans:wght@300&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="css/style.css">

    <style>
      .background-gray {
          background-image: url("images/back-gray.png");
      }
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
    </style>
    
    <?php 
      if (isset($_SESSION['radio_vazio'])){
            echo "<script>  window.alert( 'Selecione a sua faixa etária') </script>";
            unset($_SESSION['radio_vazio']);
      }
    ?>
      
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
                      <img src="images/slide2-removebg-preview.png" 
                      id="img-slide2" />
                    </div>
                  </div>
                </div>
                
              </div><!--/Inner -->

              <!-- Controles -->
              <a href="#carousel-maktub" class="carousel-control-prev" 
              data-slide="prev">
                <i class="fas fa-angle-left fa-3x"></i>
              </a>
              <a href="#carousel-maktub" class="carousel-control-next" 
              data-slide="next">
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
        <h1 class="text-capitalize text-blue mt-3 title display-4">
          Conheça a nossa empresa
        </h1>
        <div class="row">
          <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="images/unnamed.png" id="home-sobre"  />
          </div>
          <div class="col-md-6 text-center text-gray">
            <p class="text ml-auto mr-auto w-75">
              Lorem Ipsum is simply dummy text of the printing and typesetting 
              industry. Lorem Ipsum has been the industry's standard dummy text 
              ever since the 1500s, when an unknown printer took a galley of 
              type and scrambled it to make a type specimen book. It has 
              survived not only five centuries, but also the leap into
              electronic typesetting, remaining essentially unchanged. It was 
              popularised in the 1960s with the release Lorem Ipsum passages, 
              and more recently with desktop publishing software like Aldus 
              PageMaker including versions of Lorem Ipsum.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="image-between-sessions"></section> -->

    <!-- SIMULAÇÃO -->
    <section class="bg-blue text-white">
      <div class="container pt-4">
        <h1 class="text-capitalize text-center mb-2 display-4">
            Faça a sua simulação
        </h1>    
        <h1 class="text-capitalize mt-4 mb-3 ml-5 display-4 title-size">
          Selecione a sua faixa etária
        </h1>

        <div class="d-flex justify-content-center align-items-center flex-column">
          <form method="POST" name="frmsimulation" action="bd/age-range.php" >

            <?php
              $sql = "select * from tblfaixa";
              $select = mysqli_query($connection, $sql);

              $rsFaixa = [];

              foreach($select as $faixa){

                if($rsFaixa){
                  $rsFaixa = [...$rsFaixa, $faixa];
                }
                else{
                  $rsFaixa = [$faixa];
                }

              }

              $size = count($rsFaixa);
              $cont = 0;

              while($cont < $size){
            ?>
              <div class="form-check form-check-inline ml-2 mr-2 mt-3">
                <input class="form-check-input" type="radio" name="rdorange" 
                id=<?=$rsFaixa[$cont]['id']?> value=<?=$rsFaixa[$cont]['id']?> >

                <label class="form-check-label" for=<?=$rsFaixa[$cont]['id']?> >
                  <?=$rsFaixa[$cont]['faixa']?>
                </label>
              </div>
            <?php
                $cont++;
              }
            ?>
            <br>

            <div class="d-flex justify-content-center mt-3">
              <input type="submit" value="Buscar" name="btnrange" 
                class="btn botao-green text-white mb-4 btn-big" />
            </div>

          </form>
        </div>
      </div>
    </section>
    <section class="pt-5">
      <div class="container background-gray pb-4">
        <div class="row">
          <div class="d-flex flex-row flex-wrap">

            <?php 
              if(isset($rsPlanos)){

                  $size = count($rsPlanos);
                
                  for($cont = 0; $cont < $size; $cont++){
                    $reembolso = ($rsPlanos[$cont]['reembolso'] / 100) 
                    * $rsPlanos[$cont]['preço'] ;
            ?>
            <div class="col-md-4">
                <div class="card w-85 ml-auto mr-auto mb-2 border border-primary">
                    <div class="card-img-plano">
                        <img
                            class="w-100 h-25"
                            src="images/notredame.jpg"
                        />
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                          <?=$rsPlanos[$cont]['operadora'] ?>
                        </h5>
                        <p class="card-text">
                          R$:<?=$reembolso?> de reemboloso
                        </p>
                        <p class="card-text">
                          Modalidade: <?=$rsPlanos[$cont]['modalidade']?>
                        </p>
                        <p class="card-text">
                          Preço R$:<?=$rsPlanos[$cont]['preço']?>
                        </p>
                        
                        <?php
                          $dataWhatever = $rsPlanos[$cont]['id'] . 
                          "-" . $rsPlanos[$cont]['operadora'];

                        ?>
                        <button data-toggle="modal" data-target="#modalForm"
                          type="button" class="botao-green btn text-white" 
                          data-whatever=<?=$dataWhatever?>
                          > 
                          escolher
                        </button>
                    </div>
                </div>

                

                <!-- Modal -->
                <div class="modal fade" id="modalForm" tabindex="-1" 
                    role="dialog" aria-labelledby="modalLabel" 
                    aria-hidden="true">

                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel">
                          
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" 
                        aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form method="POST" class="modalfrm" name="frmplano">

                          <div class="form-group">
                            <label for="formGroupInput">
                              Nome Completo*
                            </label>
                            <input type="text" 
                              name="txtnome" 
                              class="form-control" 
                              id="formGroupInput" 
                              placeholder="Nome Completo" 
                              required>
                          </div>

                          <div class="form-group">
                            <label for="formGroupInput2">
                              Qual é o tipo de CNPJ?*
                            </label>
                            <select class="form-control"
                              name="sltcnpj"  
                              id="formGroupInput2">
                              <option value="MEI" selected>MEI</option>
                              <option value="ME"> ME </option>
                              <option value="LTDA"> LTDA </option>
                              <option value="EI"> EI </option>
                              <option value="EPP"> EPP </option>
                              <option value="EIRELI"> EIRELI </option>
                              <option value="S.A"> S.A </option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="formGroupInput3">
                              Como você quer ser contatado?*
                            </label>
                            <select class="form-control"
                              name="sltcontato" 
                              id="formGroupInput3">
                              <option value="WHATSAPP" selected>
                                WHATSAPP
                              </option>
                              <option value="TELEFONE"> TELEFONE </option>
                            </select>
                          </div>

                          <div class="form-group">
                            <label for="formGroupInput4">
                              Número de telefone/celular*
                            </label>
                            <input type="text"
                              name="txttelefone" 
                              class="form-control" 
                              id="formGroupInput4" 
                              placeholder="Tel/Cel" 
                              required>
                          </div>

                          <div class="d-flex justify-content-end w-100">
                            <button name="btnescolha"
                              type="submit" class="btn btn-primary">
                              ENVIAR
                            </button>
                          </div>

                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" 
                          data-dismiss="modal">
                          FECHAR
                        </button>
                      </div>
                    </div>
                  </div>

                </div>
                
            </div>
            <?php 
                }
              }
            ?>
            
          </div>
        </div>
      </div>
    </section>

    <!-- Rodapé -->
    <?php
        require_once("footer.php");
    ?>

    
   <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script>

      function action(id){
        $(".modalfrm").attr("action","bd/insert-escolha.php?id=" + id);
      }

      $('#modalForm').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) 
        var recipient = button.data('whatever') 

        var array = recipient.split("-");
        var id = array[0]
        var operadora = array[1]

        var modal = $(this)
        modal.find('.modal-title').text('Você escolheu o plano ' + operadora)
        action(id);
      })
      
    </script>         
  </body>
</html>