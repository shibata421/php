<div class="titulo">Desafio intdiv</div>

<?php
require_once 'desafio_arquivo.php';
use function \desafio\intdiv;
use \desafio\NaoInteiroException;

$testes = [[8, 2], [8, 3], [8, 0]];
foreach($testes as $paresTestados) {
    try {
        $resultado = intdiv($paresTestados[0], $paresTestados[1]);
        echo $resultado . '<br>';
    } catch(DivisionByZeroError $e) {
        echo $e->getMessage() . "<br>";
    } catch (NaoInteiroException $e) {
        echo $e->getMessage() . "<br>";
    }
}

echo \intdiv(8, 3);