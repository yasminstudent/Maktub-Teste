<?php
  //Verificando se houve a ação no formulário  
  if(isset($_POST['btnrange']))
  {
  
    //Importe do arquivo de conexão
    require_once('connection.php');
    $connection = connectionMysql();
        
    //Select para o banco
    $idade = $_POST['rdorange'];
    $sql = "select * from tblplano_modalidade_faixa where idfaixa = " . $idade;
    $select = mysqli_query($connection, $sql);

    if($select){

      $rsPlanos= [];

      foreach($select as $dados){

        $sql = "select nome from tblmodalidade where id =" 
        . $dados['idmodalidade'];

        $modalidade = mysqli_query($connection, $sql);
        $modalidade = mysqli_fetch_array($modalidade);

        $sql = "select * from tblplano where id = "
        . $dados['idplano'];

        $plano = mysqli_query($connection, $sql);
        $plano = mysqli_fetch_array($plano);

        $rsPlano = array(
          "id" => $plano['id'],
          "operadora" => $plano['operadora'],
          "reembolso" => $plano['reembolso'],
          "modalidade" => $modalidade['nome'],
          "preço" => $dados['preço']
        );

        if($rsPlanos){
          $rsPlanos = [...$rsPlanos, $rsPlano];
        }
        else{
          $rsPlanos = [$rsPlano];
        }
      }

      session_start();
      $_SESSION['rsPlanos'] = $rsPlanos;

      //print_r($rsPlanos[1]['operadora']);
      header('location:../home.php');
    }
    else{
        echo("Erro ao executar o script");
    } 
  }

?>