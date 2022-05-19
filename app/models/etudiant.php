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

    // Statistique des étudiants
    public function nombreEtudiant(){
        $this->db->query('SELECT * FROM `etudiant`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    public function genreEtudiant($genre){
        $this->db->query('SELECT * FROM `etudiant` where genre = "'.$genre.'"');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    public function classEtudiant($class){
        $this->db->query('SELECT * FROM `etudiant` where class = '.$class.'');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }
    
}