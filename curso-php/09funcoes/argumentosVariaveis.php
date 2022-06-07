<div class="titulo">Argumentos Variáveis</div>

<?php
    function soma($a, $b) {
        return $a + $b;
    }

    echo soma(4, 5, 6, 7, 8, 9) . '<br>'; // só considera os primeiros dois args
    
    function somaCompleta(...$numeros){
        $soma = 0;
        foreach($numeros as $numero) {
            $soma += $numero;
        }
        return $soma;
    }

    echo somaCompleta(4, 5, 6, 7, 8, 9) . '<br>';

    $array = [6, 7, 8];
    echo somaCompleta(...$array);

    function membros($titular, ...$dependentes) {
        echo "Titular: $titular <br>";
        if($dependentes) {
            foreach($dependentes as $dep) {
                echo "Dependente: $dep <br>";
            }
        }
    }

    echo '<br>';
    membros ("Ana Silva", 'Pedro', 'Rafaela', 'Amanda');

    echo '<br>';
    membros('Roberto', 'Junior');