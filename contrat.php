<?php
require('./contratTools.php');


$contratArray = queryAllContrat();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>contrat</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>date_debut_contrat</td>
                <td>date_fin_contrat</td>
                <td>libelle_contrat</td>
                <td>salaire</td>
                <td>type</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($contratArray as $contratDetails){
                    print("<tr>");
                    foreach($contratDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
