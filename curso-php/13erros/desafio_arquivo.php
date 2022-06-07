<?php namespace desafio;

class NaoInteiroException extends \Exception {

}

function intdiv($numerador, $denominador) {
    if ($denominador === 0) {
        throw new \DivisionByZeroError('Não pode dividir por zero');
    }

    $resto = $numerador % $denominador;
    if ($resto !== 0) {
        throw new NaoInteiroException('O resultado não é inteiro');
    }

    return $numerador / $denominador;
}