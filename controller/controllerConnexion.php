<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 18/05/2017
 * Time: 22:35
 */

require "../model/modelAdmin.php";
$mail = $_POST['mailAdmin'];
$password = $_POST['password'];

if(empty($mail) || empty($password)) { // Vérifie que l'admin a rentré tous les champs
    echo("Veuillez remplir tous les champs");
}
elseif(!(filter_var($mail, FILTER_VALIDATE_EMAIL))) { // Vérifie la validité du mail saisi
    echo("Votre mail n'est pas valide");
}
elseif(empty(ModelAdmin::existsAdmin($mail))) { // Vérifie grâce à la fonction existAdmin qu'il existe un adinistrateur dans la base de données avec le mail saisi
    echo("Ce mail n'est pas associé à un compte");
}
else {
    $password=sha1(sha1($password)); //On crypte le mot de passe
    $admin=ModelAdmin::existsAdmin($mail);
    $mdp=$admin->getMotDePasse();
    if($password == $mdp) {
        $cookieCode=substr(str_shuffle("0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN"), 0, 30); // génère un code aléatoire
        setcookie("userCookie",$cookieCode,time()+(1000),"/",'');
        ModelAdmin::updateAdmin($admin->getNumAdmin(), $cookieCode);
        header("Location:../index.php");
    }
    else {
        echo("Mot de passe erroné ");
    }
}