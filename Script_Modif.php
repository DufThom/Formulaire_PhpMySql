
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Script de Modification du Formulaire</title>
</head>
<body>
<?php
$Id = $_REQUEST["Id"];
$Titre = $_REQUEST["Titre"];
$Description = $_REQUEST["Description"];
$URL = $_REQUEST["URL"];
$Theme = $_REQUEST["Theme"];
$Webmaster = $_REQUEST["Webmaster"];

$Aff = (!empty( $_REQUEST["Visible"]))?1:0;
if ($Aff == 1){
    $Affich = "Oui";
}else{
    $Affich = "Non";
}

require "ConexDB.php";
$Conex = ConDB();


$Reqt = "Update liens set Titre=:Titre,Description=:Description,Url=:URL,Theme=:Theme,Webmaster=:Webmaster,Date=CURRENT_DATE,Affichage=:Affichage where Id=" .$Id;
$requete = $Conex->prepare($Reqt);
$requete->bindParam(":Titre", $Titre);
$requete->bindParam(":Description", $Description);
$requete->bindParam(":URL", $URL);
$requete->bindParam(":Theme", $Theme);
$requete->bindParam(":Webmaster", $Webmaster);
$requete->bindParam(":Affichage", $Affich);
$requete->execute();


header("Location: Liste.php");

?>


</body>
</html>