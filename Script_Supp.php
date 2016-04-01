<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Atelier 4 - Script Suppression</title>
</head>
<body>
<?php
$Id = $_REQUEST["Id"];

require "ConexDB.php";
$Conex = ConDB();


$Reqt = "Delete from liens where Id=" .$Id;
$requete = $Conex->prepare($Reqt);

$requete->execute();


header("Location: Liste.php");

?>


</body>
</html>