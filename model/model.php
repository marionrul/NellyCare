<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 10:13
 */

require "conf.php";

class Model {


    public static $pdo;

    public static function Init()
    {
        // Permet de se connecter à ma base de données PostgreSQL dont les informations sont dans le fichier conf

        $host = conf::getHostname();

        $dbname = conf::getDataBase();

        $username = conf::getUser();

        $pass = conf::getPassword();

        try {

            self::$pdo = new PDO("mysql:host=$host;dbname=$dbname; charset=utf8", $username,$pass);
            self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        }catch(Exception $e) {
                echo 'Error creating PDO -> ';
                var_dump($e->getMessage());
            }
        return self::$pdo;
    }


    public static function getAll(){
        // Permet de récupérer tous les éléments d'une table

        $SQL="SELECT * FROM ".static::$table;

        try{

            $req_prep = Model::$pdo->prepare($SQL);

            $nomModel =  "Model".static::$table ; // concaténation

            $req_prep->setFetchMode(PDO::FETCH_CLASS, $nomModel );

            // setFetchMode créé des objets du type du model
            $req_prep->execute();
            return $req_prep->fetchAll();

            // fetchAll crée un tableau avec les résultats des requêtes

        } catch(PDOException $e) {

            echo $e->getMessage();

            die();

        }
    }




    static function insert($tab){
        // Permet d'insérer des tuples dans une table

        $sql = "INSERT INTO ".static::$table." VALUES(";

        foreach ($tab as $cle => $valeur){

            $sql .=" :".$cle.",";

        }

        $sql=rtrim($sql,","); // retourne la chaîne sql sans les virgules

        $sql.=");"; // concatène ");" à la fin de mes valeurs à insérer

        try{

            $req_prep = Model::$pdo->prepare($sql);

            $values = array();

            foreach ($tab as $cle => $valeur){

                $values[":".$cle] = $valeur;

            }

            $req_prep->execute($values);

        }catch(PDOException $e) {

            return "echec";

        }

    }



}

Model::Init();

?>