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

ModelPatient::delete($idprescripteur);


header("Location:../patient.php?message=Patient supprimé !&couleur=blue");


