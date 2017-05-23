<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 23/05/2017
 * Time: 12:22
 */
require "controller/controller.php";
if(connexion()) {

    require "fullcalendar/default.php";
}
else {
    header("Location:connexion.php");
}

?>