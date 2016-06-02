<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 31/05/16
 * Time: 23:24
 */

namespace Events\dao;

/**
 * Class UserDAO
 * @package Events\dao
 */
class UserDAO extends AbstractDAO{

    /**
     * UserDAO constructor.
     */
    public function __construct(){
        parent::__construct('User');
    }
}