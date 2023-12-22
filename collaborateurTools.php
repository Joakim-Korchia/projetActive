<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

function queryAllCollaborateurs(){
    global $db;
    $request = $db -> query("SELECT * FROM Collaborateur");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};
?>
