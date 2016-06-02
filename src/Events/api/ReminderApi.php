<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 01/06/16
 * Time: 00:21
 */

namespace Events\api;

use Events\dao\ReminderDAO;
use Slim\App;

/**
 * Class ReminderApi
 * @package Events\api
 */
class ReminderApi implements AbstractApi{

    /**
     * @var ReminderDAO
     */
    private $dao;

    /**
     * EventApi constructor.
     */
    public function __construct(){
        $this->dao = new ReminderDAO();
    }

    /**
     * Set api routes url
     * @param App $app
     */
    public static function setRoute($app){
        $api = new ReminderApi();
        $app->get('/reminder/(:id)', function ($id) use($api){
            $api->get($id);
        });
        $app->get('/reminders(/)', function () use($api){
            $api->listAll();
        });
        $app->post('/reminder(/)', function ($args) use($api){
            $api->create($args);
        });
        $app->put('/reminder(/)', function ($args) use($api){
            $api->update($args);
        });
        $app->delete('/reminder(/(:id))', function ($id = null) use($api){
            $api->delete($id);
        });
    }

    public function get($id){
        echo json_encode($this->dao->findById($id));
    }

    public function listAll(){
        echo json_encode($this->dao->findAll());
    }

    public function create($event){
        $this->dao->insert($event);
    }

    public function update($event){
        $this->dao->update($event);
    }

    public function delete($id){
        $this->dao->delete($id);
    }
}