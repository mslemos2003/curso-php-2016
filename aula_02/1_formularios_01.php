<?php
	/* METODO DE REQUISIÇÃO GET
	--------------------------------------
	$dados = [
	'nome' => $_GET['nome'],
	'email' => $_GET['email']
	];
	var_dump($dados);
	*/

	/* METODO DE REQUISIÇÃO POST
	--------------------------------------
	$dados = [
	'nome' => $_POST['nome'],
	'email' => $_POST['email']
	];
	var_dump($dados);
	*/
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Formularios 01</title>
</head>
<body>
	<style>

	</style>
	<form action="" method="GET">
		<label for="nome">
			Nome:
			<input type="text" name="nome">
		</label>
		<br>
		<br>
		<label for="email">
		Email:
			<input type="text" name="email" id="">
		</label>
		<button type="submit">Enviar</button>
	</form>

</body>
</html>