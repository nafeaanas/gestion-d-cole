<?php


class Administrateurs extends Controller{

    public function __construct() {
        $this->administrateurModel = $this->model('Administrateur');
    }

    
    public function index() {
        $administrateurs = $this->administrateurModel->getAdministrateurs();
        $data = [
            'administrateurs' => $administrateurs
        ];
        if(isset($_SESSION['email']) && (time() - $_SESSION['timeout'] <= 60*5)){
            $this->view('administrateurs/index', $data);
        }else{
            redirect('users/logout');
        }
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'nom' => trim($_POST['nom']),
                'prenom' => $_POST['prenom'],
                'role' => trim($_POST['role']),
                'password' => $_POST['password'],
                'email' => $_POST['email'],
                'error' => ''
            ];
            if((!empty($data['nom'])) && (!empty($data['prenom'])) && (!empty($data['role'])) && (!empty($data['password'])) && (!empty($data['email']))){
                $administrateur = $this->administrateurModel->register($data);
                if($administrateur){
                    redirect('administrateurs/index', $data);
                }else if($administrateur == false){
                    redirect('administrateurs/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('administrateur/index', $data);
            }
        }
    }
}