<div class="titulo">Olá, PHP</div>

<h2>Exemplo A</h2>
<?php 
    echo 'Olá, <br> ';
    echo "\n"; // Não quebra linha porque, no HTML, a quebra de linha é <br> 
    echo "Mundo!" // Não precisa de ; na última linha de sentença
?>

<h2>Exemplo B</h2>
<?= "Outra forma de me expressar" // com essa tag, não é necessário o uso de echo?>

<?php
    phpinfo(); // a última tag não precisa fechar