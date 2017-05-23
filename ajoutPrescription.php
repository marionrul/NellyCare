<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 18/05/2017
 * Time: 16:03
 */

require "controller/controller.php";
if(connexion()) {
    $prescripteurs = ModelPrescripteur::getAll();
    $patients = ModelPatient::getAll();

    require "view/view_ajoutPrescription.php";
}
else {
    header("Location:connexion.php");
}

?>