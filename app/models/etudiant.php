<?php

class Etudiant {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getEtudiants(){
        $this->db->query('SELECT * FROM `etudiant`');
        $result = $this->db->resultSet();
        return $result;
    }
    
}