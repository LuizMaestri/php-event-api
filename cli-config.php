<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 31/05/16
 * Time: 22:41
 */
require_once "bootstrap.php";
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);