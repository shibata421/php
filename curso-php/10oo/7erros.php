<div class="titulo">Desafio 7 Erros</div>

<?php
    interface Template {
        function metodo1();
        public function metodo2($parametro);
    }

    abstract class ClasseAbstrata implements Template { // erro 2
        public function metodo1() {
            echo "Implementei o método 1"; // erro 4
        }

        public function metodo2($parametro) {
            echo "Implementando o método 2 com o parâmetro $parametro"; // erro 5
        }
        public function metodo3() {
            echo "Estou funcionando";
        }
    }


    class Classe extends ClasseAbstrata { // erro 3
        public $parametro; // erro 7

        function __construct($parametro) {
            $this->parametro = $parametro;
        }
    }

    $exemplo = new Classe('parâmetro'); // erro 6
    $exemplo->metodo3(); // erro 1
    echo "<br>";
    $exemplo->metodo1(); // erro 1
    echo "<br>";
    $exemplo->metodo2('parametro'); // erro 1