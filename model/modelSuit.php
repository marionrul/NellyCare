<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 19/05/2017
 * Time: 13:28
 */


include_once('model.php');

class ModelSuit extends Model {

    static $table = "Suit";
    static $primary = "Numero_identificateur";

    private $numero_identificateur;
    private $num_secu;

    public function __construct($numero_identificateur = NULL, $num_secu=NULL)
    {
        if (!is_null($numero_identificateur) && !is_null($num_secu)) {
            $this->numero_identificateur = $numero_identificateur;
            $this->num_secu = $num_secu;
        }

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
?>