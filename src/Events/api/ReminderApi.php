<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 01/06/16
 * Time: 00:21
 */

namespace Events\api;

use Slim\App;

class ReminderApi {

    public static function setRoute($app){
        /** @var App $app */
        $app->get('/reminder(/(:id))', function ($id){
            self::get($id);
        });
        $app->get('/reminders(/)', function (){
            self::listAll();
        });
        $app->post('/reminder(/)', function ($args){
            self::create($args);
        });
        $app->put('/reminder(/)', function ($args){
            self::update($args);
        });
        $app->delete('/reminder(/(:id))', function ($id = null){
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