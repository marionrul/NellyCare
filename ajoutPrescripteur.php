<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 10:40
 */

require "controller/controller.php";
if(connexion()) {

    require "view/view_ajoutPrescripteur.php";
}
else {
    header("Location:connexion.php");
}

?>