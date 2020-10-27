<?php 

require_once "models/mnt/clientes.model.php";

function run(){
  $viewData = array();
  $viewData["clientes"] = getAllClientes();
  renderizar("mnt/clientes", $viewData);
}

run();

?>
