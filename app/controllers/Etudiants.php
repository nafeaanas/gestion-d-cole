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
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'username' => trim($_POST['username']),
                'genre' => trim($_POST['genre']),
                'email' => trim($_POST['email']),
                'class' => $_POST['class'],
                'parent' => $_POST['parent'],
                'date_de_naissance' => $_POST['date_de_naissance'],
                'adresse' => $_POST['adresse'],
                'error' => ''
            ];

            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['email'])) && (!empty($data['class'])) && (!empty($data['parent'])) && (!empty($data['date_de_naissance'])) && (!empty($data['adresse']))){
                $user = $this->etudiantModel->register($data);
                if($user){
                    $this->index();
                }else if($user == false){
                    $this->index();
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('etudiant/index', $data);
            }
        }
    }

    public function edit($id) {

    }
    
    public function delete($id) {

    }


}