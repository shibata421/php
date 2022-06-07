<div class="titulo">Imagens</div>

<?php
session_start();

$arquivos = $_SESSION['arquivo'] ?? [];

$pastaUpload = __DIR__ . '/../files/';
$nomeArquivo = $_FILES['arquivo']['name'];
$arquivo = $pastaUpload . $nomeArquivo;
$tmp = $_FILES['arquivo']['tmp_name'];

if(move_uploaded_file($tmp, $arquivo)) {
    echo "<br>Arquivo válido e enviado com sucesso";
    $arquivos[] = $nomeArquivo;
    $_SESSION['arquivo'] = $arquivos;
} else {
    echo "<br>Erro no upload do arquivo";
}

?>

<form action="#" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo">
    <button>Enviar</button>
</form>

<ul>
    <?php foreach($arquivos as $arquivo): 
        if(strtolower(explode(".", $arquivo)[1]) === "png"):?>
            <li>
                <a href="/../files/<?= $arquivo ?>">
                    <img src="/../files/<?= $arquivo ?>" alt="" width="500px">
                </a>
            </li>
        <?php endif ?>
    <?php endforeach ?>
</ul>

<style>
    input, button {
        font-size: 1.2rem;
    }

    li {
        list-style: none;
    }
</style>