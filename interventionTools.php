<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllIntervention(){
    global $db;
    $request = $db -> query("SELECT * FROM intervention");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
