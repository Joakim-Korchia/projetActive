<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllEtape(){
    global $db;
    $request = $db -> query("SELECT * FROM etape");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
