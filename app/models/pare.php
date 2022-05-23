
<?php 

class Pare {

    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    // Affichage les parents
    public function getParents() {
        $this->db->query('SELECT * FROM `parent`');
        $result = $this->db->resultSet();
        return $result;
    }

    // Statistique des parents
    public function nombreParent() {
        $this->db->query('SELECT * FROM `parent`');
        $result = $this->db->resultSet();
        $result = $this->db->rowCount();
        return $result;
    }


    // Ajoure parent
    public function register($data){
        $this->db->query('INSERT INTO parent (nom_complet, genre, job, adresse, phone) VALUES (:username, :genre, :job, :adresse, :phone)');
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':job', $data['job']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':phone', $data['phone']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Delete parent
    public function delete($data){
        $this->db->query('DELETE FROM parent WHERE id = :id');
        $this->db->bind(':id', $data['id']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    // Edite étudianr
    public function edite($data) {
        $this->db->query('UPDATE `parent` SET `nom_complet`=:username , `genre`=:genre , `job`=:job , `adresse`=:adresse , `phone`=:phone WHERE `parent`.`id`=:id');
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':job', $data['job']);
        $this->db->bind(':adresse', $data['adresse']);
        $this->db->bind(':phone', $data['phone']);
        $this->db->execute();

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

}