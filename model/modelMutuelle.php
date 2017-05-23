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



    public function getNumeroMutuelle()
    {
        return $this->Numero_mutuelle;
    }

    public function getNom()
    {
        return $this->Nom;
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