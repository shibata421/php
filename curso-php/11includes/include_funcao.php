<div class="titulo">Include em Função</div>

<?php
echo 'Carregando: include_funcao<br>';

function carregarArquivo() {
    include('include_arquivo.php'); // só será possível acessar o atributo localmente

    echo $variavel . '<br>';
    echo soma(2, 5) . '!<br>';
}

echo 'Novamente no arquivo include_funcao<br>';
// echo soma(1, 8) . '!<br>';
carregarArquivo();
echo "Variável = '{$variavel}'.";
echo '<br>' . soma(3, 8); // no entanto, a função soma está disponível globalmente
