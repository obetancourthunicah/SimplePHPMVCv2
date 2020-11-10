<?php 
require_once "libs/dao.php";
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
catecod bigint(10)
*/
function getAllClientes(){
    $sqlstr = "SELECT * from clients;";
    $resultSet = array();
    $resultSet = obtenerRegistros($sqlstr);
    return $resultSet;
}

function getCountClients()
{
  $sqlstr = "SELECT count(*) as Clientes from clients;";
  $resultSet = array();
  $resultSet = obtenerUnRegistro($sqlstr);
  return $resultSet;
}

function getClienteById($clientid) {
    $sqlstr = "SELECT * from clients where clientid = %d;";
    return obtenerUnRegistro(sprintf($sqlstr, $clientid));
}

function getClientesPorFiltro($filtro) {
    $ffiltro = $filtro.'%';
    $sqlstr = "SELECT * from clients where clientIdnumber like '%s' or clientname like '%s';";
    return obtenerRegistros(sprintf($sqlstr, $ffiltro, $ffiltro));
}

function addNewClient($clientname, $clientgender, $clientphone1, $clientphone2, $clientemail, $clientIdnumber, $clientbio, $clientstatus, $catecod){
    $insSql = "INSERT INTO `clients` (`clientname`, `clientgender`, `clientphone1`, `clientphone2`,
`clientemail`, `clientIdnumber`, `clientbio`, `clientstatus`, `clientdatecrt`, `clientusercreates`, `catecod`)
VALUES ( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', now(), 0, %d);";

    return ejecutarNonQuery(
        sprintf(
            $insSql,
            $clientname,
            $clientgender,
            $clientphone1,
            $clientphone2,
            $clientemail,
            $clientIdnumber,
            $clientbio,
            $clientstatus,
            $catecod
        )
    );
}

function updateCliente ($clientname, $clientgender, $clientphone1, $clientphone2, $clientemail, $clientIdnumber, $clientbio, $clientstatus, $catecod, $clientid) {
    $updsql = "UPDATE `clients` SET  `clientname` = '%s', `clientgender` = '%s',
`clientphone1` = '%s', `clientphone2` = '%s', `clientemail` = '%s',
`clientIdnumber` = '%s', `clientbio` = '%s', `clientstatus` = '%s',
`catecod` = %d
WHERE `clientid` = %d; ";

    return ejecutarNonQuery(
        sprintf(
            $updsql,
            $clientname,
            $clientgender,
            $clientphone1,
            $clientphone2,
            $clientemail,
            $clientIdnumber,
            $clientbio,
            $clientstatus,
            $catecod,
            $clientid
        )
    );
}

function deleteCliente($clientid) {
    return ejecutarNonQuery(sprintf("DELETE from clients where clientid=%d;", $clientid));
}

?>
