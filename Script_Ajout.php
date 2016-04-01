<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Atelier 4 - Script Ajout Formulaire</title>
</head>
<body>

<!--<u> Résultat du Formulaire : </u><br>-->
<!--Titre = --><?php //echo $_REQUEST["Titre"]?><!-- <br />-->
<!--Description = --><?php //$_REQUEST["Description"]?><!--<br />-->
<!--URL = --><?php //echo $_REQUEST["URL"]?><!--<br />-->
<!--Thème = --><?php //echo $_REQUEST["Theme"]?><!-- <br />-->
<!--Webmaster = --><?php //echo $_REQUEST["Webmaster"]?><!-- <br />-->
<!--Visible = --><?php //echo (!empty( $_REQUEST["Visible"]))?1:0 ?><!--<br />-->
<!--Valider = --><?php //echo $_REQUEST["Envoi"]?>


<!-- Ajout dans la DB -->
<?php

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


$Reqt = "Insert into liens(Titre,Description,Url,Theme,Webmaster,Date,Affichage) VALUES (:Titre, :Description, :URL, :Theme, :Webmaster, CURRENT_DATE , :Affichage)";
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









