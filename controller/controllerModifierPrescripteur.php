<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 26/05/2017
 * Time: 10:52
 */

require "../model/modelPrescripteur.php";

$num=$_POST['num'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$specialite=$_POST['specialite'];
$rue=$_POST['rue'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$tel=$_POST['tel'];

ModelPrescripteur::updatePrescripteur($num, $nom, $prenom, $specialite, $rue, $cp, $ville, $tel);
header("Location:../listePrescripteur.php?message=Modifications enregistrées !&couleur=blue");
