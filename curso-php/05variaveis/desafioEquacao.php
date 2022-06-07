<div class="titulo">Desafio Equação</div>

<?php
    $a = 6 * (3 + 2);
    $b = 3 * 2;
    $c = (1 - 5) * (2 - 7);
    $d = 2;
    $e = 10;

    $primeiraParte = ($a ** 2) / $b;
    $segundaParte = ($c / $d) ** 2;
    echo "A primeira parte é " . $primeiraParte . "<br>";
    echo "A segunda parte é " . $segundaParte . '<br>';

    $dividendo = ($primeiraParte - $segundaParte) ** 3;
    $divisor = $e ** 3;

    $resultado = $dividendo / $divisor;

    echo "O resultado é " . $resultado;
    