<?php
  if(isset($_POST['btnenviar'])){ //----------IF VERIFICANDO AÇÃO NO FORMULÁRIO

    //IMPORTE DO ARQUIVO DE CONEXÃO
    require_once('connection.php');
    $connection = connectionMysql();

    $telefone = $_POST['txttelefone'];
    $email = $_POST['txtemail'];
    $mensagem = $_POST['txtmensagem'];

    //VALIDAÇÕES
    $nome = filter_input(INPUT_POST, 'txtnome', FILTER_SANITIZE_SPECIAL_CHARS);
    $nome = strtoupper($nome);
    $mensagem = filter_input(INPUT_POST, 'txtmensagem', FILTER_SANITIZE_SPECIAL_CHARS);

    //SCRIPT PARA INSERIR OS DADOS RESGATADOS DO FORMULÁRIO
    $sql = "INSERT INTO tblcontato (nome, telefone, email, mensagem)
    VALUES('".$nome."', '".$telefone."', '".$email."', '".$mensagem."');";
    
    $insert = mysqli_query($connection, $sql);

    //VERIFICA INSERT
    if($insert){
      header('location:../contato.php?modo=contato&status=200');
    }
    else{
      header('location:../contato.php?modo=contato&status=400');
    }

  }//----------IF VERIFICANDO AÇÃO NO FORMULÁRIO
?>