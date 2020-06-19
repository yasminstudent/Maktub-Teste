<?php
  //VERRIFICAR A AÇÃO NO FORMULÁRIO
  if(isset($_POST['btnenviar'])){

    require_once('connection.php');
    $connection = connectionMysql();

    $nome = $_POST['txtnome'];
    $telefone = $_POST['txttelefone'];
    $email = $_POST['txtemail'];
    $mensagem = $_POST['txtmensagem'];

    $sql = "INSERT INTO tblcontato (nome, telefone, email, mensagem)
    VALUES('".$nome."', '".$telefone."', '".$email."', '".$mensagem."');";
    
    $insert = mysqli_query($connection, $sql);

    if(!isset($_SESSION)){
      session_start();
    }

    if($insert){
      $_SESSION['status'] = "ok";
      header('location:../contato.php');
    }
    else{
      echo $sql;
    }

  }
?>