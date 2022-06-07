<div class="titulo">Arrays Constantes</div>

<?php
    const FRUTAS = array('laranja', 'abacaxi');
    // FRUTAS[0] = 'banana'; // os elementos também não podem ser alterados
    // FRUTAS[] = 'banana';
    echo FRUTAS[0]; // só é possível ler o array

    const CARROS = ['fiat' => 'uno', 'ford' => 'fiesta'];
    // CARROS['BMW'] = '325i';
    echo '<br>' .  CARROS['fiat'];
    
    define('CIDADES', array('Belo Horizonte', 'Recife'));
    // CIDADES[0] = 'Rio de Janeiro';
    echo '<br>' . CIDADES[1];