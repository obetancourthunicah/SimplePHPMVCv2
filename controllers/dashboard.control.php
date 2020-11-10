<?php
function run(){
    $viewData = array();
    $usuario = $_SESSION["userCode"];
    $viewData["component"] = array();
    if (isAuthorized("c_cliente_cnt", $usuario)) {
        include_once "models/mnt/clientes.model.php";
        $cmp_clientes_countd = getCountClients();
        $cmp_str = renderizar("cmp/clientecount", $cmp_clientes_countd, "component_layout", false);
        $viewData["component"][] = $cmp_str;
    }

    renderizar("dashboard", $viewData);
}

run();
?>
