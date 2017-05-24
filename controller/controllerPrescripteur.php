<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 24/05/2017
 * Time: 10:36
 */

require "../model/modelPrescripteur.php";

$num = $_POST['num'];
$nom= $_POST['nom'];
$prenom = $_POST['prenom'];
$specialite= $_POST['specialite'];
$rue= $_POST['rue'];
$cp= $_POST['cp'];
$ville= $_POST['ville'];
$tel= $_POST['tel'];

if(empty($num) || empty($nom) || empty($prenom) || empty($specialite) || empty($rue) || empty($cp) || empty($ville) || empty($qualite) || empty($tel)) { // Vérifie que l'admin a rentré tous les champs
    echo("Veuillez remplir tous les champs");
}
else {
    $tab = array($num, $nom, $prenom, $specialite, $rue, $cp, $ville, $tel);
    ModelPrescripteur::insert($tab);
    header("Location:../presripteur.php?message=Patient ajouté !&couleur=blue");
}

?>