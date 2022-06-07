<div class="titulo">Error Handler</div>

<?php
ini_set('display_errors', 1);
echo 4 / 0 . '<br>'; // warning
echo '<br>';

error_reporting(E_ERROR); // só mostra erros, mas não warnings
echo 4 / 0 . '<br>';
echo '<br>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
echo '<br>';

error_reporting(~E_ALL); // negação bit a bit
echo 4 / 0 . '<br>';
echo '<br>';

error_reporting(E_ALL);
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

function filtrarMensagem($errno, $errstring) {
    $text = 'include';
    return !!stripos(" $errstring", $text);
}

set_error_handler('filtrarMensagem', E_WARNING);

echo '<hr>';
echo 4 / 0 . '<br>';
include 'arquivo_inexistente.php';

echo '<hr>';

restore_error_handler();

echo 4 / 0 . '<br>' ;
include 'arquivo_inexistente.php';