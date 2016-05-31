<?php

/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 31/05/16
 * Time: 01:46
 */

namespace Events\api;

use Events\model\Event;
use Slim\App;

class EventApi{

    public static function setRoute($app){
        /** @var App $app */
        $app->get('/event/get/:id', function ($request, $response, $id){
            self::get($id);
        });
        $app->get('/event/list/', function ($request, $response, $args){
            self::listAll();
        });
        $app->post('/event/create/', function ($request, $response, $args){
            self::create($args);
        });
        $app->put('/event/edit/', function ($request, $response, $args){
            self::update($args);
        });
        $app->delete('/event/delete/:id', function ($request, $response, $id){
            self::delete($id);
        });
    }

    public static function get($id){

    }

    public static function listAll(){

    }

    public static function create($event){

    }

    public static function update($event){

    }

    public static function delete($id){

    }
}