<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 17:47
 */

include_once ('model.php');

class ModelPrescripteur extends Model {

    static $table = "Prescripteur";
    static $primary = "Numero_identificateur";

    private $numero_identificateur;
    private $nom;
    private $prenom;
    private $specialite;
    private $rue;
    private $code_postal;
    private $ville;
    private $tel;

    public function __construct($numero_identificateur = NULL, $nom=NULL, $prenom=NULL, $specialite=NULL, $rue=NULL, $code_postal=NULL, $ville=NULL, $tel=NULL)
    {
        if (!is_null($numero_identificateur) && !is_null($nom) && !is_null($prenom) && !is_null($specialite)  && !is_null($rue) && !is_null($code_postal) && !is_null($ville) && !is_null($tel)) {
            $this->numero_identificateur = $numero_identificateur;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->specialite = $specialite;
            $this->rue = $rue;
            $this->code_postal = $code_postal;
            $this->ville = $ville;
            $this->tel = $tel;
        }

    }

    public static function getPrescripteurById($numIdent){
        $sql ='SELECT *
                FROM Prescripteur
                WHERE  Numero_identificateur=:cle';
        /*
         * On utilise une requete sql
         * On affiche pas directement $numIdent pour eviter les injections sql
         * on cache donc le parametre le requete jusqu'a qu'on l'execute avec la requete preparee
         */
        try{
            // requête preparée
            $req_prep =  Model::$pdo->prepare($sql);
            $req_prep->bindParam(':cle', $numIdent);
            $req_prep->execute(); // execution de la requete
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelPrescripteur");
            return $req_prep->fetch();
        }catch (PDOException $e){
            return "erreur";
        }
    }

    public static function getPrescripteur($numSecu){
        // Retourne le prescripteur correspondant au patient donné en paramètre
        $sql ='SELECT * FROM Prescripteur, Suit, Patient 
                WHERE Prescripteur.Numero_identificateur=Suit.Numero_identificateur AND Suit.Num_secu=Patient.Num_secu AND Patient.Num_secu=:cle';
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
            $req_prep->setFetchMode(PDO::FETCH_CLASS, "ModelPrescripteur");
            return $req_prep->fetch();
        }catch (PDOException $e){
            return "erreur";
        }
    }

    public static function updatePrescripteur($num, $nom, $prenom, $specialite, $rue, $code_postal, $ville, $tel) {
        $sql='UPDATE Prescripteur
        SET Nom=:nom, Prenom=:prenom, Specialite=:spe, Rue=:rue, Code_postal=:cp, Ville=:ville, Tel=:tel WHERE Numero_identificateur=:num';

        try {
            $req_prep = Model::$pdo->prepare($sql);
            $req_prep->bindParam(':num', $num);
            $req_prep->bindParam(':nom', $nom);
            $req_prep->bindParam(':prenom', $prenom);
            $req_prep->bindParam(':spe', $specialite);
            $req_prep->bindParam(':rue', $rue);
            $req_prep->bindParam(':cp', $code_postal);
            $req_prep->bindParam(':ville', $ville);
            $req_prep->bindParam(':tel', $tel);
            $req_prep->execute();
        } catch(PDOException $e) {
            return "erreur";
        }
    }


    public function getNumeroIdentificateur()
    {
        return $this->Numero_identificateur;
    }

    public function getNom()
    {
        return $this->Nom;
    }

    public function getPrenom()
    {
        return $this->Prenom;
    }

    public function getSpecialite()
    {
        return $this->Specialite;
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