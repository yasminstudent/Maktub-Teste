# TESTE DE ENTREVISTA PARA A EMPRESA MAKTUB

 * Autor: Yasmin P. da Silva.
 * Situação: Finalizado

## Requisitos Para a Instalação do Projeto:

 * Apache
 * PHP >= 7.4
 * MySQL8

## Para Testar o Projeto:

 * Após clonar o projeto, certifique-se de que seu banco de dados local não possui um database com o nome: dbmaktub_teste.
 * importe a base de dados que se encontra em "./bd/sql.sql" no seu banco de dados local.
 * Configure o arquivo de conexão que se encontra em "./bd/connection.php" com suas credenciais de preferência.

## Informações Sobre o Teste

### Objetivo
 * O teste funcionará como uma avaliação de suas habilidades como programadores e sua criatividade sobre um sistema até então desconhecido.

### Requisitos
 * Será necessário que se utilize PHP como base do teste. Qualquer tipo de framework será permitido, mas recomendo que usem nativo pois no nosso sistema não é utilizado. O banco de dados deverá ser MySQL.

### Projeto:
 * Deverá ser feito uma tela inicial contendo um menu com as opções “Home”, “Contato”, “Sobre nós” e “Suporte”. A disposição de todas as interfaces fica por criatividade própria.
 * Home: Haverá um slide na parte superior, um resumo sobre a empresa abaixo do slide e uma área para simulação para cotar um plano. 
   * A simulação consiste em pedir as faixas etárias das pessoas interessadas no plano (As faixas etárias são sempre nos ranges: 0-18, 19-23, 24-28, 29-33, 34-38, 39-43, 44-48, 49-53, 54-58 e 59+). 
   * Cada plano possui uma operadora e um reembolso. É possível que um mesmo plano contenha as modalidades E (Enfermaria) e A (Apartamento) sendo a modalidade A sempre mais cara que a modalidade E. 
   * Cada faixa etária tem um preço diferente e normalmente crescente de acordo com a idade. O usuário poderá escolher algum plano e esta escolha enviará um contato para o banco de dados aonde será mantido essa escolha e retornando uma mensagem que em breve um de nossos corretores entrará em contato.
 * Contato: Área de formulário simples contendo algumas informações da empresa como número de telefone, e-mail e endereço. O formulário deverá pedir o Nome, Telefone/Celular, E-mail (opcional), e Observação.
 * Sobre nós: Área contendo textos sobre a empresa podendo conter imagens, mas não sendo obrigatório.
 * Suporte: A área de suporte haverá um sistema de FAQ aonde o usuário poderá digitar sua dúvida e logo em seguida haverá tópicos relacionados com a dúvida. 
   * Exemplos de perguntas: Vocês vendem seguros de veículos? R: No momento só trabalhamos com seguros saúde, mas temos como objetivo cobrir toda a área de seguros num futuro próximo.
