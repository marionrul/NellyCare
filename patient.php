<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 14:07
 */
require "controller/controller.php";
if(connexion()) {
    $patients = ModelPatient::getAll();
    require "view/view_patient.php";
}
else {
    header("Location:connexion.php");
}

?>