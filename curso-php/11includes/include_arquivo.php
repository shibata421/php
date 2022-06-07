<?php
echo 'Carregando: include_arquivo<br>';

$variavel = 'Estou definida';

if(!function_exists(soma)) { // evita que haja problema de existir duas funções com o mesmo nome
    function soma($a, $b) {
        return $a + $b;
    }
}