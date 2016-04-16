<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Calculadora</title> 
    </head>
    <body>
        <style>
            body{background: #eee}
            form{margin: 10%;width: 30%;}
            form label input{margin: 10px 0 !important}
        </style>
        <form action="">
            <legend>Calculadora</legend>
            <label for="val1">
                <input name="val1" type="number" placeholder="Valor 1">
            </label>
            <label for="val2">
                <input name="val2" type="number" placeholder="Valor 2"> 
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