<?php  
  if(isset($_POST['btnrange'])) //-----------------IF VERIFICANDO AÇÃO NO FORMULÁRIO
  {
  
    //IMPORTE DO ARQUIVO DE CONEXÃO
    require_once('connection.php');
    $connection = connectionMysql();

    //SELECT COM OS DADOS DO PLANO
    $sql = 
    "SELECT tblplano.*, tblmodalidade.nome, tblmodalidade.percentual 
    FROM tblplano_modalidade 
    INNER JOIN tblplano ON tblplano.id = tblplano_modalidade.idplano 
    INNER JOIN tblmodalidade ON tblmodalidade.id = tblplano_modalidade.idmodalidade;";

    //RESGATA O RÁDIO
    $percentual_faixa = $_POST['rdorange'];

    $select = mysqli_query($connection, $sql);

    if($select){//-----------------IF VERIFICANDO SELECT

      if(!isset($_SESSION)){
        session_start();
      }

      foreach($select as $dados){ //-----------------FOREACH PERCORRENDO SELECT

        $percentual_modalidade = $dados['percentual'];

        /* 
          CALCULA O VALOR DO PREÇO BASE + A PORCENTAGEM ADICIONAL DA MODALIDADE
          E DA FAIXA ETÁRIA
        */
        $preco = ((( $percentual_faixa +  $percentual_modalidade) /100)
        * $dados['preco_base']) + $dados['preco_base']; 

        $reembolso = ($dados['reembolso'] / 100) * $preco;
        

        $rsPlano = array(
          "id" => $dados['id'],
          "operadora" => $dados['operadora'],
          "reembolso" => $reembolso,
          "modalidade" => $dados['nome'],
          "preço" => $preco
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