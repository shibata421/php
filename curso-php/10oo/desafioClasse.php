<div class="titulo">Desafio Classe</div>

<?php
    class Data {
        public $dia = 1;
        public $mes = 1;
        public $ano = 1970;

        public function apresentar() {
            if(Data::testaData($this->dia, $this->mes, $this->ano)){
                if($this->dia < 10) {
                    $diaString = '0' . $this->dia;
                } else {
                    $diaString = "{$this->dia}";
                }
                if($this->mes < 10) {
                    $mesString = '0' . $this->mes;
                } else {
                    $mesString = "{$this->mes}";
                }
                return "$diaString/$mesString/{$this->ano}";
            } else {
                return "Data inválida";
            }
        }

        private static function isBissexto ($ano) {
            if($ano % 4 !== 0) {
                return false;
            } else if ($ano % 100 !== 0) {
                return true;
            } else if ($ano % 400 !== 0) {
                return false;
            } else {
                return true;
            }
        }

        private static function testaData($dia, $mes, $ano) {
            if($dia < 0 || $dia > 31 || $mes < 0 || $ano < 0){
                return false;
            }
            switch($mes) {
                case 4: case 6: case 9: case 11:
                    if ($dia > 30) {
                        return false;
                    }
                break;
                case 2:
                    if(Data::isBissexto($ano)){
                        if($dia > 29){
                            return false;
                        }
                    } else {
                        if ($dia > 28) {
                            return false;
                        }
                    }
                break;
            }
            return true;
        }
    }

    $d1 = new Data();
    $d1->dia = 29;
    $d1->mes = 2;
    $d1->ano = 2020;
    echo $d1->apresentar();