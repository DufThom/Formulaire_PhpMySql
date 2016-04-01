<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Atelier 4 - Formulaire de Suppression</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Style.css">
</head>
<body>
<?php
require("ConexDB.php");
$Conex = ConDB();
$Id = $_GET["Id"];
$Reqt = "Select * from liens where Id=".$Id;
$Result = $Conex->query($Reqt);
$Lien = $Result->fetch(PDO::FETCH_OBJ);
?>
<div class=" container Marge">
    <form id="Ajout1" action="Script_Supp.php" method="GET">
        <input type="hidden" name="Id" value="<?=$Id ?>">

        <div class ="MyTitre"><h2>Formulaire</h2></div>
        <div> <label for="Titre"> Titre :</label><br />
            <input required class="form-control Mytext input" type="text" id="Titre" name="Titre" placeholder="Entrez le titre" value="<?php echo $Lien->Titre ?>"/>

        </div><br>
        <div> <label for="Description"> Description :</label><br />
            <input required class="form-control Mytext input" type="text" id="Description" name="Description" placeholder="Description du site" value="<?php echo $Lien->Description ?>"/>
        </div><br>
        <div> <label for="URL"> URL :</label><br />
            <input required class="form-control Mytext input" type="text" id="URL" name="URL" placeholder="Entre l'Url du site" value="<?php echo $Lien->Url ?>"/>
        </div><br>
        <div> <label for="Theme"> Thème :</label><br />
            <select class="form-control Mytext input" name="Theme" id="Theme" >
                <option value="Actu" <?php if ($Lien->Theme=="Actu") echo "selected"; ?> >Actualité</option>
                <option value="Musiq" <?php if ($Lien->Theme=="Musiq") echo "selected"; ?> >Musique</option>
                <option value="Sport" <?php if ($Lien->Theme=="Sport") echo "selected"; ?> >Sport</option>
                <option value="Sciences" <?php if ($Lien->Theme=="Sciences") echo "selected"; ?> >Sciences</option>
                <option value="Cinéma" <?php if ($Lien->Theme=="Cinéma") echo "selected"; ?> >Cinéma</option>
                <option value="Divers" <?php if ($Lien->Theme=="Divers") echo "selected"; ?> >Divers</option>
            </select>
        </div><br>
        <div> <label for="Webmaster"> Webmaster :</label><br />
            <input required class="form-control Mytext input" type="text" id="Webmaster" name="Webmaster" placeholder="Entrez une adresse mail" value="<?php echo $Lien->Webmaster ?>"/>
        </div><br>
        <div class="input-group Mytext input">
      <span class="input-group-addon input Mycolor1">
        <input type="checkbox" id="Visible" name="Visible"  class="Mycolor1 " value="OUI"/></span>
            <input type="text" class="form-control Mytext input" value="Visible" />
        </div><br />

        <div><input class="btnEnvoi btn btn-success" type="submit" name="Envoi" value="Valider"></div><br />
        <a href="Liste.php">Retour à la liste</a>


    </form>
</div>



</body>
</html>