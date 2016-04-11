<?php
    
$array = [
    "liniker",
    "julio",
    'teste' => "caio",
    'leandro',
    'igor'
];

for ($i = 0; $i < count($array); $i++):
    echo $array[$i] . "-" . $i;
    echo "<br>";
endfor;


foreach ($array as $k => $v):
    echo $k . " - " . $v;
    echo "<br>";
endforeach;

