<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllActivite(){
    global $db;
    $request = $db -> query("SELECT * FROM activite");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
