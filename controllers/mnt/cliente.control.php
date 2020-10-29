<?php 
/*
clientid bigint(15) AI PK
clientname varchar(128)
clientgender char(3)
clientphone1 varchar(255)
clientphone2 varchar(255)
clientemail varchar(255)
clientIdnumber varchar(45)
clientbio varchar(5000)
clientstatus char(3)
 */

require_once "models/mnt/clientes.model.php";
function run() {
    $viewData=array();
    $viewData["mode"] = "";
    $viewData["modedsc"] = "";
    $viewData["clientid"] = 0;
    $viewData["clientname"] = "" ;
    $viewData["clientgender"] = "FEM";
    $viewData["clientphone1"] = "";
    $viewData["clientphone2"] = "";
    $viewData["clientemail"] = "";
    $viewData["clientIdnumber"] = "";
    $viewData["clientbio"] = "";
    $viewData["clientstatus"] = "ACT";

    $viewData["clientgender_FEM"] = "selected";
    $viewData["clientgender_MAS"] = "";

    $viewData["clientstatus_ACT"] = "selected";
    $viewData["clientstatus_INA"] = "";

    $viewData["readonly"] = "";
    $viewData["deletemsg"] = "";
  
    $modedsc = array(
      "INS"=>"Nuevo Cliente",
      "UPD"=>"Actualizar Cliente %s",
      "DEL"=>"Eliminar Cliente %s",
      "DSP"=>"Detalle de Cliente %s"
    );
    if (isset($_GET["mode"])) {
        $viewData["mode"] = $_GET["mode"];
        $viewData["clientid"] = intval($_GET["clientid"]);
        if (!isset($modedsc[$viewData["mode"]])) {
            redirectWithMessage("No se puede realizar esta operación.", "index.php?page=clientes");
            die();
        }
    }

    if (isset($_POST["btnsubmit"])) {
        mergeFullArrayTo($_POST, $viewData);
        // Validaciones de Entrada de Datos
        switch ($viewData["mode"]){
        case "INS":
            $result = addNewClient(
                $viewData["clientname"],
                $viewData["clientgender"],
                $viewData["clientphone1"],
                $viewData["clientphone2"],
                $viewData["clientemail"],
                $viewData["clientIdnumber"],
                $viewData["clientbio"],
                $viewData["clientstatus"]
            );
            if ($result > 0) {
                redirectWithMessage("Guardado Exitosamente", "index.php?page=clientes");
                die();
            }
            break;
        case "UPD":
            $result = updateCliente(
                $viewData["clientname"],
                $viewData["clientgender"],
                $viewData["clientphone1"],
                $viewData["clientphone2"],
                $viewData["clientemail"],
                $viewData["clientIdnumber"],
                $viewData["clientbio"],
                $viewData["clientstatus"],
                $viewData["clientid"]
            );
            if ($result >= 0) {
                redirectWithMessage("Actualizado Exitosamente", "index.php?page=clientes");
                die();
            }
            break;
        case "DEL":
            $result = deleteCliente($viewData["clientid"]);
            if ($result > 0) {
                redirectWithMessage("Eliminado Exitosamente", "index.php?page=clientes");
                die();
            }
            break;
        }
    }
    if ($viewData["mode"] === "INS") {
        $viewData["modedsc"] = $modedsc[$viewData["mode"]];
    } else {
        $clientDBData = getClienteById($viewData["clientid"]);
        mergeFullArrayTo($clientDBData, $viewData);

        $viewData["modedsc"] = sprintf($modedsc[$viewData["mode"]], $viewData["clientname"]);

        $viewData["clientgender_FEM"] = ($viewData["clientgender"]=="FEM")?"selected":"";
        $viewData["clientgender_MAS"] = ($viewData["clientgender"]=="MAS")?"selected":"";

        $viewData["clientstatus_ACT"] = ($viewData["clientstatus"] == "ACT") ? "selected" : "";
        $viewData["clientstatus_INA"] = ($viewData["clientstatus"] == "INA") ? "selected" : ""; 
        // Sacar la data de la DB
        if ($viewData["mode"] != 'UPD') {
            $viewData["readonly"] = "readonly";
        }

        if ($viewData["mode"] == 'DEL') {
            $viewData["deletemsg"] = "Esta Seguro de Eliminar este registro, es una operación definitiva.";
        }
        
    }
    renderizar("mnt/cliente", $viewData);
}

run();
?>
