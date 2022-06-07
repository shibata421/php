<div class="titulo">Argumentos e Retorno</div>

<?php
    function obterMensagem() {
        return 'Seja bem vindo(a)!';
    }

    obterMensagem();

    $m = obterMensagem();
    echo $m;
    echo '<br>' . obterMensagem();
    echo '<br>';
    var_dump(obterMensagem());

    function obterMensagemComNome($nome) {
        return "Seja bem vindo, {$nome}!";
    }

    echo '<br>' . obterMensagemComNome('Wagner');

    function soma($a, $b) {
        return $a + $b;
    }

    $x = 4;
    $y = 5;
    echo '<br>' . soma($x, $y);
    echo '<br>' . soma(45, 78);

    function trocaValor($a, $novoValor) {
        $a = $novoValor;
    }

    $variavel = 1;
    trocaValor($variavel, 3);
    echo '<br>' . $variavel;

    function trocaValorDeVerdade(&$a, $novoValor) {
        $a = $novoValor;
    }

    trocaValorDeVerdade($variavel, 5);
    echo '<br>' . $variavel;