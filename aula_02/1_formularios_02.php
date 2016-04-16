<?php
$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_STRING);
$idade = filter_input(INPUT_GET, 'idade', FILTER_VALIDATE_INT);
$email = filter_input(INPUT_GET, 'email', FILTER_VALIDATE_EMAIL);
if (!empty($nome)):
    var_dump($nome);
    var_dump($idade);
    var_dump($email);

endif;
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
                Idade:
                <input type="text" name="idade" >
            </label>
            <br>
            <br>
            <label for="email">
                E-mail:
                <input type="text" name="email" >
            </label>

            <button type="submit">Enviar</button>
        </form>

    </body>
</html>
