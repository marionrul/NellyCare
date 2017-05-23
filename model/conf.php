<?php

/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 10:14
 */

class conf {


    static private $databases = array(

        // Le nom d'hote est infolimon a l'IUT

        // ou localhost sur votre machine

        'hostname' => 'marionruavtest.mysql.db',

        // A l'IUT, vous avez une BDD nommee comme votre login

        // Sur votre machine, vous devrez creer une BDD

        'database' => 'marionruavtest',

        // A l'IUT, c'est votre login

        // Sur votre machine, vous avez surement un compte 			'root'

        'user' => 'marionruavtest',

        // A l'IUT, c'est votre mdp (INE par defaut)

        // Sur votre machine personelle, vous avez creez ce 		mdp a l'installation

        'password' => 'Mar523452'
    );


    static public function getUser() {

        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        // self = this

        return self::$databases['user'];

    }



    static public function getHostname() {

        // retourne le nom de l'hote

        return self::$databases['hostname'];

    }



    static public function getDatabase() {

        //retourne le nom de la base de données

        return self::$databases['database'];

    }



    static public function getPassword() {

        // retourne le password de l'user

        return self::$databases['password'];

    }


}

?>