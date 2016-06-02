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
$project = include ('config.php');

$config = Setup::createAnnotationMetadataConfiguration($paths, $project['devMode']);
$entityManager = EntityManager::create($project['connectionParams'], $config);