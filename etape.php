<?php
require('./etapeTools.php');


$etapeArray = queryAllEtape();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>etape</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>charge_estimee</td>
                <td>charge_reelle_prod</td>
                <td>charge_reelle_validation</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($etapeArray as $etapeDetails){
                    print("<tr>");
                    foreach($etapeDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
