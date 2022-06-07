<div class="titulo">Include e Require</div>

<?php
ini_set('display_errors', 1);

echo 'Usando include com arquivo inexistente...<br>';
include('arquivo_inexistente.php'); // WARNING

echo 'Usando require com arquivo inexistente...<br>';
require('arquivo_inexistente.php'); // FATAL ERROR

echo 'Não achou mesmo...<br>';