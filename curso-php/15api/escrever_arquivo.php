<div class="titulo">Escrever Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'w'); // w = write
fwrite($arquivo, "Valor Inicial\n");
$str = "Segunda linha\n";
fwrite($arquivo, $str);
fclose($arquivo);

$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Novo conteúdo');
fclose($arquivo);

$arquivo = fopen('teste.txt', 'a'); // a = append
fwrite($arquivo, " com novos valores\n");
fwrite($arquivo, "Adicionando em um segundo momento");
fclose($arquivo);

ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); // x = apenas se o arquivo não existir
