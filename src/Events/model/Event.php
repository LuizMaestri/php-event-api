<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 30/05/16
 * Time: 23:33
 */

namespace Events\model;

/**
 * @Entity
 * @Table(name="event")
 */
class Event{
    /**
     * @var integer @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @var string
     * @Column()
     */
    private $title;
    /**
     * @var string
     * @Column(type="text")
     */
    private $description;
    /**
     * @ManyToOne(targetEntity="User")
     * @JoinColumn(name="author", referencedColumnName="id")
     */
    private $author;
    /**
     * @Column(type="datetime")
     */
    private $date;
    /**
     * @var integer
     * @Column(type="smallint")
     */
    private $priority;

    /**
     * Event constructor.
     */
    public function __construct(){
    }

    /**
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id){
        $this->id = $id;
    }
    
    /**
     * @return string
     */
    public function getTitle(){
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title){
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getDescription(){
        return $this->description;
    }

    /**
     * @param string $description
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
     * @return int
     */
    public function getPriority(){
        return $this->priority;
    }

    /**
     * @param int $priority
     */
    public function setPriority($priority){
        $this->priority = $priority;
    }

}