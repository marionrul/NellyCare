<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 26/05/2017
 * Time: 10:21
 */

require "controller/controller.php";
if(connexion()) {
    $idmutuelle = $_GET['idmutuelle'];
    $mutuelle = ModelMutuelle::getMutuelleById($idmutuelle);
    if(empty($mutuelle)) {
        echo "Le patient n'a pas de mutuelle";
    }

    require "view/view_mutuelle.php";
}
else {
    header("Location:connexion.php");
}

?>
