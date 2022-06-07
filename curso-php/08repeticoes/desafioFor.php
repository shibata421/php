<div class="titulo">Desafio For</div>

<?php
   for ($i = 1; $i <= 5; $i++) {
        for ($j = 1; $j <= 5; $j++) {
            if ($j <= $i) {
               echo "#";
            }
        }   
        echo '<br>';
   }
   
   echo '<hr>';
   
   for ($i = '#'; $i !== '######'; $i = $i."#"){
       echo "$i<br>";
   }