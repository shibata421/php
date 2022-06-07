<div class="titulo">Valor VS Referência</div>

<?php
    $variavel = 'valor inicial';
    echo $variavel;

    // Atribuição por valor
    $variavelValor = $variavel;
    echo "<br>$variavelValor";
    $variavelValor = 'novo valor';
    echo "<br>$variavel";
    echo " $variavelValor";

    // Atribuição por referência
    $variavelReferencia = &$variavel;
    $variavelReferencia = 'mesma referencia';
    echo "<br>$variavel";
    echo " $variavelReferencia";