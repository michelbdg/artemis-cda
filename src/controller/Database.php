<?php

/**
 * Classe Database
 */

namespace Artemis;
use PDO;


class Database
{
    private $host = 'localhost';
    private $dbname = 'artemis';
    private $username = 'root';
    private $password = '';
    private $charset = 'utf8';

    //connexion
    static public function getPDO(){
        $pdo = new PDO(
            'mysql:host=localhost;dbname=artemis;charset=utf8mb4','root','',
        );
        return $pdo;
    } 

    /**
     * Méthode globale de récupération de tous 
     * les éléments
     * @param string $entity
     * @param int $id
     * @return array
     */
    static public function getAll($entity){
        $pdo = Database::getPDO(); 
        $query = "SELECT * FROM $entity;"; 
        $stament = $pdo->prepare($query);
        $stament->execute(); 
        $data = $stament->fetchAll(PDO::FETCH_ASSOC); 
        return $data; 
    }

    /**
     * Méthode globale de récupération de tous 
     * les éléments
     * @param string $entity
     * @param int $id
     * @return array
     */
    static public function getOne(string $entity, int $id) : array{
        $pdo = Database::getPDO(); 
        $query = "SELECT * FROM $entity WHERE id = $id;"; 
        $stament = $pdo->prepare($query);
        $stament->execute(); 
        $data = $stament->fetchAll(PDO::FETCH_ASSOC); 
        return $data; 
    }
}