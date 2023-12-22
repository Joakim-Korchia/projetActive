<?php
require('./interventionTools.php');


$interventionArray = queryAllIntervention();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>intervention</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>date_debut_intervention</td>
                <td>date_fin_intervention</td>
                <td>libelle_intervention</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($interventionArray as $interventionDetails){
                    print("<tr>");
                    foreach($interventionDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
