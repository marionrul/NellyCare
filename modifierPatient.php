<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 10:27
 */

require "controller/controller.php";

if (connexion())
{
    $idpatient=$_GET['idpatient'];
    $patient = ModelPatient::getPatientById($idpatient);

    require('view/view_modifierPatient.php');
}
else {
    header("Location:connexion.php");
}


?>