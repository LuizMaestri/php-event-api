<?php

/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 31/05/16
 * Time: 01:46
 */

namespace Events\api;

use Events\dao\EventDAO;
use Slim\App;

/**
 * Class EventApi
 * @package Events\api
 */
class EventApi implements AbstractApi{

    /*
     * @var EventDAO*/
    private $dao;

    /**
     * EventApi constructor.
     */
    public function __construct(){
        $this->dao = new EventDAO();
    }

    /**
     * Set api routes url
     * @param App $app
     */
    public static function setRoute($app){
        $api = new EventApi();
        $app->get('/event/', function ($request, $response, $args) use($api){
            $api->get(1);
        });
        $app->get('/events/', function ($request, $response, $args) use($api){
            $api->listAll();
        });
        $app->post('/event/', function ($args) use($api){
            $api->create($args);
        });
        $app->put('/event/', function ($args) use($api){
            $api->update($args);
        });
        $app->delete('/event/{:id}', function ($id) use($api){
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
