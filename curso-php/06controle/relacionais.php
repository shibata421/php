<div class="titulo">Operadores Relacionais</div>
<style>
    p {
        margin-bottom: 0px;
    }

    hr {
        margin-top: 0px;
    }
</style>
<?php
    var_dump(1 == 1);
    var_dump(1 > 1);
    var_dump(1 <= 1);
    var_dump(1 <> 1);
    var_dump(1 != 1);

    var_dump(1 == '1');
    var_dump(1 === '1');
    var_dump(1 != '1');
    var_dump(1 !== '1');

    echo "<p>Relacionais no If/Else</p><hr>";
    $idade = 25;
    if($idade < 18) {
        echo "Menor de idade<br>";
    } else if ($idade < 65) {
        echo "Adulto";
    } else {
        echo "Idoso";
    }

    echo '<p>Spaceship</p><hr>';
    var_dump(5 <=> 3); // int(1)
    var_dump(50 <=> 50); // int(0)
    var_dump(5 <=> 50); // int(-1)
    
    echo '<p>Valores podem ser verdadeiro ou falso</p><hr>';
    var_dump(!!5);
    var_dump(!!0);
    var_dump(!!"");
    var_dump(!!" ");