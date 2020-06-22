<?php  
  if(isset($_POST['btnrange'])) //-----------------IF VERIFICANDO AÇÃO NO FORMULÁRIO
  {
    //IMPORTE DO ARQUIVO DE CONEXÃO
    require_once('connection.php');
    $connection = connectionMysql();

    $rsPlanos = [];

    //SCRIPT PARA O SELECT COM OS DADOS DO PLANO
    $sql = 
    "SELECT tblplano.*, tblmodalidade.nome, tblmodalidade.percentual, 
    tblmodalidade.id as idmodalidade FROM tblplano_modalidade 
    INNER JOIN tblplano ON tblplano.id = tblplano_modalidade.idplano 
    INNER JOIN tblmodalidade ON tblmodalidade.id = tblplano_modalidade.idmodalidade;";

    //RESGATA OS NUMBERS
    $faixa1 = $_POST['input1'];
    $faixa2 = $_POST['input2'];
    $faixa3 = $_POST['input3'];
    $faixa4 = $_POST['input4'];
    $faixa5 = $_POST['input5'];
    $faixa6 = $_POST['input6'];
    $faixa7 = $_POST['input7'];
    $faixa8 = $_POST['input8'];
    $faixa9 = $_POST['input9'];
    $faixa10 = $_POST['input10'];

    if(!isset($_SESSION)){
      session_start();
    }

    //VERIFICA SE O USUÁRIO ATRIBUI UM VALOR POSITIVO A ALGUMA FAIXA
    if($faixa1 <= 0 && $faixa2 <= 0 && $faixa3 <= 0 &&
       $faixa4 <= 0 && $faixa5 <= 0 && $faixa6 <= 0 &&
       $faixa7 <= 0 && $faixa8 <= 0 && $faixa9 <= 0 && $faixa10 <= 0
    ){
      $_SESSION['status'] = "Selecione pelo menos uma pessoa de alguma faixa";
      header('location:../home.php?modo=buscarPlanos');
    }
    else{

      //CALCULA O PREÇO POR FAIXA
      function precoPorFaixa ($percentual, $preco, $repeticoes){
        //CALCULA O VALOR ADICIONAL DO PREÇO, SOMA COM O VALOR DO PREÇO
        //E MULTIPLICA PELA QUANTIDADE DE PESSOAS QUE O USUÁRIO SELECIONOU
        $retorno = $repeticoes == 0 ? 0 : ( (($percentual / 100) * $preco) 
        + $preco) * $repeticoes;
        return $retorno;
      };

      $select = mysqli_query($connection, $sql);

      if($select){//-----------------IF VERIFICANDO SELECT

        //SELECT NO ACRÉSCIMO PERCENTUAL DAS FAIXAS
        $sql = "SELECT percentual FROM tblfaixa";
        $selectFaixa = mysqli_query($connection, $sql);

        $rsAcrescimos = [];

        foreach ($selectFaixa as $acrescimo) { //**********FOREACH PERCORRENDO SELECT
          
          //ADICIONANDO NO ARRAY, CADA ACRESCIMO
          if($rsAcrescimos){
            $rsAcrescimos = [$rsAcrescimos, $acrescimo['percentual']];
          }
          else{
            $rsAcrescimos = [$acrescimo['percentual']];
          }

        }//**********FOREACH PERCORRENDO SELECT

        foreach($select as $dados){ //-----------------FOREACH PERCORRENDO SELECT

          $percentual_modalidade = $dados['percentual'];
          $preco_base = $dados['preco_base'];

          /* 
            CALCULA O VALOR DO PREÇO BASE + A PORCENTAGEM ADICIONAL DA MODALIDADE
          */
          $preco_modalidade = (($percentual_modalidade /100)
          * $preco_base) + $preco_base;

          //CHAMADA DA FUNÇÃO QUE CALCULA O PREÇO POR FAIXA
          $preco1 = precoPorFaixa($rsAcrescimos[0], $preco_modalidade, $faixa1);
          $preco2 = precoPorFaixa($rsAcrescimos[1], $preco_modalidade, $faixa2);
          $preco3 = precoPorFaixa($rsAcrescimos[2], $preco_modalidade, $faixa3);
          $preco4 = precoPorFaixa($rsAcrescimos[3], $preco_modalidade, $faixa4);
          $preco5 = precoPorFaixa($rsAcrescimos[4], $preco_modalidade, $faixa5);
          $preco6 = precoPorFaixa($rsAcrescimos[5], $preco_modalidade, $faixa6);
          $preco7 = precoPorFaixa($rsAcrescimos[6], $preco_modalidade, $faixa7);
          $preco8 = precoPorFaixa($rsAcrescimos[7], $preco_modalidade, $faixa8);
          $preco9 = precoPorFaixa($rsAcrescimos[8], $preco_modalidade, $faixa9);
          $preco10 = precoPorFaixa($rsAcrescimos[9], $preco_modalidade, $faixa10);

          //ARRAY COM OS PREÇOS
          $precos = array(
            $preco1, $preco2, $preco3, $preco4, $preco5, $preco6, $preco7,
            $preco8, $preco9, $preco10
          );

          //SOMA OS PREÇOS E FORMATA O RETORNO
          $preco_total = array_sum($precos);
          $preco_total = number_format($preco_total, 2, ',', '.');

          $reembolso = ($dados['reembolso'] / 100) * $preco_total;
          
          //SELECT NA TABELA PLANO MODALIDADE
          $sql = "SELECT * FROM tblplano_modalidade WHERE idplano = 
          ".$dados['id']." AND idmodalidade =".$dados['idmodalidade'].";";
          $idplano = mysqli_query($connection, $sql);

          $idplano = mysqli_fetch_array($idplano);

          $rsPlano = array(
            "id" => $idplano['id'],
            "operadora" => $dados['operadora'],
            "reembolso" => $reembolso,
            "modalidade" => $dados['nome'],
            "preço" => $preco_total
          );

          print_r($rsPlano);
    
          //SE O ARRAY TIVER DADOS INSERE SEU VALOR E O NOVO PLANO
          if($rsPlanos){
            $rsPlanos = [$rsPlanos, $rsPlano];
          }
          else{
            $rsPlanos = [$rsPlano];
          }
          
        }//-----------------FOREACH PERCORRENDO SELECT
        
        $_SESSION['rsPlanos'] = $rsPlanos;
        
        header('location:../home.php?modo=buscarPlanos');
    
      
      }//-----------------IF VERIFICANDO SELECT
      else{
        echo("Erro ao executar o script");
      } 

    }
 
    
  }//-----------------IF VERIFICANDO AÇÃO NO FORMULÁRIO
?>