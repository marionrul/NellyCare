<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 26/05/2017
 * Time: 10:26
 */

require "controller/controller.php";
if(connexion()) {
    $idcaisse = $_GET['idcaisse'];
    $caisse = ModelCaisse::getCaisseById($idcaisse);

    require "view/view_caisse.php";
}
else {
    header("Location:connexion.php");
}

?>
