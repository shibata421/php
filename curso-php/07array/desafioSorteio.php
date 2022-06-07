<div class="titulo">Desafio Sorteio</div>
<style>
    h1 {
        display: flex;
        justify-content: center;
    }
</style>
<?php
    $nomes = ["Elza", "Rapunzel", "Branca de Neve", "Cinderela"];
    $indice = array_rand($nomes);
    echo "<h1>${nomes[$indice]}</h1>";
