<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 11:01
 */

require "../model/modelPrescription.php";

$idprescription = $_GET['idprescription'];
$prescription= ModelPrescription::getPrescriptionById($idprescription);

ModelPrescription::deletePrescription($idprescription);


header("Location:../prescription.php?message=Prescription supprimée !&couleur=blue");


