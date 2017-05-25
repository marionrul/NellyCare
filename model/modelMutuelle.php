<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 10:04
 */

include_once ('model.php');

class ModelMutuelle extends Model {

    static $table = "Mutuelle";
    static $primary = "Numero_mutuelle";

    private $numero_mutuelle;
    private $nom;
    private $AME;
    private $CMU;
    private $rue;
    private $code_postal;
    private $ville;
    private $tel;

    public function __construct($numero_mutuelle = NULL, $nom=NULL, $AME=NULL, $CMU=NULL, $rue=NULL, $code_postal=NULL, $ville=NULL, $tel=NULL)
    {
        if (!is_null($numero_mutuelle) && !is_null($nom) && !is_null($AME) && !is_null($CMU) && !is_null($rue) && !is_null($code_postal) && !is_null($ville) && !is_null($tel)) {
            $this->numero_mutuelle = $numero_mutuelle;
            $this->nom = $nom;
            $this->AME = $AME;
            $this->CMU = $CMU;
            $this->rue = $rue;
            $this->code_postal = $code_postal;
            $this->ville = $ville;
            $this->tel = $tel;
        }

    }

    public static function getMutuelle($num){
        // Retourne la mutuelle correspondant au patient donné en paramètre
        $sql ='SELECT * FROM Mutuelle, Patient 
                WHERE Mutuelle.Numero_mutuelle=Patient.Numero_mutuelle AND Patient.Num_secu=:cle';
        /*
         * On utilise une requete sql
         * On affiche pas directement $numSecu pour eviter les injections sql
         * on cache donc le parametre le requete jusqu'a qu'on l'execute avec la requete preparee
         */
        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $num);
            $req_prep->execute(); // execution de la requete
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelMutuelle");
            return $req_prep->fetch();
        }catch (PDOException $e){
            return "erreur";
        }
    }



    public function getNumeroMutuelle()
    {
        return $this->Numero_mutuelle;
    }

    public function getNom()
    {
        return $this->NomMutuelle;
    }

    public function getAME()
    {
        return $this->AME;
    }

    public function getCMU()
    {
        return $this->CMU;
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

    public function getTel()
    {
        return $this->Tel;
    }



}