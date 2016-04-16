<?php

/*

/**As funções que utilizaremos em todo tutorial são:
----------------------------------------------------------
fopen() - 'Abre' o arquivo para que possa ser manipulado.
fgets() - Pega uma linha do arquivo até o máximo de 1024bytes.
feof() - Durante a leitura de um arquivo, avisa se chegou ao final.
file_get_contents() - Pega todo conteúdo do arquivo aberto como uma string.
fwrite() - Escreve no arquivo.
unlink() - Apaga o arquivo indicado.

'r'    - abre somente para leitura; coloca o ponteiro no começo do arquivo.
'r+'  - abre para leitura e gravação; coloca o ponteiro no começo do arquivo.
'w'   - abre somente para gravação; coloca o ponteiro no começo do arquivo e apaga o conteúdo que já foi escrito. Se o arquivo não existir, tenta criá-lo.
'w+' - abre para leitura e escrita; coloca o ponteiro no início do arquivo e apaga o conteúdo que já foi escrito. Se o arquivo não existir, tenta criá-lo.
'a'    - abre o arquivo somente para escrita; coloca o ponteiro no fim do arquivo. Se o arquivo não existir, tenta criá-lo.
'a+'  - abre o arquivo para leitura e gravação; coloca o ponteiro no fim do arquivo. Se o arquivo não existir, tenta criá-lo.

------------------------------------------------------------------------------------------------
############################################################
*/
// Abre ou cria o arquivo bloco1.txt
// "a" representa que o arquivo é aberto para ser escrito
$fp = fopen("bloco1.txt", "r+");

// Escreve "exemplo de escrita" no bloco1.txt

$quebra = "\r\n";
$linha="teste ".$quebra;
$escreve = fwrite($fp, $linha);

// Fecha o arquivo
fclose($fp); 

/**Funções extras:
----------------------------------------------------------
explode() - divide uma string.
opendir() - abre um diretório.
readdir() - lê os arquivos de um diretório.
closedir() - fecha um diretório.
file_exists() - verifica se um arquivo existe.

 */

