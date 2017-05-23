<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 18/05/2017
 * Time: 17:20
 */

require "../model/modelPrescription.php";
require "../model/modelSuit.php";
$date= $_POST['date_debut'];
$patient = $_POST['patient'];
$prescripteur= $_POST['prescripteur'];
$duree= $_POST['duree'];
$nbSeances= $_POST['nbSeances'];
$periode= $_POST['periode'];


if(empty($date) || empty($patient) || empty($prescripteur) || empty($duree) || empty($nbSeances) || empty($periode)) { // Vérifie que l'admin a rentré tous les champs
    echo("Veuillez remplir tous les champs");
}
else {
    $date1=date_create($date);
    $date=date_format($date1, 'Y-m-d'); // Formate la date pour qu'elle soit compatible avec Mysql
    $tab = array('', $date, $duree, $nbSeances, $periode, $prescripteur, $patient);
    $tab2 = array($prescripteur, $patient);
    ModelPrescription::insert($tab);
    ModelSuit::insert($tab2);
        header("Location:../prescription.php?message=Prescription ajoutée !&couleur=blue");
    }

?>