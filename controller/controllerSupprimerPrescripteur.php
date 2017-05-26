<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 10:46
 */

require "../model/modelPrescripteur.php";


$idprescripteur = $_GET['idprescripteur'];
$prescripteur = ModelPrescripteur::getPrescripteurById($idprescripteur);

ModelPrescripteur::deletePrescripteur($idprescripteur);


header("Location:../listePrescripteur.php?message=Prescripteur supprimé !&couleur=blue");


