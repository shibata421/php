<div class="titulo">Conversões</div>

<?php
    echo is_int(PHP_INT_MAX);

    // int para float
    echo '<br>';
    var_dump(PHP_INT_MAX + 1); // passa para float
    echo '<br>';
    var_dump(1 + 1.0); // resultado é float
    echo '<br>';
    var_dump((float) 3); // casting

    //float para int
    echo '<p>Float para int</p>';
    var_dump((int) 2.8);
    echo '<br>';
    var_dump(intval('111010101101', 2)); // o segundo valor mostra a base
    echo '<br>';
    var_dump(round(2.8));

    // operações com string
    echo '<p>Strings</p>';
    var_dump(3 + "2"); // 5
    echo '<br>';
    var_dump("3" + 2);
    echo '<br>';
    var_dump("3" . 2); //32
    echo '<br>', is_string("3" . 2);
    echo '<br>', is_string("3" + 2); //false
    var_dump(1 + "cinco"); //1
    echo '<br>';
    var_dump(1 + "5 cinco"); //6
    echo '<br>';
    var_dump(1 + "cinco 5");
    echo '<br>';
    var_dump(1 + "2 + 5"); //3
    echo '<br>';
    var_dump(1 + "3.2");
    echo '<br>';
    var_dump(1 + "-3.2e2");
    echo '<br>';
    var_dump((int) "10.5");
    echo '<br>';
    var_dump((float) "10.5");