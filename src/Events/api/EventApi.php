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
        $app->get('/event(/(:id))', function ($id){
            self::get($id);
        });
        $app->get('/events(/)', function (){
            self::listAll();
        });
        $app->post('/event(/)', function ($args){
            self::create($args);
        });
        $app->put('/event(/)', function ($args){
            self::update($args);
        });
        $app->delete('/event(/(:id))', function ($id){
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
