<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 18:59
 */

include_once('model.php');

class ModelActe extends Model {

    static $table = "Acte";
    static $primary = "Nom_acte";

    private $nom_acte;
    private $designation;
    private $date_debut;
    private $tarif;

    public function __construct($nom_acte = NULL, $designation=NULL, $date_debut=NULL, $tarif=NULL)
    {
        if (!is_null($nom_acte) && !is_null($designation) && !is_null($date_debut) && !is_null($tarif)) {
            $this->nom_acte = $nom_acte;
            $this->designation = $designation;
            $this->date_debut = $date_debut;
            $this->tarif = $tarif;
        }

    }

    public static function getActe($numPresc){
        // Retourne les actes correspondant à la prescription  donnée en paramètre
        $sql ='SELECT * FROM Acte, Prescription
                WHERE Prescription.Num_prescription=Acte.Num_prescription AND Prescription.Num_prescription=:cle';
        /*
         * On utilise une requete sql
         * On affiche pas directement $numSecu pour eviter les injections sql
         * on cache donc le parametre le requete jusqu'a qu'on l'execute avec la requete preparee
         */
        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $numPresc);
            $req_prep->execute(); // execution de la requete
            return $req_prep->fetchall();
        }catch (PDOException $e){
            return "erreur";
        }
    }

    public static function getActeById($num){
        $sql ='SELECT *
                FROM Acte
                WHERE  Nom_acte=:cle';
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
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelActe");
            return $req_prep->fetch();
        }catch (PDOException $e){
            return "erreur";
        }
    }

    public function getNomActe()
    {
        return $this->Nom_acte;
    }

    public function getDesignation()
    {
        return $this->Designation;
    }

    public function getDateDebut()
    {
        return $this->Date_debut;
    }

    public function getTarif()
    {
        return $this->Tarif;
    }


}