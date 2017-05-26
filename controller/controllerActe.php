<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 20/05/2017
 * Time: 20:13
 */

require "../model/modelActe.php";
require "../model/modelEvenement.php";

$nom= $_POST['nom'];
$designation = $_POST['designation'];
$date= $_POST['date_debut'];
$tarif= $_POST['tarif'];
$prescription= $_POST['prescription'];


if(empty($nom) || empty($designation) || empty($date) || empty($tarif) || empty($prescription)) { // Vérifie que l'admin a rentré tous les champs
    echo("Veuillez remplir tous les champs");
}
else {
    $date1=date_create($date);
    $date=date_format($date1, 'Y-m-d'); // Formate la date pour qu'elle soit compatible avec Mysql
    $tab = array($nom, $designation, $date, $tarif, $prescription);
    $tab2 = array('', $nom, $date, $date);
    ModelActe::insert($tab);
    ModelEvenement::insert($tab2);
    header("Location:../gererPrescription.php?message=Acte ajouté !&couleur=blue");
}

?>