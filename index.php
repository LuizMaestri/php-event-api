<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 31/05/16
 * Time: 00:48
 */
$loader = require __DIR__ . '/vendor/autoload.php';

use Events\api\EventApi;
use Events\api\ReminderApi;
use Slim\App;

$app = new App();

$app->get('/',function (){
    echo '<h1 style="text-align:center;">ROUTES</h1>';
});

EventApi::setRoute($app);
ReminderApi::setRoute($app);

$app->run();