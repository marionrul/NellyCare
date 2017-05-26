<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 26/05/2017
 * Time: 10:56
 */

require "controller/controller.php";

if (connexion()) {
    $idprescripteur = $_GET['idprescripteur'];
    $prescripteur = ModelPrescripteur::getPrescripteurById($idprescripteur);


    require('view/view_modifierPrescripteur.php');
}
else {
    header("Location:connexion.php");
}
