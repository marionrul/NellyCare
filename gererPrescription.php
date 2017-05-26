<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 26/05/2017
 * Time: 12:09
 */
require "controller/controller.php";

if(connexion()) {
    require "view/view_gererPrescription.php";
}
else {
    header("Location:connexion.php");
}
?>
