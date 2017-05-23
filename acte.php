<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 20/05/2017
 * Time: 20:43
 */

require "controller/controller.php";
if(connexion()) {
    $idacte = $_GET['idacte'];
    $acte = ModelActe::getActeById($idacte);

    require "view/view_acte.php";
}
else {
    header("Location:connexion.php");
}

?>


