<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllClients(){
    global $db;
    $request = $db -> query("SELECT * FROM Client");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
