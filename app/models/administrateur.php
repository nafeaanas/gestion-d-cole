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

    // Statistique des administrateur
    public function nombreAdministrateur(){
        $this->db->query('SELECT * FROM `administrateur`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    // Ajoure administrateur
    public function register($data){
        $this->db->query('INSERT INTO administrateur (nom, prenom, role, password, email) VALUES (:nom, :prenom, :role, :password, :email)');
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':email', $data['email']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}