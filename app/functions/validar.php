<?php
    
function validarCPF($cpf) {
  // Verifica se o número foi informado
  

  if (empty($cpf)) {
    
    return false;
  }


  // Elimina possível máscara do CPF
  $cpf = preg_replace('/[^0-9]/', '', $cpf);


  // Verifica se o número de dígitos informados é igual a 11
  if (strlen($cpf) != 11) {
    
    return false;
  }
 

  // Verifica se todos os dígitos são iguais
  if (str_repeat($cpf, 11) === $cpf) {
    return false;
  }


  // Calcula os dígitos verificadores
  $digitos = array();
  for ($i = 0; $i < 9; $i++) {
    $digitos[] = $cpf[$i] * (10 - $i);
  }
  $soma = array_sum($digitos);
  $digito1 = $soma % 11;
  if ($digito1 < 2) {
    $digito1 = 0;
  } else {
    $digito1 = 11 - $digito1;
  }
  $digitos[] = $digito1;
  for ($i = 0; $i < 10; $i++) {
    $digitos[] = $cpf[$i] * (11 - $i);
  }
  $soma = array_sum($digitos);
  $digito2 = $soma % 11;
  if ($digito2 < 2) {
    $digito2 = 0;
  } else {
    $digito2 = 11 - $digito2;
  }

  
  // Verifica se os dígitos verificadores são iguais aos informados
  if ($cpf[9] != $digito1 && $cpf[10] != $digito2) {

    return false;
  }

  // O CPF é válido
  return true;

}
 ?>