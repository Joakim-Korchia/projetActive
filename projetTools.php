<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllProjets(){
    global $db;
    $request = $db -> query("SELECT * FROM projet");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
