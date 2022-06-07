<div class="titulo">Retornando Funções</div>

<?php
    function soma($a) {
        return function($b) use ($a) {
            return $a + $b;
        };
    }

    echo soma(3)(3);