<?php

class Professeur  {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfesseurs(){
        $this->db->query('SELECT * FROM `professeur`');
        $result = $this->db->resultSet();
        return $result;
    } 


    // Statistique des professeurs
    public function nombreProfesseur(){
        $this->db->query('SELECT * FROM `professeur`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    public function genreProfesseur($genre){
        $this->db->query('SELECT * FROM `professeur` where genre = "'.$genre.'"');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

}