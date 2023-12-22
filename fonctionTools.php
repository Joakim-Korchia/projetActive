<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllFonction(){
    global $db;
    $request = $db -> query("SELECT * FROM fonction");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
