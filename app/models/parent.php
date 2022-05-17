
<?php 

class Paresnt {

    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getParents(){
        $this->db->query('SELECT * FROM `parent`');
        $result = $this->db->resultSet();
        return $result;
    }

}