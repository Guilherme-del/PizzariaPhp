<?php
require "controller/homeController.php";

$pagina = explode( '/', $_SERVER['REQUEST_URI']);
$ctrl = new homeController();

switch($pagina[1]){
  case "index":
  $ctrl->index();
  break;
  case "login":
  $ctrl->pronta();
  break;
  case "personalizar":
  $ctrl->personalizar();
  break;
  default:
  $ctrl->index();
  break;
}