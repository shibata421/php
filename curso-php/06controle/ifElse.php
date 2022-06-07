<div class="titulo">If Else</div>

<?php
    if(true) {
        echo "Serei impresso?<br>";
        echo "Serei impresso novamente?<br>";
    }

    if(true) {
        echo "Verdadeiro<br>";
    } else {
        echo "Falso<br>";
    }
    echo "Fim<br>";

    if(false) {
        echo "Passo A<br>";
    } else if (true) {
        echo "Passo B<br>";
    } else {
        echo "Último Passo<br>";
    }