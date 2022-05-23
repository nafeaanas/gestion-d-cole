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

    // Ajoure Professeur
    public function register($data){
        $this->db->query('INSERT INTO professeur (nom_complet, genre, class, matiere, phone) VALUES (:username, :genre, :class, :matiere, :phone)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':class', $data['class']);
        $this->db->bind(':matiere', $data['matiere']);
        $this->db->bind(':phone', $data['phone']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete Professeur
    public function delete($data){
        $this->db->query('DELETE FROM professeur WHERE id = :id');
        $this->db->bind(':id', $data['id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Edite Professeur
    public function edite($data) {
        $this->db->query('UPDATE `professeur` SET `nom_complet`=:username , `genre`=:genre , `class`=:class , `matiere`=:matiere , `phone`=:phone WHERE `professeur`.`id`=:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':class', $data['class']);
        $this->db->bind(':matiere', $data['matiere']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->execute();

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}