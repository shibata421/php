<div class="titulo">Variáveis</div>

<?php
$numeroA = 13;
echo $numeroA;
echo '<br>';
var_dump($numeroA);

echo '<br>';
$a = 3;
$b = 16;
$soma = $a + $b;
echo $soma;

echo '<br>';
echo isset($soma);

echo '<br>';
unset($soma);
echo var_dump($soma);

$variavel = "Agora sou uma string";
echo '<br>' . $variavel;

// Nomes de variável
$var = 'valida';
$var2 = 'valida';
$VAR3 = 'valida';
$_var_4 ='valida';
$vâr5 = 'valida'; // evite
// $6var = 'invalida';
// $%var7 = 'invalida';
// $var8% = 'invalida';

echo '<br>';
var_dump($_SERVER["HTTP_HOST"]);