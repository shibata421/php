<div class="titulo">Desafio Operadores Lógicos</div>

<form action="#" method="post">
    <div>
        <label for="t1">Trabalho 1 (Terça):</label>
        <select name="t1" id="t1">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <div>
        <label for="t2">Trabalho 2 (Quinta):</label>
        <select name="t2" id="t2">
            <option value="1">Executado</option>
            <option value="0">Não Executado</option>
        </select>
    </div>
    <button>Executar</button>
</form>

<style>
    button, select {
        font-size: 1.6rem;
    }
</style>

<?php
if (isset($_POST['t1']) && isset($_POST['t2'])){
    $fezTrabalho1 = !!$_POST['t1'];
    $fezTrabalho2 = !!$_POST['t2'];

    if($fezTrabalho1 && $fezTrabalho2) {
        echo 'Comprou TV de 50" e tomaram sorvete';
    } else if ($fezTrabalho1 xor $fezTrabalho2) {
        echo 'Comprou TV de 32" e tomaram sorvete';
    } else {
        echo 'Não compraram TV, mas ficaram mais saudáveis por não tomarem sorvete';
    }
}