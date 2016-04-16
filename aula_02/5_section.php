<?php
//Para abrir a sessão é só usar esse comando no PHP:
session_start(); // Inicia a sessão


//Depois de iniciada a sessão você pode definir valores dentro dela dessa forma:
$_SESSION['usuario'] = 'Thiago';

//E quando você precisar exibir o valor salvo na sessão (provavelmente em outras páginas), é só fazer assim:
echo $_SESSION['usuario']; // Resultado: Thiago


//Você pode salvar quantos valores quiser, pode re-definir os valores e usa-los em echos, argumentos de funções e da forma que preferir.
//Para deletar uma variável específica da sessão você usa o unset():
unset($_SESSION['usuario']); // Deleta uma variável da sessão

//Você também pode destruir toda a sessão de uma só vez, eliminando todas as variáveis salvas nela:

session_destroy(); // Destrói toda sessão