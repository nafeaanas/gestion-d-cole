<?php

class Administrateur {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAdministrateurs(){
        $this->db->query('SELECT * FROM `administrateur`');
        $result = $this->db->resultSet();
        return $result;
    }

    // Statistique des étudiants
    public function nombreAdministrateur(){
        $this->db->query('SELECT * FROM `administrateur`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }
    
}