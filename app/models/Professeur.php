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

}