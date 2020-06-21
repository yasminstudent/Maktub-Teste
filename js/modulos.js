//RECEBE O CARACTER DIGITADO E O TIPO ACEITO
function validarEntrada(caracter, tipoAceito) {
  if (window.event) var asc = caracter.charCode;
  else var asc = caracter.which;

  var tipo = tipoAceito;

  //verifica o tipo aceito
  if (tipo == "string") {
    //valida apenas a digitação de letras
    if (asc >= 48 && asc <= 57) return false;
  } else if (tipo == "numeric") {
    //valida apenas a digitação de números
    if (asc < 48 || asc > 57) return false;
  }
}

function mascaraFone(obj, caracter) {
  //VALIDA A ENTRADA
  if (validarEntrada(caracter, "numeric") == false) return false;
  else {
    var input = obj.value; //value da input
    var id = obj.id; //id da input
    var resultado = input; //input

    //INSERE OS CARACTERES PARA A MÁSCARA DE ACORDO COM A QUANTIDADE
    //DE VALORES DIGITADOS
    if (id == "telefone") {
      if (input.length == 0) resultado = "(";
      else if (input.length == 4) resultado += ") ";
      else if (input.length == 10) resultado += "-";
      else if (input.length == 15) return false;
    } else if (id == "celular") {
      if (input.length == 0) resultado = "(";
      else if (input.length == 4) resultado += ") ";
      else if (input.length == 11) resultado += "-";
      else if (input.length == 16) return false;
    }

    document.getElementById(id).value = resultado;
  }
}
