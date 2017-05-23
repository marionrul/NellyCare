<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 18:08
 */

require "controller/controller.php";
if(connexion()) {
$idpatient = $_GET['idpatient'];
$patient = ModelPatient::getPatientById($idpatient);
$prescripteur = ModelPrescripteur::getPrescripteur($idpatient);


require "view/view_fichePatient.php";

}
else {
    header("Location:connexion.php");
}

?>

