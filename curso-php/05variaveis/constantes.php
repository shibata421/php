<div class="titulo">Constantes</div>

<?php
    define('TAXA_DE_JUROS', 5.9);
    echo TAXA_DE_JUROS; // constantes não possuem do $
    echo '<br>' . $TAXA_DE_JUROS . '!';
    // TAXA_DE_JUROS = 2.5;

    const NOVA_TAXA = 2.5;
    echo '<br>' . NOVA_TAXA;

    $valorVariavel = 2.8;
    // const NOVISSIMA_TAXA = $valorVariavel; // dá erro
    // define ('NOVISSIMA_TAXA', $valorVariavel); // esse dá certo
    const NOVISSIMA_TAXA = 2.8 + 1.2;
    echo '<br>' . NOVISSIMA_TAXA;

    echo '<br>' . PHP_VERSION;
    echo '<br>' . PHP_INT_MAX;
    echo '<br> Linha: ' . __LINE__;
    echo '<br>' . __FILE__;
    echo '<br>' . __DIR__;