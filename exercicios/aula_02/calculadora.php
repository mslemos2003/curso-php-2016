<?php
// Recuperação de Dados
$valor1 = filter_input(INPUT_POST, 'val1', FILTER_VALIDATE_FLOAT);
$valor2 = filter_input(INPUT_POST, 'val2', FILTER_VALIDATE_FLOAT);
$mantemCampo1 = !empty($valor1) ? $valor1 : null;
$mantemCampo2 = !empty($valor2) ? $valor2 : null;

 

if (!empty($valor1) && !empty($valor2)):
    //executo a operação


endif;

// Declaração de Funções
?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title> 
    </head>
    <body>
        <style>
            *{margin: 0;padding: 0;}
            body{background: #eee}
            form{margin: 10%;width: 30%;}
            form label input{margin: 10px 0 !important}
        </style>
        <form action="" method="POST">
            <legend>Calculadora</legend>
            <label for="val1">
                <input name="val1" type="number" min="0" value="<?= $mantemCampo1 ?>" placeholder="Valor 1">
            </label>
            <label for="val2">
                <input name="val2" type="number" min="0" value="<?= $mantemCampo2 ?>" placeholder="Valor 2"> 
            </label>
            <label>
                <select name="operacacao">
                    <option value="1">Soma</option>
                    <option value="2">Subtração</option>
                    <option value="3">Divisão</option>
                    <option value="4">Multiplicação</option>
                </select>
            </label>
            <br>	
            <br>	
            <button>Calcular</button>
        </form>

    </body>
</html>