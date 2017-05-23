<?php
require "controller/controller.php";
if(connexion()) {
    require "view/view_index.php";
}
else {
    header("Location:connexion.php");
}
?>

