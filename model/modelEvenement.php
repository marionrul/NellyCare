<?php
/**
 * Created by PhpStorm.
 * User: Marion
 * Date: 17/05/2017
 * Time: 18:59
 */

include_once('model.php');

class ModelEvenement extends Model {

    static $table = "evenement";
    static $primary = "id";

    private $id;
    private $title;
    private $start;
    private $end;

    public function __construct($id = NULL, $title=NULL, $start=NULL, $end=NULL)
    {
        if (!is_null($id) && !is_null($title) && !is_null($start) && !is_null($end)) {
            $this->id = $id;
            $this->title = $title;
            $this->start = $start;
            $this->end = $end;
        }

    }



    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getStart()
    {
        return $this->start;
    }

    public function getEnd()
    {
        return $this->end;
    }


}