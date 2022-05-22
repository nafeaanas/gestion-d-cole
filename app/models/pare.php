
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

}