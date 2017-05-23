<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 18/05/2017
 * Time: 21:19
 */

include ('model/modelAdmin.php');
include ('model/modelPatient.php');
include ('model/modelPrescripteur.php');
include ('model/modelPrescription.php');
include ('model/modelActe.php');
include ('model/modelSuit.php');
include ('model/modelEvenement.php');
include ('model/modelMutuelle.php');
include ('model/modelCaisse.php');


function connexion() {
    // Renvoie si l'admin est connecté ou pas
    if (isset($_COOKIE["userCookie"])) {
        if(!empty(ModelAdmin::getAdmin($_COOKIE["userCookie"]))) { // Si l'admin possède déjà un cookie code
            $admin = ModelAdmin::getAdmin($_COOKIE["userCookie"]);
            setcookie("userCookie",$admin->getCookieCode(),time()+(1000),"/",''); // on redéfinit un cookie identique mais avec un temps plus long
            return true;
        }
        else {
            return false;
        }
    }
    else {
        return false;
    }

}

if(!empty($_GET['message'])) { //pour générer les toasts après l'envoi des formulaires
    $message=$_GET['message'];
    $couleur=$_GET['couleur'];
}

?>


