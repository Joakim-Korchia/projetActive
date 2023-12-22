<?php
require('./projetTools.php');


$projetArray = queryAllProjets();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>projet</title>
</head>
<body>
    <table>
        <thead>
            <tr>
            <td>code_projet</td>
                <td>libelle_long_projet</td>
                <td>libelle_court_projet</td>
                <td>type_projet</td>
                <td>cycle_vie_projet</td>
                <td>infos_techniques_projet</td>
                <td>charge_estimee_projet</td>
                <td>date_debut_prevue</td>
                <td>rdate_fin_prevue</td>
                <td>date_debut_reelle</td>
                <td>date_fin_reellle</td>
                <td>equipe_max_projet</td>
                <td>commentaires_commerciaux_projet</td>
                <td>secteur_activite</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($projetsArray as $projetDetails){
                    print("<tr>");
                    foreach($projetDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
