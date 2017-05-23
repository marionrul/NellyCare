<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 23/05/2017
 * Time: 19:03
 */

require "controller/controller.php";
if(connexion()) {
    $mutuelles = ModelMutuelle::getAll();
    $caisses = ModelCaisse::getAll();

    require "view/view_ajoutPatient.php";
}
else {
    header("Location:connexion.php");
}

?>