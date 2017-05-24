<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 23/05/2017
 * Time: 19:16
 */

require "../model/modelPatient.php";

$idpatient = $_GET['idpatient'];
$patient = ModelPatient::getPatientById($idpatient);

ModelPatient::delete($idpatient);


header("Location:../patient.php?message=Patient supprimé !&couleur=blue");


