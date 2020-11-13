<?php 

require_once "models/mnt/clientes.model.php";

function run(){
    $viewData = array();
    $viewData["cln_txtfilter"] = "";
    if (isset($_SESSION["cln_txtfilter"])) {
        $viewData["cln_txtfilter"] = $_SESSION["cln_txtfilter"];
    }
    if (isset($_POST["btnFiltrar"])) {
        mergeFullArrayTo($_POST, $viewData);
        $_SESSION["cln_txtfilter"] = $viewData["cln_txtfilter"];
    }
    if ($viewData["cln_txtfilter"] === "") {
        $viewData["clientes"] = getAllClientes();
    } else {
        $viewData["clientes"] = getClientesPorFiltro($viewData["cln_txtfilter"]);
    }

    $viewData["addbtnClnt"] = isAuthorized("addbtnClnt", getUserCode());
    $viewData["edtbtnClnt"] = isAuthorized("edtbtnClnt", getUserCode());
    $viewData["delbtnClnt"] = isAuthorized("delbtnClnt", getUserCode());

    renderizar("mnt/clientes", $viewData);
}

run();

?>
