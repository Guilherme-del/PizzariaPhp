<?php

class Model{

   public $pizzavalor = array();
   
   public $abobrinha = 3.5;
   public $bacon = 8.25;
   public $brocolis = 5.2;
   public $calabresa = 7.5;
   public $catupiry = 7.5;
   public $cebola = 4.99;
   public $frango = 6.5;
   public $ovo = 3.99;
   public $queijo = 6.5; 

   public function calculapizza($pizzavalor){
        $result = array_sum($pizzavalor);
   }
}
