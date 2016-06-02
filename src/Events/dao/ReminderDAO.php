<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 01/06/16
 * Time: 00:19
 */

namespace Events\dao;


/**
 * Class ReminderDAO
 * @package Events\dao
 */
class ReminderDAO extends AbstractDAO{

    /**
     * ReminderDAO constructor.
     */
    public function __construct(){
        parent::__construct('Reminder');
    }
}