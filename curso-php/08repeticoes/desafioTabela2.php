<div class="titulo">Desafio Tabela</div>
<form action="#" method="post">
    <div>
        <label for="linhas">Número de linhas
            <input type="number" name="linhas" value=<?= $_POST['linhas'] ?? 10?>>
        </label>
    </div>
    <div>
        <label for="colunas">Número de colunas
            <input type="number" name="colunas" value=<?= $_POST['colunas'] ?? 10?>>
        </label>
    </div>
    <button>Enviar</button>
</form>

<?php
    $linhas = $_POST['linhas'];
    $colunas = $_POST['colunas'];
?>

<table>
<?php
    $cont = 1;
    for($i = 0; $i < $linhas; $i++) {
        echo '<tr>';
        for($j = 0; $j < $colunas; $j++){
            echo "<td>$cont</td>";
            $cont++;
        }
        echo '</tr>';
    }
?>
</table>

<style>
    form * {
        font-size: 1.3rem;
    }

    form > div {
        margin-bottom: 10px;
    }

    input {
       width: 10%;
    }

    table {
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }

    table tr {
        border: 1px solid #444;
    }

    table td {
        padding: 10px 20px;
    }

    .colorido {
        background-color: dodgerblue;
    }
</style>