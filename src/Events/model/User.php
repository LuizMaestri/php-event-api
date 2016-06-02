<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 30/05/16
 * Time: 23:45
 */

namespace Events\model;

/**
 * @Entity
 * @Table(name="users")
 */
class User{
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
    private $login;
    /**
     * @var string
     * @Column(type="text", length=32)
     */
    private $pass;

    /**
     * User constructor.
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
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param string $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }
    
}