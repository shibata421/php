<div class="titulo">Desafio Recursividade</div>

<?php
    $array = [
        1,
        2,
        [3, 4, 5],
        6, 
        [7, [8, 9]],
        10
    ];

    function printArray($array, $nivel = 1) {
        foreach($array as $content) {
            if(is_array($content)) {
                printArray($content, $nivel + 1);
            } else {
                for ($i = 1; $i <= $nivel; $i++){
                    echo ">";
                }
                echo " $content<br>";
            }
        }
    }

    printArray($array);