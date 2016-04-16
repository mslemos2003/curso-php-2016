<?php
$dados = filter_input_array(INPUT_GET, FILTER_DEFAULT);

if (!empty($dados)):
    var_dump($dados);
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
