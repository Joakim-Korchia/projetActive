<?php
require_once ("./db.php");
require_once ('./generic_requests.php');

$db = getDb();

// Faire un fichier Tools.php général implique qu'il faudra changer le chemin de référence dans les fichiers
// de chaque table par le nom de ce fichier.

function queryAllActivite(){
    global $db;
    $request = $db -> query("SELECT * FROM activite");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllClients(){
    global $db;
    $request = $db -> query("SELECT * FROM Client");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllCollaborateurs(){
    global $db;
    $request = $db -> query("SELECT * FROM Collaborateur");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllContact(){
    global $db;
    $request = $db -> query("SELECT * FROM contact");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllContrat(){
    global $db;
    $request = $db -> query("SELECT * FROM contrat");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllDocument(){
    global $db;
    $request = $db -> query("SELECT * FROM document");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllEtape(){
    global $db;
    $request = $db -> query("SELECT * FROM etape");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllFonction(){
    global $db;
    $request = $db -> query("SELECT * FROM fonction");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllIntervention(){
    global $db;
    $request = $db -> query("SELECT * FROM intervention");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

function queryAllProjets(){
    global $db;
    $request = $db -> query("SELECT * FROM projet");
    $result = $request -> fetchAll(PDO::FETCH_ASSOC);
    return $result;
};

?>