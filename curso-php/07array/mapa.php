<div class="titulo">Mapa</div>

<?php
    $dados = array(
        "idade" => 25,
        "cor" => "verde",
        "peso" => 49.8
    );

    print_r($dados);
    echo '<br>' . $dados['idade'];
    echo '<BR>' . $dados['cor'];
    echo '<BR>' . $dados['peso'];

    $lista = array(
        "a",
        "cinco" => "b",
        "c",
        8 => "d",
        "e",
        6 => "f",
        "g",
        8 => "h"
    );

    echo '<br>';
    print_r($lista);

    $lista[] = 'i';
    echo '<br>';
    print_r($lista);

    $lista['vinte'] = 'j';
    echo '<br>';
    print_r($lista);