<div class="titulo">Gerenciando Sessão</div>

<?php
// session_id('954a3e8de15656cac200e2603c4b8241');
session_start();
echo session_id(); // 954a3e8de15656cac200e2603c4b8241

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>' . $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0) {
    session_regenerate_id(); 
    // gera um id novo para a sua sessão, o que traz mais segurança
}

if($_SESSION['contador'] >= 15) {
    session_destroy();
}