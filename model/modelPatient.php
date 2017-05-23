<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 10:04
 */

include_once ('model.php');

class ModelPatient extends Model {

    static $table = "Patient";
    static $primary = "Num_secu";

    private $num_secu;
    private $nom;
    private $prenom;
    private $date_naissance;
    private $tel;
    private $rue;
    private $code_postal;
    private $ville;
    private $qualite;

    public function __construct($num_secu = NULL, $nom=NULL, $prenom=NULL, $date_naissance=NULL, $tel=NULL, $rue=NULL, $code_postal=NULL, $ville=NULL, $qualite=NULL)
    {
        if (!is_null($num_secu) && !is_null($nom) && !is_null($prenom) && !is_null($date_naissance) && !is_null($tel) && !is_null($rue) && !is_null($code_postal) && !is_null($ville) && !is_null($qualite)) {
            $this->num_secu = $num_secu;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->date_naissance = $date_naissance;
            $this->tel = $tel;
            $this->rue = $rue;
            $this->code_postal = $code_postal;
            $this->ville = $ville;
            $this->qualite = $qualite;
        }

    }

    public static function getPatientById($numSecu){
        $sql ='SELECT *
                FROM Patient
                WHERE  Num_secu=:cle';
        /*
         * On utilise une requete sql
         * On affiche pas directement $numSecu pour eviter les injections sql
         * on cache donc le parametre le requete jusqu'a qu'on l'execute avec la requete preparee
         */
        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $numSecu);
            $req_prep->execute(); // execution de la requete
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelPatient");
            return $req_prep->fetch();
        }catch (PDOException $e){
            return "erreur";
        }
    }





    public function getNumSecu()
    {
        return $this->Num_secu;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getDateNaissance()
    {
        return $this->Date_naissance;
    }

    public function getTel()
    {
        return $this->Tel;
    }

    public function getRue()
    {
        return $this->Rue;
    }

    public function getCodePostal()
    {
        return $this->Code_postal;
    }

    public function getVille()
    {
        return $this->Ville;
    }

    public function getQualite()
    {
        return $this->Qualite;
    }



}