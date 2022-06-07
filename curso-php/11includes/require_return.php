<div class="titulo">Require e Return</div>

<?php
$valorRetorno = require('return_usado.php');
echo "$valorRetorno<br>";
echo "$variavelRetornada<br>"; // variável criada no arquivo requerido

echo __DIR__ . '<br>';

$valorRetorno2 = require(__DIR__ . '/return_naousado.php');
var_dump($valorRetorno2);
echo "$valorRetorno2<br>";
echo "$variavelDeclarada<br>";