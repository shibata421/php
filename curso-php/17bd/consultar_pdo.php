<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">PDO: Consultar</div>

<?php
require_once 'conexao_pdo.php';

$conexao = novaConexao();

$sql = 'SELECT id, nome, nascimento, email FROM cadastro';

$resultado = $conexao->query($sql)->fetchAll(PDO::FETCH_ASSOC);

echo '<hr>';

$sql = "SELECT * FROM cadastro LIMIT :qtde OFFSET :inicio";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':qtde', 2, PDO::PARAM_INT);
$stmt->bindValue(':inicio', 2, PDO::PARAM_INT);

if($stmt->execute()) {
    $resultado = $stmt->fetchAll();
    print_r($resultado);
} else {
    echo "Erro: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}

echo '<hr>';

$sql = "SELECT * FROM cadastro WHERE id = :id";
$stmt = $conexao->prepare($sql);
$stmt->bindValue(':id', 1, PDO::PARAM_INT);
if($stmt->execute()){
    $resultado = $stmt->fetch();
    print_r($resultado);
} else {
    echo "Erro: " . $stmt->errorCode() . '<br>';
    print_r($stmt->errorInfo());
}
$conexao->close();
?>