<?php

class Etudiant {

    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // Affichage des étudiants
    public function getEtudiants() {
        $this->db->query('SELECT * FROM `etudiant`');
        $result = $this->db->resultSet();
        return $result;
    }

    // Statistique des étudiants
    public function nombreEtudiant() {
        $this->db->query('SELECT * FROM `etudiant`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    // Genre des étudiants
    public function genreEtudiant($genre) {
        $this->db->query('SELECT * FROM `etudiant` where genre = "'.$genre.'"');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    // Classe des étudiants
    public function classEtudiant($class){
        $this->db->query('SELECT * FROM `etudiant` where class = '.$class.'');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }

    // Ajoure étudiant
    public function register($data){
        $this->db->query('INSERT INTO etudiant (nom_complet, genre, class, parent, adresse, date_de_naissance, email) VALUES (:username, :genre, :class, :parent, :adresse, :date_de_naissance, :email)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':class', $data['class']);
        $this->db->bind(':parent', $data['parent']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':date_de_naissance', $data['date_de_naissance']);
        $this->db->bind(':email', $data['email']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete étudiant
    public function delete($data){
        $this->db->query('DELETE FROM etudiant WHERE id = :id');
        $this->db->bind(':id', $data['id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Edite étudianr
    public function edite($data) {
        $this->db->query('UPDATE `etudiant` SET `nom_complet`=:username , `genre`=:genre , `class`=:class , `parent`=:parent , `adresse`=:adresse , `date_de_naissance`=:date_de_naissance ,`email`=:email  WHERE `etudiant`.`id`=:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':class', $data['class']);
        $this->db->bind(':parent', $data['parent']);
        $this->db->bind(':date_de_naissance', $data['date_de_naissance']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->execute();

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }
}