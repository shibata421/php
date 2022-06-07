<div class="titulo">Closure e Callable</div>

<?php
    $soma1 = function($a, $b) {
        return $a + $b;
    }; // é closure

    echo $soma1(2, 3) . '<br>';
    echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; // sim
    
    // $soma1 = 1;
    // echo (is_callable($soma1) ? 'Sim' : 'Não') . '<br>'; // não
    
    function soma2($a, $b) {
        return $a + $b;
    }// não é closure
    echo (is_callable(soma2) ? 'Sim' : 'Não') . '<br>'; // sim
    
    function executar1($a, $b, $op, Callable $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    echo '<br>';
    executar1(2, 3, "+", $soma1);
    executar1(2, 3, "+", soma2);
    
    function executar2($a, $b, $op, Closure $funcao) {
        $resultado = $funcao($a, $b);
        echo "$a $op $b = $resultado<br>";
    }

    echo '<br>';
    executar2(2, 3, "+", $soma1);
    executar2(2, 3, "+", soma2); 