<?php

  if(isset($_POST['btnbuscar'])){
    //IMPORTA ARQUIVO DE CONEXÃO E CHAMA A FUNÇÃO
    require_once("connection.php");
    $connection = connectionMysql();

    $duvida = $_POST['txtduvida'];
    $duvida = explode(" ", $duvida);

    foreach($duvida as $palavra){
      $sql = "SELECT tbltopico.topico, tblsuporte.* FROM tbltopico
      INNER JOIN tblsuporte ON tblsuporte.idtopico = tbltopico.id 
      WHERE tbltopico.topico LIKE '%" . $palavra . "%';";

      echo "<br>" . $sql;
    }

   

  }

  //VERIFICAR AÇÃO NO FORMULÁRIO

  //IMPORTAR ARQUIVO DE CONEXÃO

  //RESGATAR DADO E TRANSFORMAR EM ARRAY

  //SELECT NA TABELA SUPORTE - vendo o tópico - COM CADA INDICE DO ARRAY com inner

  //SELECT NA TABELA SUPORTE SEM INNER - vendo a pergunta - com id topico igual ao que pega lá em cima



?>