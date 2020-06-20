<?php
  //VERIFICA A AÇÃO DO FORMULÁRIO
  if(isset($_POST['btnescolha'])){

    //IMPORTA ARQUIVO DE CONEXÃO E CHAMA A FUNÇÃO
    require_once("connection.php");
    $connection = connectionMysql();

    //RESGATA O ID DO GET
    $id = $_GET['id'];

    //RESGATA RESTANTE DOS DADOS PELO POST
    $nome = $_POST['txtnome'];
    $tipo_cnpj = $_POST['sltcnpj'];
    $tipo_contato = $_POST['sltcontato'];
    $telefone = $_POST['txttelefone'];

    //MONTA O SCRIPT E ENVIA PARA O BD
    $sql = "INSERT INTO tblcliente (nome, tipo_cnpj, tipo_contato, telefone)
    VALUES('".$nome."', '".$tipo_cnpj."', '".$tipo_contato."', '".$telefone."');";

    $insert = mysqli_query($connection, $sql);

    //VERIFICA SE INSERIU
    if($insert){

      //SELECT NO ÚLTIMO SCRIPT INSERIDO E CONVERTE O RETORNO PARA ARRAY
      $sql = "SELECT * FROM tblcliente ORDER BY id DESC limit 1";
      $select = mysqli_query($connection, $sql);
      $rsCliente = mysqli_fetch_array($select);

      //INSERE O CLIENTE E SUA ESCOLHA
      $sql = "INSERT INTO tblcliente_plano (idcliente, idplano_modalidade_faixa)
      VALUES(" .$rsCliente['id'].",".$id.");" ; 
      $insert = mysqli_query($connection, $sql);

      //INICIAR VARIÁVEL DE SESSÃO
      if(!isset($_SESSION)){
        session_start();
      }

      if($insert){
        //CRIAR VARIÁVEL DE SESSÃO
        $_SESSION['status'] = "ok";
        header('location:../home.php?modo=escolha');
      }
      else{
        echo $insert;
      }

    }
  }
?>