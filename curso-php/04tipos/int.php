<div class="titulo">Tipo Inteiro</div>

<?php
    echo 11;
    echo '<br>';

    var_dump(11);
    echo '<br>';

    echo PHP_INT_MAX, "<br>";
    echo PHP_INT_MIN, "<br>";
    echo 011, "<br>"; 
    /* 
        O zero na frente faz com que seja um número na base octal
        11 = 1 * 8^1 + 1 * 8^0 = 9

        Na base octal, os números vão de 0 a 7, já que o número 8 pode ser escrito como 10
    */
    echo 0b11, "<br>"; // base binária
    echo 0x11, "<br>"; // base hexadecimal
