<div class="titulo">Métodos Mágicos</div>

<?php
echo "Sim, esse é o nome de oficial...<br><br>";

class Pessoa {
    public $nome;
    public $idade;

    function __construct($nome, $idade) {
        echo 'Construtor invocado!<br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }

    function __destruct() {
        echo "E morreu!";
    }

    public function __toString() {
        return "{$this->nome} tem {$this->idade} anos.";
    }

    public function apresentar() {
        echo $this . "<br>";
    }

    public function __get($atr) {
        echo "Lendo um atributo não declarado: {$atr}<br>";
        return $atr;
    }

    public function __set($atrib, $valor) {
        echo "Alterando atributo não declarado: {$atrib}/{$valor}<br>";
    }

    public function __call($metodo, $params) {
        echo "Tendo executar método '${metodo}'";
        echo ", com os parâmetros: ";
        print_r($params);
    }
}

$pessoa = new Pessoa('Ricardo', 40);
// $pessoa->apresentar();
// echo $pessoa, '<br>';
// $pessoa->nome = 'Reinaldo';
// $pessoa->apresentar();

// $pessoa->nomeCompleto; // como esse atributo não existe, o __get é invocado
// $pessoa->nomeCompleto = 'Muito Legal!!!'; // gera um atributo com esse nome;

$pessoa->exec(1, 'teste', true, [1, 2, 3]);