<?php
/**
is_array($array)
A função is_array serve para verificar se uma determinada variável é um array. Em caso afirmativo a função retorna true, senão retorna false.
*/
$array = array('laranja', 'banana');
 
if(is_array($array)){
    echo 'É array';
}
	//Escreve: "É array"
/*
------------------------------------------------------
in_array($valor, $array)

Verifica se um determinado valor existe em alguma posição do array. Deve ser passado 2 parâmetros (o valor a ser buscado e o array que deve ser pesquisado). Retorna true se existir o valor e false caso contrário.
*/
$array = array('pêra', 'uva', 'melão');
 
if(in_array('uva', $array)){
    echo 'Valor encontrado';
}
//Escreve: "Valor encontrado"
/*
---------------------------------------------------------------
array_keys($array)

Retorna um novo array com as chaves (índices) do array passado como parâmetro.
*/
$array['cidade'] = "Londres";
$array['pais'] = "Inglaterra";
 
$keys = array_keys($array);
print_r($keys);
 
/* Retorna
(
    [0] => cidade
    [1] => pais
)
*/
/*
----------------------------------------------------
array_values($array)
Retorna um novo array com os valores do array passado como parâmetro.
*/
$array['cidade'] = "Londres";
$array['pais'] = "Inglaterra";
 
$values = array_values($array);
print_r($values);
 
/* Retorna
(
    [0] => Londres
    [1] => Inglaterra
)
*/
/*
-----------------------------------------------------
array_count_values($array)

Retorna um novo array onde os índices são os valores do array passado como parâmetro e os valores são o número de ocorrências de cada valor.
*/
$array = array('laranja', 'banana', 'maçã', 'laranja');
print_r(array_count_values($array));
/* Retorna
(
    [laranja] => 2
    [banana] => 1
    [maçã] => 1
)
*/
/*
------------------------------------------------------------------
array_merge($array1, $array2)

Agrega o conteúdo dos dois arrays passados como parâmetro e gera um novo array com todos os valores.
*/
$array1 = array('maça', 'melão', 'goiaba');
$array2 = array('laranja', 'banana', 'melancia');
 
print_r(array_merge($array1, $array2));
/* Retorna
(
    [0] => maça
    [1] => melão
    [2] => goiaba
    [3] => laranja
    [4] => banana
    [5] => melancia
)
*/
/*
------------------------------------------------------
array_pop($array)
Exclui a última posição do array passado como parâmetro
*/
$array = array('banana', 'melancia', 'laranja');
array_pop($array);
//Exclui o elemento "laranja"

/*
-----------------------------------
array_shift($array)

Exclui a primeira posição do array passado como parâmetro
*/
$array = array('banana', 'melancia', 'laranja');
array_shift($array);
//Exclui o elemento "banana"

/*
array_combine($keys, $values)

Mescla os dois arrays passados como parâmetro e gera um novo array onde as chaves serão os valores do primeiro array e os valores os valores do segundo array.
*/

$keys = array('nome', 'email', 'site');
$values = array('Rafael', 'rafaelwendel@hotmail.com', 'www.rafaelwendel.com');
print_r(array_combine($keys, $values));
/* Retorna
(
    [nome] => Rafael
    [email] => rafaelwendel@hotmail.com
    [site] => www.rafaelwendel.com
)
*/