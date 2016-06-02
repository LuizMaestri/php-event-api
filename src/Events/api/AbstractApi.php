<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 02/06/16
 * Time: 03:38
 */

namespace Events\api;


interface AbstractApi{

    public static function setRoute($app);
    public function get($id);
    public function listAll();
    public function create($event);
    public function update($event);
    public function delete($id);

}