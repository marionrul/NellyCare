<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 19/05/2017
 * Time: 14:42
 */

require "controller/controller.php";
if(connexion()) {
    $prescriptions = ModelPrescription::getAllPrescription();

    require "view/view_prescription.php";
}
else {
    header("Location:connexion.php");
}

?>
