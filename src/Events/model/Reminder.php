<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 30/05/16
 * Time: 23:41
 */

namespace Events\model;

/**
 * @Entity
 * @Table(name="reminder")
 */
class Reminder{
    /**
     * @var integer @Id
     * @Column(name="id", type="integer")
     * @GeneratedValue(strategy="AUTO")
     */
    private $id;
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
     * @var integer
     * @Column(type="smallint")
     */
    private $period;

    /**
     * Reminder constructor.
     */
    public function __construct(){
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param mixed $period
     */
    public function setPeriod($period)
    {
        $this->period = $period;
    }

}