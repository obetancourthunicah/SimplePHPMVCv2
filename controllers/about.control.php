<?php

function run(){
    $viewData = array(
      "cuenta"=>"0801198412349",
      "nombre"=>"Orlando J Betancourth",
      "correo"=>"obetancourthunicah@gmail.com"
    );
    $proyectos = array(
      array("id"=>"1", "name"=>"Negocios CMS"),
      array("id" => "2", "name" => "Negocios ERP"),
      array("id" => "3", "name" => "Negocios RRHH")
    );
    $viewData["proyectos"] = $proyectos;
    renderizar("about", $viewData);
}

run();

?>
