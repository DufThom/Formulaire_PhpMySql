<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Atelier 4 - Page Détail des Enregistrement</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Style.css">

    <?php
        require "ConexDB.php";

        $Conex = ConDB();
        $id = $_GET["Id"];
        $Reqt = "Select * from liens where Id=".$id;
        $Result = $Conex->query($Reqt);
        $Lien = $Result->fetch(PDO::FETCH_OBJ);
    ?>
</head>
<body>
<div class=" container Marge">
<div class ="MyTitre"><h2>Détails</h2></div>
    <div><b>Titre : </b><?php echo $Lien->Titre ?> </div><br />
    <div><b>Description : </b><?php echo $Lien->Description ?></div><br />
    <div><b>URL : </b><?= $Lien->Url  ?></div><br />
    <div><b>Webmaster : </b><?php echo $Lien->Webmaster ?></div><br />
    <div><b>Thème : </b><?= $Lien->Theme ?></div><br />
    <div><b>Date : </b><?= $Lien->Date  ?></div>
    <div><span><a href="Liste.php">Retour à la liste</a></span>
    <span class="MyTitre2"><a href="Form_Modif.php?Id=<?=$Lien->Id ?>">Modifier</a></span>
    <span class="MyTitre2"><a href="Form_Supp.php?Id=<?=$Lien->Id ?>">Supprimer</a></span>
    </div>
</div>
</body>
</html>





















