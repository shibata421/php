<div class="titulo">Visibilidade</div>

<?php
    class A {
        public $publico = 'Público';
        protected $protegido = 'Protegido';
        private $privado = 'Privado';

        public function mostrarA() {
            echo "Class A) Público = {$this->publico}<br>";
            echo "Class A) Protegido = {$this->protegido}<br>";
            echo "Class A) Privado = {$this->privado}<br>";
        }

        protected function porHeranca() {
            echo "Serei transmitido por herança<br>";
        }
        private function naoMostrar() {
            echo 'Não vou imprimir!';
        }
    }

    $a = new A();
    $a->mostrarA();
    echo "<br>";
    
    class B extends A {
        public function mostrarB() {
            echo "Class B) Público = {$this->publico}<br>";
            echo "Class B) Protegido = {$this->protegido}<br>";
            echo "Class B) Privado = {$this->privado}<br>";

            parent::porHeranca();
        }
    }
    $b = new B();
    $b->mostrarA();
    $b->mostrarB();
    // $b->porHeranca(); // isso não funciona
    echo "Fim!";