<div class="titulo">Desafio Impressão</div>

<?php
    $array = [
        'AAA',
        'BBB',
        'CCC',
        'DDD',
        'EEE',
        'FFF'
    ];

    for($i = 0; $i < count($array); $i++){
        if($i % 2 === 0) {
            echo "$array[$i]<br>";
        }    
    }

    echo '<hr>';

    foreach($array as $indice => $valores) {
        if($indice % 2 === 0) {
            echo "$valores<br>";
        }
    }