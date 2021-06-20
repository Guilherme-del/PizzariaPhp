<?php

class homeController{
  public function index(){
    include "view/index.php";
  }
  public function pronta(){
    include "view/pizzapronta.php";
  }
  public function personalizar(){
    include "view/personalizar.php";
  }
}