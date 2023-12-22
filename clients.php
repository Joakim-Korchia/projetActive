<?php
require('./clientTools.php');


$clientArray = queryAllClients();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>client</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <td>code_client</td>
                <td>type_client</td>
                <td>domaine_activité</td>
                <td>nature_activité</td>
                <td>raison_sociale</td>
                <td>chiffre_d_affaire</td>
                <td>effectifs</td>
                <td>com_com_cli</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($clientsArray as $clientDetails){
                    print("<tr>");
                    foreach($clientDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
