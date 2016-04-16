<?php
$timezones = array(
	'AC' => 'America/Rio_branco',   'AL' => 'America/Maceio',
	'AP' => 'America/Belem',        'AM' => 'America/Manaus',
	'BA' => 'America/Bahia',        'CE' => 'America/Fortaleza',
	'DF' => 'America/Sao_Paulo',    'ES' => 'America/Sao_Paulo',
	'GO' => 'America/Sao_Paulo',    'MA' => 'America/Fortaleza',
	'MT' => 'America/Cuiaba',       'MS' => 'America/Campo_Grande',
	'MG' => 'America/Sao_Paulo',    'PR' => 'America/Sao_Paulo',
	'PB' => 'America/Fortaleza',    'PA' => 'America/Belem',
	'PE' => 'America/Recife',       'PI' => 'America/Fortaleza',
	'RJ' => 'America/Sao_Paulo',    'RN' => 'America/Fortaleza',
	'RS' => 'America/Sao_Paulo',    'RO' => 'America/Porto_Velho',
	'RR' => 'America/Boa_Vista',    'SC' => 'America/Sao_Paulo',
	'SE' => 'America/Maceio',       'SP' => 'America/Sao_Paulo',
	'TO' => 'America/Araguaia',     
	);

date_default_timezone_set($timezones['RO']);

// obtem o data time zone atual
$script_tz = date_default_timezone_get();

$data = date('D');
$mes = date('M');
$dia = date('d');
$ano = date('Y');

$semana = array(
	'Sun' => 'Domingo', 
	'Mon' => 'Segunda-Feira',
	'Tue' => 'Terca-Feira',
	'Wed' => 'Quarta-Feira',
	'Thu' => 'Quinta-Feira',
	'Fri' => 'Sexta-Feira',
	'Sat' => 'Sábado'
	);

$mes_extenso = array(
	'Jan' => 'Janeiro',
	'Feb' => 'Fevereiro',
	'Mar' => 'Marco',
	'Apr' => 'Abril',
	'May' => 'Maio',
	'Jun' => 'Junho',
	
	'Jul' => 'Julho',
	'Aug' => 'Agosto',
	'Nov' => 'Novembro',
	'Sep' => 'Setembro',
	'Oct' => 'Outubro',
	'Dec' => 'Dezembro'
	);

echo "Hora: ". $semana["$data"] . ", {$dia} de " . $mes_extenso["$mes"] . " de {$ano}";
echo "<br>";
echo date("H:i:s");
?>