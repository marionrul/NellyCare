<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 20/05/2017
 * Time: 20:43
 */

require "controller/controller.php";
if(connexion()) {
    $idprescription = $_GET['idprescription'];
    $actes = ModelActe::getActe($idprescription);

    require "view/view_acte.php";
}
else {
    header("Location:connexion.php");
}

?>


