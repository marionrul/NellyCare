<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 18:33
 */

require "controller/controller.php";
if(connexion()) {
    $idprescripteur = $_GET['idprescripteur'];
    $prescripteur = ModelPrescripteur::getPrescripteurById($idprescripteur);

require "view/view_prescripteur.php";
}
else {
    header("Location:connexion.php");
}

?>

