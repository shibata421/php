<div class="titulo">Membros Estáticos</div>

<?php
   class A {
       public $naoStatic = 'Variável de Instância';
       public static $static = 'Variável de Classe (Estática)';

       public function mostrarA() {
           echo "Não Estática = {$this->naoStatic}<br>";
           // Tentativa 1
           //    echo "Estática = {$this->static}<br>";
           // Tentativa 2
        //    echo "Estática = {self::$static}<br>";
           echo "Estática = ". self::$static. "<br>";
        }
        
        public static function mostrarStaticA() {
            // echo "Não estático = {$this->naoStatic}<br>"; // não tem acesso a this
            // echo "Estática = {$static}<br>";
            echo "Estática = ". self::$static. "<br>";
       }
   } 

   $objetoA = new A();
   $objetoA->mostrarA();
//    $objetoA->mostrarStaticA(); // não é a forma ideal
echo '<br>';
    echo A::$static, '<br>';    // forma ideal
   A::mostrarStaticA();

   A::$static = 'Alterando membro de classe';
   echo A::$static, '<br>';