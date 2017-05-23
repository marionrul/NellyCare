<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 20/05/2017
 * Time: 20:12
 */

require "controller/controller.php";
if(connexion()) {
    $prescriptions = ModelPrescription::getAll();

    require "view/view_ajoutActe.php";
}
else {
    header("Location:connexion.php");
}

?>