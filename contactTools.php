<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllContact(){
    global $db;
    $request = $db -> query("SELECT * FROM contact");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
