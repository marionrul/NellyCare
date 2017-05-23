<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 23/05/2017
 * Time: 18:31
 */

require "../model/modelPatient.php";
$num = $_POST['num'];
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$date= $_POST['date'];
$tel= $_POST['tel'];
$rue= $_POST['rue'];
$cp= $_POST['cp'];
$ville= $_POST['ville'];
$qualite= $_POST['qualite'];
$mutuelle= $_POST['mutuelle'];
$caisse= $_POST['caisse'];


if(empty($num) || empty($nom) || empty($prenom) || empty($date) || empty($tel) || empty($rue) || empty($cp) || empty($ville) || empty($qualite) /*|| empty($mutuelle) || empty($caisse)*/) { // Vérifie que l'admin a rentré tous les champs
    echo("Veuillez remplir tous les champs");
}
else {
    $tab = array($num, $nom, $prenom, $date, $tel, $rue, $cp, $ville, $qualite, $mutuelle, $caisse);
    ModelPatient::insert($tab);
    header("Location:../patient.php?message=Patient ajouté !&couleur=blue");
}

?>