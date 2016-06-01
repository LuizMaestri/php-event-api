<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 01/06/16
 * Time: 00:12
 */

namespace Events\dao;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class AbstractDAO{

    private $entityManager;
    private $entityPath = 'Events\model';
    private $entityClass;
    /**
     * AbstractDAO constructor.
     */
    public function __construct($entityClass){
        $this->entityClass = $this->entityClass . $entityClass;
        $this->entityManager = $this->createEntityManager();
    }

    public function createEntityManager(){
        $path = array($this->entityPath);
        $devMode = true;
        $config = Setup::createAnnotationMetadataConfiguration($path, $devMode);

        $connectionParams = array(
            'driver'   => 'pdo_mysql',
            'user'     => 'root',
            'password' => '',
            'dbname'   => 'testevent',
        );
        return EntityManager::create($connectionParams, $config);
    }

    public function insert($entity){
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }
    public function update($entity){
        $this->entityManager->merge($entity);
        $this->entityManager->flush();
    }
    public function delete($id){
        $this->entityManager->remove($this->findById($id));
    }
    public function findById($id){
        return $this->entityManager->find($this->entityPath, $id);
    }
    public function findAll(){}

}