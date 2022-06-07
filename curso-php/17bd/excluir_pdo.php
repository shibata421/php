<div class="titulo">PDO: Excluir</div>

<?php
require_once "conexao_pdo.php";

$conexao = novaConexao();
$sql = "DELETE FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(":id", 15, PDO::PARAM_INT);
if($stmt->execute()) {
    Echo 'Sucesso';
} else {
    echo "Código: " . $stmt->errorCode() . "<br>";
    print_r($stmt->errorInfo());
}

$conexao->close();