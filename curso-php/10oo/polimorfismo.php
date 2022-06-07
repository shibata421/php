<div class="titulo">Polimorfismo</div>

<?php
abstract class Comida {
    public $peso;
}

class Arroz extends Comida {

}

class ArrozAGrega extends Arroz {

}

class Feijão extends Comida {

}

class Sorvete extends Comida {

}

class Pessoa {
    public $peso;

    function __construct($peso) {
        $this->peso = $peso;
    }

    public function comer(Comida $comida) {
        $this->peso += $comida->peso;
    }
}

$pessoa = new Pessoa(83.45);
$c1 = new Arroz();
$c1->peso = 0.650;
$c2 = new ArrozAGrega();
$c2->peso = 0.650;
$c3 = new Sorvete();
$c3->peso = 0.650;

$pessoa->comer($c1);
$pessoa->comer($c2);
$pessoa->comer($c3);

echo $pessoa->peso;