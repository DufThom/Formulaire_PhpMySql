

<?php
    function ConDB(){
        $Conex = new PDO("mysql:host=localhost;charset=utf8;dbname=sites", "root", "");
        $Conex->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $Conex;

    }

?>