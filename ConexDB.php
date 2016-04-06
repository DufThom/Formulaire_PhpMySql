

<?php
    function ConDB(){
        //$Conex = new PDO("mysql:host=localhost;charset=utf8;dbname=thomasd", "thomasd", "bigtom19"); //Ces données sont pour le site PUBLIÉ !!!

        $Conex = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", ""); //Et là, pour tourner en local !!!

        $Conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $Conex;

    }

?>