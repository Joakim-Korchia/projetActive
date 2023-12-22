<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllContrat(){
    global $db;
    $request = $db -> query("SELECT * FROM contrat");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
