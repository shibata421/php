<div class="titulo">Include</div>

<?php
echo 'Executei esta linha do arquivo include<br>';
include('include_arquivo.php');
include('include_arquivo.php'); // pode fazer com que uma função exista duas vezes, causando erro

echo soma(3, 8) .'<br>';
echo "O conteúdo da variável é '{$variavel}'";