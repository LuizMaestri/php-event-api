<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 31/05/16
 * Time: 22:42
 */

// bootstrap.php
require_once "vendor/autoload.php";

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = array(__DIR__."/src/Events/model");
$isDevMode = false;

// the connection configuration
$dbParams = array(
    'driver'   => 'mysqli',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'testevent',
);

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$entityManager = EntityManager::create($dbParams, $config);