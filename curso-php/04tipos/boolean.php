<div class="titulo">Tipo Booleano</div>

<?php
    echo TRUE; // 1
    echo '<br>';
    echo FALSE; // não mostra nada

    echo '<br>' . var_dump(true);
    echo '<br>' . var_dump(false);
    echo '<br>' . var_dump('false');
    echo '<br>' . is_bool(false);
    echo '<br>' . is_bool('true');

    // fazer as regras de conversão
    echo '<p>Regras:</p>';
    echo '<br>' . var_dump((bool) 0); // apenas zero é false nos números
    echo '<br>' . var_dump((bool) 20);
    echo '<br>' . var_dump((bool) -1);
    echo '<br>' . var_dump((bool) 0.0);
    echo '<br>' . var_dump((bool) 0.00000001);
    echo '<br>' . var_dump((bool) ""); //false
    echo '<br>' . var_dump((bool) "0"); //false
    echo '<br>' . var_dump((bool) " "); // todo o resto é true
    echo '<br>' . var_dump((bool) "00");
    echo '<br>' . var_dump((bool) "false");

    echo '<br>' . var_dump(!!"false");