<?php

class Profile {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getProfiles(){
        $this->db->query('SELECT * FROM `administrateur`');
        $result = $this->db->resultSet();
        return $result;
    }
    
}