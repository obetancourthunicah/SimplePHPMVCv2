<?php
//middleware de configuración de todo el sitio
require_once "libs/parameters.php";
function site_init(){
    global $host_server;
    addToContext("page_title","Client Relation Manager");
    addToContext("max_file_size",20); // In Megas
    addToContext("host_server",$host_server);
    addToContext("general_footer", "Derechos Reservados 2020 <br /> SCJ Clase de Negocios WEB UNICAH");
    date_default_timezone_set ( "America/Tegucigalpa" );
}
site_init();

?>
