<?php

$caixa = 15.7;

$diaTrabalho = 0.75;

$sonho = 97;

$dia = 0;

while ($caixa < $sonho) {
    $dia++;
    $caixa = $caixa + $diaTrabalho;
}

echo "trabalhei: " . $dia;
echo "<br>";
echo "meu caixa é :" . $caixa;