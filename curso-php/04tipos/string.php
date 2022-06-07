<div class="titulo">Tipo String</div>

<?php
    echo 'Eu sou uma string';
    echo '<br>';
    var_dump('Eu também'); // 9 caractéres, mas aparece 10 por causa do acento
    echo '<br>';
    
    // concatenação
    echo 'Nós também' . " somos";
    echo '<br>', "Também aceito", " vírgulas";
    
    echo '<br>';
    echo "'Teste' " . ' "Teste"' . ' \'Teste\'' . " \"Teste\"" . " \\";

    print("<br>Também existe a função print!");
    print "<br Também existe a função print!" ;

    // Algumas funções
    echo '<br>' . strtoupper('maximizado');
    echo '<br>' . strtolower('MINIMIZADO');
    echo '<br>' . ucfirst('só a primeira letra');
    echo '<br>' . ucwords('todas a palavras');
    echo '<br>' . strlen('Quantas letras?');
    echo '<br>' . strlen('Eu também'); // ainda dá dez
    echo '<br>' . mb_strlen('Eu também', "utf-8"); // aqui dá nove
    echo '<br>' . substr('Só uma parte mesmo', 7, 6);
    echo '<br>' . str_replace('isso', 'aquilo', 'Trocar isso');