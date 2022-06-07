<div class="titulo">Desafio Pi</div>

<?php
    echo pi();
    $pi = 3.14;
    $precisao = 0.01; // 1%
    $diferenca = pi() - $pi;
    $difPercent = round(abs($diferenca * 100), 2);

    if($diferenca**2 < $precisao**2) {
        echo "<br>Iguais!";
    } else {
        echo "<br>Diferentes...";
    }

    echo "<br>A diferenca entre os dois números é de {$difPercent}%";

    // Operador Relacional
    $piErrado = 2.8;