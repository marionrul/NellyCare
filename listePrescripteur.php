<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 10:45
 */

require "controller/controller.php";

if(connexion()) {
    $prescripteurs = ModelPrescripteur::getAll();
    require "view/view_listePrescripteur.php";
}
else {
    header("Location:connexion.php");
}

?>