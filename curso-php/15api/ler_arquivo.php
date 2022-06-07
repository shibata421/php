<div class="titulo">Ler Arquivo</div>

<?php
$arquivo = fopen('teste.txt', 'r');
echo fread($arquivo, 10);
echo '<br>';
echo fread($arquivo, 10); // recomeça de onde parou
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
$tamanho = filesize('teste.txt');
echo $tamanho . '<br>';
echo fread($arquivo, filesize('teste.txt'));
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
echo fgets($arquivo) . '<br>'; // lê uma linha
echo fgets($arquivo) . '<br>'; // lê a próxima linha
var_dump(fgets($arquivo)); // false
echo fgets($arquivo) . '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r');
while(!feof($arquivo)) {
    echo fgetc($arquivo); // pega por caracteres
}
echo '<br>';
fclose($arquivo);

echo '<hr>';

$arquivo = fopen('teste.txt', 'r+'); // abre para leitura e escrita
echo fgets($arquivo) . '<br>';
echo fgets($arquivo) . '<br>';
fwrite($arquivo, "\nAdicionando durante a leitura");
fclose($arquivo);

echo "Fim!";