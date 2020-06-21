<?php  
  if(isset($_POST['btnrange'])) //-----------------IF VERIFICANDO AÇÃO NO FORMULÁRIO
  {
  
    //IMPORTE DO ARQUIVO DE CONEXÃO
    require_once('connection.php');
    $connection = connectionMysql();

    $rsPlanos = [];

    //SELECT COM OS DADOS DO PLANO
    $sql = 
    "SELECT tblplano.*, tblmodalidade.nome, tblmodalidade.percentual 
    FROM tblplano_modalidade 
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

    $br = "<br>";

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

      if(!isset($_SESSION)){
        session_start();
      }

      foreach($select as $dados){ //-----------------FOREACH PERCORRENDO SELECT

        $percentual_modalidade = $dados['percentual'];
        $preco_base = $dados['preco_base'];

        /* 
          CALCULA O VALOR DO PREÇO BASE + A PORCENTAGEM ADICIONAL DA MODALIDADE
          E DA FAIXA ETÁRIA
        */
        $preco_modalidade = (($percentual_modalidade /100)
        * $preco_base) + $preco_base; 

        //CHAMADA DA FUNÇÃO QUE CALCULA O PREÇO POR FAIXA
        $preco1 = precoPorFaixa(5, $preco_modalidade, $faixa1);
        $preco2 = precoPorFaixa(10, $preco_modalidade, $faixa2);
        $preco3 = precoPorFaixa(15, $preco_modalidade, $faixa3);
        $preco4 = precoPorFaixa(20, $preco_modalidade, $faixa4);
        $preco5 = precoPorFaixa(25, $preco_modalidade, $faixa5);
        $preco6 = precoPorFaixa(35, $preco_modalidade, $faixa6);
        $preco7 = precoPorFaixa(45, $preco_modalidade, $faixa7);
        $preco8 = precoPorFaixa(55, $preco_modalidade, $faixa8);
        $preco9 = precoPorFaixa(65, $preco_modalidade, $faixa9);
        $preco10 = precoPorFaixa(75, $preco_modalidade, $faixa10);

        //ARRAY COM OS PREÇOS
        $precos = array(
          $preco1, $preco2, $preco3, $preco4, $preco5, $preco6, $preco7,
          $preco8, $preco9, $preco10
        );

        //SOMA OS PREÇOS E FORMATA O RETORNO
        $preco_total = array_sum($precos);
        $preco_total = number_format($preco_total, 2, ',', '.');

        $reembolso = ($dados['reembolso'] / 100) * $preco_total;
        

        $rsPlano = array(
          "id" => $dados['id'],
          "operadora" => $dados['operadora'],
          "reembolso" => $reembolso,
          "modalidade" => $dados['nome'],
          "preço" => $preco_total
        );
  
        //SE O ARRAY TIVER DADOS INSERE SEU VALOR E O NOVO PLANO
        if($rsPlanos){
          $rsPlanos = [...$rsPlanos, $rsPlano];
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
    
  }//-----------------IF VERIFICANDO AÇÃO NO FORMULÁRIO
?>