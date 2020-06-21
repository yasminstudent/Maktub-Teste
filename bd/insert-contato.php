<?php
  if(isset($_POST['btnenviar'])){ //----------IF VERIFICANDO AÇÃO NO FORMULÁRIO

    //IMPORTE DO ARQUIVO DE CONEXÃO
    require_once('connection.php');
    $connection = connectionMysql();

    $nome = $_POST['txtnome'];
    $telefone = $_POST['txttelefone'];
    $email = $_POST['txtemail'];
    $mensagem = $_POST['txtmensagem'];

    //SCRIPT PARA INSERIR OS DADOS RESGATADOS DO FORMULÁRIO
    $sql = "INSERT INTO tblcontato (nome, telefone, email, mensagem)
    VALUES('".$nome."', '".$telefone."', '".$email."', '".$mensagem."');";
    
    $insert = mysqli_query($connection, $sql);

    //VERIFICA INSERT
    if($insert){
      header('location:../contato.php?modo=contato&status=200');
    }
    else{
      echo $sql;
    }

  }//----------IF VERIFICANDO AÇÃO NO FORMULÁRIO
?>