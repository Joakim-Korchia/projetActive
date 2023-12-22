<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllDocument(){
    global $db;
    $request = $db -> query("SELECT * FROM document");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
