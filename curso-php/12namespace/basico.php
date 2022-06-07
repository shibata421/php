<?php namespace contexto; 
// a definição do namespace deve vir antes de qualquer outra coisa
?>

<div class="titulo">Exemplo Básico</div>

<?php
echo __NAMESPACE__ . '<br>'; // ele dá o nome do namespace
const constante1 = 123; // aqui, a constante já está associada ao namespace
define('constante2', 234); // aqui a constante foi associada à raiz
define('contexto\constante2', 1234); // com define, para associar com namespace, é necessário informar
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);

echo constante1 . '<br>';
echo constante2 . '<br>'; // acessa o valor dentro do namespace
echo \constante2 . '<br>'; // acessa o que está na raiz se existir
echo \contexto\constante3 . '<br>'; // acessa o caminho absoluto
// echo contexto\constante3 . '<br>'; // acessa o caminho relativo (\contexto\contexto\constante3)
echo constant(__NAMESPACE__ . '\constante3') . '<br>';
// echo constante4 . '<br>';
echo \outro_contexto\constante4 . '<br>';

function soma($a, $b) {
    return $a + $b;
}

echo \contexto\soma(1,2) . '<br>'; 
echo soma(1,2) . '<br>'; 

function strpos($str, $text) {
    echo "Buscando o texto '{$texto} em '{$str}'<br>";
    return 1;
}

echo strpos('Texto genérico para busca', 'busca') . '<br>';
echo \strpos('Texto genérico para busca', 'busca') . '<br>'; // usa a função da API do PHP