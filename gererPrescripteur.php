<?php
require "controller/controller.php";

if(connexion()) {
    require "view/view_gererPrescripteur.php";
}
else {
    header("Location:connexion.php");
}
?>

