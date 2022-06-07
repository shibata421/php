<div class="titulo">Argumentos Padrão</div>

<?php
    function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente') {
        echo "Bem vindo, $nome $sobrenome!<br>";
    }

    saudacao();
    saudacao(null);
    saudacao(null, null);
    saudacao('Mestre', 'Supremo');
    
    function anotarPedido($comida, $bebida = 'Água') {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }
        
    anotarPedido('Hamburguer');
    anotarPedido('Pizza', 'Refrigerante');
        
    function anotarPedido2($bebida = 'Água', $comida) {
        echo "Para comer: $comida <br>";
        echo "Para beber: $bebida <br>";
    }

    // anotarPedido2('Hamburguer');
    anotarPedido2('Refrigerante', 'Hamburguer');