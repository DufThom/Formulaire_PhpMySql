<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Atelier 4 - Affichage du Sommaire</title>
</head>
<body bgcolor="#ffffcc">
<?php
require "ConexDB.php";

$Conex = ConDB();
$Reqt = "Select Id,Titre,Url from liens where Affichage='oui' ORDER BY Date DESC ";
$Result = $Conex->query($Reqt);

    if(!$Result){
        print "PDO::errorInfo()";

        $Msg = $Conex->errorInfo();
        print $Msg[2] . "<br />";
        die("Erreur dans la requête ! ($Reqt)<br /><a href=\"javascript:history.go(-1)\">Back</a>");
    }
?>
<div class=" container Marge">
<div align="center"><h2>SOMMAIRE</h2>
<i> (liste triée par date de création)</i><br />
    <a href="Formulaire_Ajout.html">Ajouter un Enregistrement</a>
</div><br />
<?php
    if ($Result->rowCount() == 0){
        //Pas d'enregistrement
        die("La table est vide");
    }
    print ("<table width='100%' border='0'>
            <tr>
            <td width='5%'><b>ID</b></td>
            <td width='30%'><b>Titre</b></td>
            <td width='30%'><b>URL</b></td>
            <td width='15%'></td>
            </tr>");

    while($Lien = $Result->fetch(PDO::FETCH_OBJ)){
        print ("<tr>
                    <td width='5%'>$Lien->Id</td>
                     <td width='49%'>$Lien->Titre</td>
                     <td><a href='$Lien->Url'>$Lien->Url</a></td>
                     <td width='14%'><a href='Detail.php?Id=$Lien->Id'>Afficher le détail</a></td>
                 </tr>
                 ");
    }
    print('</table>');
?>
</div>

</body>
</html>




















