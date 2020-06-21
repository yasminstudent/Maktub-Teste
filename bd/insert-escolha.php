<?php
  //VERIFICA A AÇÃO DO FORMULÁRIO
  if(isset($_POST['btnescolha'])){

    //IMPORTA ARQUIVO DE CONEXÃO E CHAMA A FUNÇÃO
    require_once("connection.php");
    $connection = connectionMysql();

    //RESGATE O ID DO PLANO PASSADO PELO GET
    $id = $_GET['id'];

    $nome = $_POST['txtnome'];
    $tipo_cnpj = $_POST['sltcnpj'];
    $tipo_contato = $_POST['sltcontato'];
    $telefone = $_POST['txttelefone'];

    //SCRIPT PARA INSERIR OS DADOS RESGATADOS DO FORMULÁRIO
    $sql = "INSERT INTO tblcliente (nome_completo, tipo_cnpj, tipo_contato, telefone)
    VALUES('".$nome."', '".$tipo_cnpj."', '".$tipo_contato."', '".$telefone."');";
    
    $insert = mysqli_query($connection, $sql);

    //VERIFICA INSERT
    if($insert){

      //SELECT NO ÚLTIMO CLIENTE INSERIDO E CONVERTE O RETORNO PARA ARRAY
      $sql = "SELECT * FROM tblcliente ORDER BY id DESC limit 1";
      $select = mysqli_query($connection, $sql);
      $rsCliente = mysqli_fetch_array($select);

      //INSERE O CLIENTE E SUA ESCOLHA
      $sql = "INSERT INTO tblcliente_plano (idcliente, idplano)
      VALUES(" .$rsCliente['id'].",".$id.");" ; 
      $insert = mysqli_query($connection, $sql);

      if($insert){
        header('location:../home.php?modo=escolha&status=200');
      }
      else{
        echo $insert;
      }

    }
  }
?>