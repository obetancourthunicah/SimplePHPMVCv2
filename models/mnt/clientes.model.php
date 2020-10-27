<?php 
require_once "libs/dao.php";

function getAllClientes(){
  $sqlstr = "SELECT * from clients;";
  $resultSet = array();
  $resultSet = obtenerRegistros($sqlstr);
  return $resultSet;
}

?>
