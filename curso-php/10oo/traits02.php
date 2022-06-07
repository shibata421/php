<div class="titulo">Traits #02</div>

<?php
trait validacao {
    public function validarString($str) {
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public function validarString($str) { // conflito de nomes
        return isset($str) && trim($str);
    }
}

class Usuario {
    use validacao, validacaoMelhor {
        validacaoMelhor::validarString insteadOf validacao; // resolve o conflito

        validacao::validarString as validacaoSimples;
    }
}

$usuario = new Usuario();
var_dump($usuario->validarString(' '));
var_dump($usuario->validacaoSimples(' '));