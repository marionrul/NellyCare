<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 12:26
 */

require "controller/controller.php";

if(connexion()) {
    require "view/view_gererPatient.php";
}
else {
    header("Location:connexion.php");
}
?>

