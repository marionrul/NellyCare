<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 10:27
 */

require "controller/controller.php";

if (connexion()) {
    $idpatient = $_GET['idpatient'];
    $patient = ModelPatient::getPatientById($idpatient);
    if (!empty($patient->getNumeroMutuelle())){
        $mutuelle = ModelMutuelle::getMutuelle($idpatient);
    }else {
        $mutuelle="";
    }
    if (!empty($patient->getNumeroCaisse())){
        $caisse = ModelCaisse::getCaisse($idpatient);
    }else {
        $caisse="";
    }
    $mutuelles = ModelMutuelle::getAll();
    $caisses = ModelCaisse::getAll();

    require('view/view_modifierPatient.php');
}
else {
    header("Location:connexion.php");
}


?>