<?php


class Etudiants extends Controller{

    public function __construct() {
        $this->etudiantModel = $this->model('Etudiant');
    }

    public function index() {
        $etudiants = $this->etudiantModel->getEtudiants();
        $data = [
            'etudiants' => $etudiants,
        ];
        if(isset($_SESSION['email'])){
            $this->view('etudiants/index', $data);
        }else{
            redirect('users/index');
        }
    }

    public function add() {
        var_dump($_POST);
    }

    public function edit($id) {

    }
    
    public function delete($id) {

    }


}