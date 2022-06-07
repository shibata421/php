<div class="titulo">PDO: Alterar</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "UPDATE cadastro
    SET nome = ?, nascimento = ?, email = ?,
    site = ?, filhos = ?, salario = ?
    WHERE id = ?";
$stmt = $conexao->prepare($sql);

$resultado = $stmt->execute([
    'Gui', 
    '1980-12-12',
    'gui@gui.com.br',
    'http://gui.co',
    1,
    12000,
    16
]);

if($resultado) {
    echo "sucesso";
} else {
    print_r($stmt->errorInfo());
}

$conexao->close();