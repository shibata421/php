<div class="titulo">Função e Escopo</div>

<?php
    function imprimirMensagem() {
        echo 'Olá! ';
        echo 'Até a próxima!<br>';
    }

    imprimirMensagem();
    imprimirMensagem();
    imprimirMensagem();

    $variavel = 1;
    function trocaValor() {
        $variavel = 2;
        echo "Durante a função: $variavel <br>";
    }
    
    echo "Antes: $variavel <br>";
    trocaValor();
    echo "Depois: $variavel <br>";
    
    function trocaDeVerdade() {
        global $variavel;
        $variavel = 3;
        echo "Durante a função: $variavel <br>";
    }

    echo "Antes: $variavel <br>";
    trocaDeVerdade();
    echo "Depois: $variavel <br>";

    var_dump(trocaDeVerdade()); //null