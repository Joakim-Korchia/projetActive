<?php
require('./documentTools.php');


$documentArray = queryAllDocument();
?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css" type="text/css">
    <title>document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <td>titre_document</td>
                <td>resume_document</td>
                <td>date_diffusion_document</td>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($documentArray as $documentDetails){
                    print("<tr>");
                    foreach($documentDetails as $key => $value){
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </tbody>

    </table>
   

</body>
</html>
