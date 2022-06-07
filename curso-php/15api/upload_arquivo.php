<div class="titulo">Upload de Arquivo</div>

<?php
ini_set('display_errors', 1);
print_r($_FILES); // array

if($_FILES && $_FILES['arquivo']) {
    $pasteUpload = 'E:/Fernando/Udemy/PHP Completo/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pasteUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_name'];

    if(move_uploaded_file($tmp, $arquivo)) {
        echo "Arquivo válido e enviado com sucesso";
    } else {
        echo "<br>Erro no upload do arquivo";
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data">
    <!-- multipart/form-data suporta upload de arquivos -->
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>

<style>
    input, button {
        font-size: 1.2rem;

    }
</style>