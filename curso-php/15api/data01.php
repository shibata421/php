<div class="titulo">Datas #01</div>

<?php
echo time() . '<br>'; // quantidade de segundos que se passaram desde 01/01/1970
echo date('D, d \d\e M \d\e Y H:i A') . '<br>';
/*
    D - dia da semana
    d - dia do mês
    M - mês em extenso
    m - mês em número
    Y - ano completo
    y - dois últimos números do ano
    H - hora em GMT
    i - minutos
    A - AM ou PM

    O manual do PHP possui mais letras que podem ser passadas como parâmetro
*/

echo strftime('%A, %d de %B de %Y', time()) . '<br>'; //  D:
setlocale(LC_TIME, 'Brazil', 'pt_BR.utf-8'); // usar 'Brazil' resolve problemas com acentuação
echo strftime('%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d de %B de %Y', $amanha) . '<br>'; 

$proximaSemana = strtotime('+1 week');
echo strftime('%A, %d de %B de %Y', $proximaSemana). '<br>';

$dataFixa = mktime(15 , 30, 50, 1, 25, 1975);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa) . '<br>';