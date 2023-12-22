<?php
require('./contactTools.php');


$contactArray = queryAllContact();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>contact</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>nom_contact</td>
                <td>prenom_contact</td>
                <td>email_contact</td>
                <td>tel_contact</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($contactArray as $contactDetails){
                    print("<tr>");
                    foreach($contactDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
