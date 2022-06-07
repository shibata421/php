<div class="titulo">Interface</div>

<?php
    interface Animal {
        function respirar();
    }

    interface Mamifero {
        function mamar();
    }

    interface Canino extends Mamifero {
        function latir(): string;
    }

    class Cachorro implements Animal, Canino {
        function respirar() {
            return 'Irei usar oxigênio';
        }
        
        function latir(): string {
            return 'au au';
        }

        function mamar() {
            return "Irei mamar";
        }
    }

    $animal1 = new Cachorro();
    echo $animal1->respirar(), '<br>';
    echo $animal1->latir(), '<br>';
    echo $animal1->mamar(), '<br>';

    echo '<br>';
    var_dump($animal1);
    echo '<br>';
    var_dump($animal1 instanceof Cachorro);
    var_dump($animal1 instanceof Canino);
    var_dump($animal1 instanceof Mamifero);
    var_dump($animal1 instanceof Animal);