<?php

/**
 * Entrada do número do expectador
 */
$numero = 3;

  switch ($numero1){
  case 1:
    $mensagem = 'uma bicicleta';
    break;
  case 2:
    $mensagem = '20 mil reais em barras de ouro';
    break;
  case 3:
    $mensagem = 'uma casa';
    break;
  case 4:
    $mensagem = 'um conjunto de panelas';
    break;
  case 5:
    $mensagem = 'um carro zero';
    break;
  default:
    $mensagem = 'nada, infelizmente';
}

/**
 * Retornando a mensagem
 */
echo "Parabéns o seu prêmio foi: {$mensagem}";

?>