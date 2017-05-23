<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 18:52
 */


include_once('model.php');

class ModelPrescription extends Model {

    static $table = "Prescription";
    static $primary = "Num_prescription";

    private $num_prescription;
    private $date_debut;
    private $duree;
    private $nb_seances;
    private $periode;
    private $numero_identificateur;
    private $num_secu;

    public function __construct($num_prescription = NULL, $date_debut=NULL, $duree=NULL, $nb_seances=NULL, $periode=NULL, $numero_identificateur=NULL, $num_secu=NULL)
    {
        if (!is_null($num_prescription) && !is_null($date_debut) && !is_null($duree) && !is_null($nb_seances)  && !is_null($periode) && !is_null($numero_identificateur) && !is_null($num_secu)) {
            $this->num_prescription = $num_prescription;
            $this->date_debut = $date_debut;
            $this->duree = $duree;
            $this->nb_seances = $nb_seances;
            $this->periode = $periode;
            $this->numero_identificateur = $numero_identificateur;
            $this->num_secu = $num_secu;
        }

    }

    public static function getAllPrescription(){
        // Retourne toutes les infos du patient identifié par le numéro donné en paramètre
        $sql ='SELECT *
                FROM Prescription P2
                LEFT JOIN Patient P ON P.Num_secu=P2.Num_secu
                LEFT JOIN Acte A ON P2.Num_prescription=A.Num_prescription';
        /*
         * On utilise une requete sql
         * On affiche pas directement $numSecu pour eviter les injections sql
         * on cache donc le parametre le requete jusqu'a qu'on l'execute avec la requete preparee
         */
        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->execute(); // execution de la requete
            return $req_prep->fetchall();
        }catch (PDOException $e){
            echo "erreur";
            return "erreur";
        }
    }


    public function getNumPrescription()
    {
        return $this->Num_prescription;
    }

    public function getDateDebut()
    {
        return $this->Date_debut;
    }

    public function getDuree()
    {
        return $this->Duree;
    }

    public function getNbSeances()
    {
        return $this->Nb_seances;
    }

    public function getPeriode()
    {
        return $this->Periode;
    }

    public function getNumeroIdentificateur()
    {
        return $this->Numero_identificateur;
    }

    public function getNumSecu()
    {
        return $this->Num_secu;
    }


}