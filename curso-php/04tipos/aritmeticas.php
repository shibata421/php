<div class="titulo">Operações Aritméticas</div>


<?php
    echo 1 + 1, '<br>';
    var_dump(1 + 1);
    echo '<br>';
    var_dump(1 + 1.0);
    echo "<br>";
    
    echo 1 + 2.5, '<br>';
    echo 10 - 2, '<br>';
    echo 2 * 5, '<br>';
    echo 7 / 4, '<br>'; // faz a divisão float
    echo intdiv(7, 4), '<br>'; // faz a divisão int
    echo round(7 / 4), '<br>';
    echo 7 % 4, '<br>';
    echo 7 / 0, '<br>'; // INF
    // echo intdiv(7, 0); # erro!
    echo 4 ** 2; // exponenciação

    
?>