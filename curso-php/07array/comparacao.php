<div class="titulo">Comparação Arrays</div>

<?php
    $arr1 = ['nome' => 'Maria', 'idade' => 20];
    $arr2 = ['nome' => 'Maria', 'idade' => 20];
    var_dump($arr1 == $arr2);
    var_dump($arr1 === $arr2);
    
    $arr3 = ['idade' => 20, 'nome' => 'Maria'];
    echo '<br>';
    var_dump($arr1 == $arr3); // ordem não influencia
    var_dump($arr1 === $arr3); // ordem influencia
    var_dump($arr1 != $arr3);
    var_dump($arr1 !== $arr3);
    
    $arr4 = ['idade' => '20', 'nome' => 'Maria'];
    echo '<br>';
    var_dump($arr1 == $arr4); // tipo não influencia
    var_dump($arr1 === $arr4); // tipo influencia