<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 10:04
 */

include_once ('model.php');

class ModelCaisse extends Model {

    static $table = "Caisse";
    static $primary = "Numero_caisse";

    private $numero_caisse;
    private $nom;
    private $regime;
    private $centre;
    private $rue;
    private $code_postal;
    private $ville;
    private $tel;

    public function __construct($numero_caisse = NULL, $nom=NULL, $regime=NULL, $centre=NULL, $rue=NULL, $code_postal=NULL, $ville=NULL, $tel=NULL)
    {
        if (!is_null($numero_caisse) && !is_null($nom) && !is_null($regime) && !is_null($centre) && !is_null($rue) && !is_null($code_postal) && !is_null($ville) && !is_null($tel)) {
            $this->numero_mutuelle = $numero_caisse;
            $this->nom = $nom;
            $this->AME = $regime;
            $this->CMU = $centre;
            $this->rue = $rue;
            $this->code_postal = $code_postal;
            $this->ville = $ville;
            $this->tel = $tel;
        }

    }

    public static function getCaisse($num){
        // Retourne la caisse correspondant au patient donné en paramètre
        $sql ='SELECT * FROM Caisse, Patient 
                WHERE Caisse.Numero_caisse=Patient.Numero_caisse AND Patient.Num_secu=:cle';
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
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelCaisse");
            return $req_prep->fetch();
        }catch (PDOException $e){
            return "erreur";
        }
    }



    public function getNumeroCaisse()
    {
        return $this->Numero_caisse;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getRegime()
    {
        return $this->Regime;
    }

    public function getCentre()
    {
        return $this->Centre;
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