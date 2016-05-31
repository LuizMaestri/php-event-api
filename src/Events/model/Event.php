<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 30/05/16
 * Time: 23:33
 */

namespace Events\model;


class Event{
    private $id;
    private $title;
    private $description;
    private $author;
    private $date;
    private $priority;

    /**
     * Event constructor.
     */
    public function __construct(){
    }

    /**
     * @return mixed
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id){
        $this->id = $id;
    }


    /**
     * @return mixed
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title){
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description){
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAuthor(){
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author){
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getDate(){
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date){
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getPriority(){
        return $this->priority;
    }

    /**
     * @param mixed $priority
     */
    public function setPriority($priority){
        $this->priority = $priority;
    }


}