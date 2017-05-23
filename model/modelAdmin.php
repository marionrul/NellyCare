<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 18/05/2017
 * Time: 21:32
 */

include_once('model.php');

class ModelAdmin extends Model {

    static $table = "Admin";
    static $primary = "Num_admin";

    private $num_admin;
    private $nom;
    private $prenom;
    private $mail;
    private $mot_de_passe;
    private $cookie_code;

    public function __construct($num_admin = NULL, $nom=NULL, $prenom=NULL, $mail=NULL, $mot_de_passe=NULL, $cookie_code=NULL)
    {
        if (!is_null($num_admin) && !is_null($nom) && !is_null($prenom) && !is_null($mail)  && !is_null($mot_de_passe) && !is_null($cookie_code)) {
            $this->num_admin = $num_admin;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->mail = $mail;
            $this->mot_de_passe = $mot_de_passe;
            $this->cookie_code = $cookie_code;
        }

    }

    public static function getAdmin($cookie_code) {
        // Retourne l'admin identifié par le cookie_code passé en paraètre
        $sql ='SELECT * FROM Admin WHERE  Cookie_code=:cle';

        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $cookie_code);
            $req_prep->execute(); // execution de la requete
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelAdmin");
            return $req_prep->fetch();
        }catch (PDOException $e){
            echo "erreur";
            return "erreur";
        }
    }

    public static function updateAdmin($id, $cookie_code) {
        // On modifie l'attribut cookie_code de l'admin identifié par l'id donné en paramètre et on lui attribue le cookie_code donné en paramètre
        $sql ='UPDATE Admin SET Cookie_code=:cle WHERE Num_admin=:cle2';

        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $cookie_code);
            $req_prep->bindParam(':cle2', $id);
            $req_prep->execute(); // execution de la requete
        }catch (PDOException $e){
            echo "erreur";
            return "erreur";
        }
    }

    public static function existsAdmin($mail) {
        // Retourne true s'il existe un admin associé à ce mail
        $sql ='SELECT * FROM Admin WHERE Mail=:cle';

        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $mail);
            $req_prep->execute(); // execution de la requete
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelAdmin");
            return $req_prep->fetch();
        }catch (PDOException $e){
            echo "erreur";
            return "erreur";
        }
    }


    public function getNumAdmin()
    {
        return $this->Num_admin;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getMail()
    {
        return $this->Mail;
    }

    public function getMotDePasse()
    {
        return $this->Mot_de_passe;
    }

    public function getCookieCode()
    {
        return $this->Cookie_code;
    }


}