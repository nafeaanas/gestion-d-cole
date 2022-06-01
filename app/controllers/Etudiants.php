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
        if(isset($_SESSION['email']) && (time() - $_SESSION['timeout'] <= 60*5)){
            $this->view('etudiants/index', $data);
        }else{
            redirect('users/logout');
        }
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'username' => trim($_POST['username']),
                'genre' => $_POST['genre'],
                'email' => trim($_POST['email']),
                'class' => $_POST['class'],
                'parent' => trim($_POST['parent']),
                'date_de_naissance' => $_POST['date_de_naissance'],
                'adresse' => trim($_POST['adresse']),
                'error' => ''
            ];
            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['email'])) && (!empty($data['class'])) && (!empty($data['parent'])) && (!empty($data['date_de_naissance'])) && (!empty($data['adresse']))){
                $etudiant = $this->etudiantModel->register($data);
                if($etudiant){
                    redirect('etudiants/index', $data);
                }else if($etudiant == false){
                    redirect('etudiants/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('etudiant/index', $data);
            }
        }
    }
    
    public function edite() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'id' => $_POST['id'],
                'username' => trim($_POST['username']),
                'genre' => $_POST['genre'],
                'email' => trim($_POST['email']),
                'class' => $_POST['class'],
                'parent' => trim($_POST['parent']),
                'date_de_naissance' => $_POST['date_de_naissance'],
                'adresse' => trim($_POST['adresse']),
                'error' => ''
            ];

            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['email'])) && (!empty($data['class'])) && (!empty($data['parent'])) && (!empty($data['date_de_naissance'])) && (!empty($data['adresse']))){
                $etudiant = $this->etudiantModel->edite($data);
                if($etudiant){
                    redirect('etudiants/index', $data);
                }else if($etudiant == false){
                    redirect('etudiants/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('etudiant/index', $data);
            }           
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); 
            $data = [
                'id' => $_GET['etudiant'],
                'error' => ''
            ];
            $etudiant = $this->etudiantModel->delete($data);
            if($etudiant){
                redirect('etudiants/index', $data);
            }else if($etudiant == false){
                redirect('etudiants/index', $data);
            }
        }
    }
}