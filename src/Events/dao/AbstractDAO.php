<?php
/**
 * Created by PhpStorm.
 * User: luiz
 * Date: 01/06/16
 * Time: 00:12
 */

namespace Events\dao;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;
use Events\model\Entity;

/**
 * Class AbstractDAO
 * @package Events\dao
 */
abstract class AbstractDAO{

    /**
     * @var EntityManager
     */
    private $entityManager;
    /**
     * @var string
     */
    private $entityPath = 'Events\model';
    /**
     * @var string
     */
    private $entityClass;
    /**
     * AbstractDAO constructor.
     */
    public function __construct($entityClass){
        $this->entityClass = $this->entityPath . '\\' . $entityClass;
        $this->entityManager = $this->createEntityManager();
    }

    /**
     * @return @var EntityManager
     * */
    public function createEntityManager(){
        $path = array($this->entityPath);
        $project = Array(
            'devMode' => true,
            'connectionParams' => array(
                'driver'   => 'pdo_mysql',
                'user'     => 'root',
                'password' => '123',
                'dbname'   => 'testevent',
            )
        );
        $config = Setup::createAnnotationMetadataConfiguration($path, $project['devMode']);
        return EntityManager::create($project['connectionParams'], $config);
    }

    /**
     * Insert Entity on DB
     */
    public function insert($entity){
        $this->entityManager->persist($entity);
        $this->entityManager->flush();
    }

    /**
     * Update a register
     */
    public function update($entity){
        $this->entityManager->merge($entity);
        $this->entityManager->flush();
    }

    /**
     * Delete a register from DB
     */
    public function delete($id){
        $this->entityManager->remove($this->findById($id));
        $this->entityManager->flush();
    }
    
    /**
     * Find a register by your Id
     * */
    public function findById($id){
        return $this->entityManager->find($this->entityClass, $id);
    }

    /**
     * Find a register by your Id
     * @return array
     * */
    public function findAll(){
        return $this->entityManager->getRepository($this->entityClass)->findAll();

    }
}