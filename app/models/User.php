<?php

class User {    
    private $db;
    public function __construct(){
        $this->db = new Database;
    }

    public function getUser(){
        $this->db->query('SELECT * FROM `administrateur`');
        $result = $this->db->resultSet();
        return $result;
    }

    // find user by email
    public function findUserById($id){
        $this->db->query('SELECT * FROM `administrateur` WHERE email = :email');
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //check the row 
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Login
    public function login($email, $password){
        $this->db->query('SELECT * FROM `administrateur` where email = :email AND password = :password');
        $this->db->bind(':email', $email);
        $this->db->bind(':password', $password);
        $row = $this->db->single();
        if($row){
            return $row;
        }else{
            return false;
        }
    }

    // Edite
    public function edite($id,$name,$prenom,$email,$role) {
        $this->db->query("UPDATE `administrateur` SET `nom`=:nom , `prenom`=:prenom , `email`=:email , `role`=:role WHERE `administrateur`.`id`=:id");
        $this->db->bind(':id', $id);
        $this->db->bind(':nom', $name);
        $this->db->bind(':prenom', $prenom);
        $this->db->bind(':email', $email);
        $this->db->bind(':role', $role);
        $this->db->execute();
        
    }

    // public function getUserById($id){
    //     $this->db->query('SELECT * FROM `administrateur` WHERE id = :id');
    //     $this->db->bind(':id', $id);
    //     $row = $this->db->single();
    //     return $row;
    // }
}