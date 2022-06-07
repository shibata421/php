<div class="titulo">Desafio Switch</div>

<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">km > milha</option>
        <option value="milha-km">milha > km</option>
        <option value="metro-km">m > km</option>
        <option value="km-metro">km > m</option>
    </select>    
    <button>Calcular</button>
</form>

<style>
    form > * {
        font-size: 1.6rem;
    }
</style>
<?php
    $distancia = $_POST['param'];
    $conversao = $_POST['conversao'];
    $fator = '';
    $unidadeOriginal = '';
    $unidadeFinal = '';

    switch ($conversao) {
        case "km-milha": 
            $fator = 0.621371192;
            $unidadeOriginal = 'km';
            $unidadeFinal = 'milhas';
            break;
        case "milha-km": 
            $fator = 1.609344;
            $unidadeOriginal = 'milhas';
            $unidadeFinal = 'km';
            break;
        case "metro-km": 
            $fator = 0.001;
            $unidadeOriginal = 'm';
            $unidadeFinal = 'km';
            break;
        case "km-metro": 
            $fator = 1000;
            $unidadeOriginal = 'km';
            $unidadeFinal = 'm';
            break;
    }
    
    if(isset($_POST['param'])) {
        $distanciaFinal = number_format(($distancia * $fator), 5, ',', '.');
        echo "$distancia $unidadeOriginal = $distanciaFinal $unidadeFinal";
    }