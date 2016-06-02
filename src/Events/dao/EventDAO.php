<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 01/06/16
 * Time: 00:15
 */

namespace Events\dao;


/**
 * Class EventDAO
 * @package Events\dao
 */
class EventDAO extends AbstractDAO{

    /**
     * EventDAO constructor.
     */
    public function __construct(){
        parent::__construct('Event');
    }
}