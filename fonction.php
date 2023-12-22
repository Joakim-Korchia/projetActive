<?php
require('./fonctionTools.php');


$fonctionArray = queryAllFonction();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>fonction</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>libelle_fonction</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($fonctionArray as $fonctionDetails){
                    print("<tr>");
                    foreach($fonctionDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
