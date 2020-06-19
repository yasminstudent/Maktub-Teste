<?php
  //VERIFICAR A AÇÃO DO FORMULÁRIO
  if(isset($_POST['btnescolha'])){
    //IMPORTAR ARQUIVO DE CONEXÃO E CHAMAR A FUNÇÃO
    require_once("connection.php");
    $connection = connectionMysql();

    //RESGATAR O ID DO GET
    $id = $_GET['id'];

    //RESGATAR RESTANTE DOS DADOS PELO POST
    $nome = $_POST['txtnome'];
    $tipo_cnpj = $_POST['sltcnpj'];
    $tipo_contato = $_POST['sltcontato'];
    $telefone = $_POST['txttelefone'];

    //MONTAR O SCRIPT
    $sql = "INSERT INTO tblcliente (nome, tipo_cnpj, tipo_contato, telefone)
    VALUES('".$nome."', '".$tipo_cnpj."', '".$tipo_contato."', '".$telefone."');";

    //ENVIAR PARA O BD
    $insert = mysqli_query($connection, $sql);

    //VERIFICAR SE INSERIU
    if($insert){
      //SELECT NO ÚLTIMO SCRIPT INSERIDO
      $sql = "SELECT * FROM tblcliente ORDER BY id DESC limit 1";

      //ENVIAR PARA O BD
      $select = mysqli_query($connection, $sql);

      //Transforma o cliente em array
      $rsCliente = mysqli_fetch_array($select);

      //INSERE O CLIENTE E SUA ESCOLHA
      $sql = "INSERT INTO tblcliente_plano (idcliente, idplano_modalidade_faixa)
      VALUES(" .$rsCliente['id'].",".$id.");" ; 

      //INICIAR VARIÁVEL DE SESSÃO
      if(!isset($_SESSION)){
        session_start();
      }

      //ENVIAR PARA O BD
      $insert = mysqli_query($connection, $sql);

      //VERIFICAR SE FUNCIONOU
      if($insert){
        //CRIAR VARIÁVEL DE SESSÃO
        $_SESSION['status'] = "ok";
        header('location:../home.php');
      }
      else{
        echo $insert;
      }

    }
  }
?>