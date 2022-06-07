<?php
session_start(); // obrigatório
session_destroy();
header('Location: basico_sessao.php');