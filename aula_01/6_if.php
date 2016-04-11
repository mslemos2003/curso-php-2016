<?php

/*
  1 nota1 = 0,4 ($nota * 0,4)
  2 nota2 = 0,6 ($nota * 0,6)
  3 nota3 =  $nota > nota2
 */
$nota1 = 6;
$nota2 = 4;
$nota3 = 3;
$media = 6;

$ap = "Aprovado com sucesso !";
$rp = "Infelizmente reprovado";

$n1 = $nota1 * 0.4;
$n2 = $nota2 * 0.6;
$n3 = $nota3 * 0.6;
$calcfinal = $n1 + $n2;

if ($calcfinal >= $media):
    echo $ap;
else:
    if ($n1 < $n2 || ($n1 + $n3) < $media):
        echo $rp;
    else:
        echo $ap;
    endif;
endif;
echo "<hr>";
echo $n1 . "<br>";
echo $n2 . "<br>";
echo $n3 . "<br>";
echo "<hr>";
echo "Média sem p3: $calcfinal";
echo "<hr>";

if ($n3 <= $n1 && $n3 <= $n2):
    echo "Media final $calcfinal";
else:
    $media1 = $n3 + $n1;
    $media2 = $n3 + $n2;
    if ($media1 > $media2):
        echo $media1;
    else:
        echo ($nota3 * 0.4) + $n2;
    endif;
    
endif;

