<?php

  if(isset($_POST['btnbuscar'])){//-----------------VERIFICA A AÇÃO NO FORM
    
    //IMPORTA ARQUIVO DE CONEXÃO E CHAMA A FUNÇÃO
    require_once("connection.php");
    $connection = connectionMysql();

    if(!isset($_SESSION)){
      session_start();
    }

    //RESGATA PERGUNTA E TRANSFORMA EM ARRAY
    $duvida = $_POST['txtduvida'];
    $duvida = explode(" ", $duvida);
 
    $rsDuvidas = [];

    foreach($duvida as $palavra){ //-------------- FOREACH PERCORRENDO O ARRAY
      $palavra = substr($palavra, 0, 4);
      
      //SELECT NA TABELA TÓPICO VERFIFICANDO SE EXISTE A PALAVRA NOS REGISTROS
      $sql = "SELECT * FROM tbltopico WHERE 
      tbltopico.topico LIKE '" . $palavra . "%';";
      $select = mysqli_query($connection, $sql);
      $rsTopico = mysqli_fetch_array($select);

      
      if($rsTopico['id']){
        //SELECT NA TABELA DE SUPORTE
        $sql = "SELECT * FROM tblsuporte WHERE idtopico = ".$rsTopico['id'];
        $select = mysqli_query($connection, $sql);

        foreach($select as $dados){ //--------FOREACH PERCORRENDO O SELECT

          $rsDuvida = array(
            "pergunta" => $dados['pergunta'],
            "resposta" => $dados['resposta']
          );
    
          //SE O ARRAY TIVER DADOS INSERE SEU VALOR E A NOVA DÚVIDA
          if($rsDuvidas){
            $rsDuvidas = [...$rsDuvidas, $rsDuvida];
          }
          else{
            $rsDuvidas = [$rsDuvida];
          }

        } //--------FOREACH PERCORRENDO O SELECT
      }
    }//-------------- FOREACH PERCORRENDO O ARRAY

    //VERIFICA SE O ARRAY COM AS PERGUNTAS NÃO ESTÁ VAZIO
    if($rsDuvidas != []){
      $_SESSION['rsDuvidas'] = $rsDuvidas;
      header('location:../suporte.php?');
    }
    else{
      $_SESSION['status'] = 400;
      header('location:../suporte.php?');
    }

 
  } //-----------------VERIFICA A AÇÃO NO FORM

?>