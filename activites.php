<?php
require('./activiteTools.php');


$activiteArray = queryAllActivite();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>activite</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>libelle_activite</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($activiteArray as $activiteDetails){
                    print("<tr>");
                    foreach($activiteDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
