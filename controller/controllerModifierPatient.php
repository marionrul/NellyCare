<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 23/05/2017
 * Time: 20:07
 */

require "../model/modelPatient.php";

$num=$_POST['num'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$date=$_POST['date'];
$tel=$_POST['tel'];
$rue=$_POST['rue'];
$cp=$_POST['cp'];
$ville=$_POST['ville'];
$qualite=$_POST['qualite'];
$mutuelle=$_POST['mutuelle'];
$caisse=$_POST['caisse'];

type_formation::type_formation_update($idtype,$libelle,$description,$descriptionsecondaire,$metatitre, $metadescription,$metakeywords,$image,$citation);



echo "ok";

?>