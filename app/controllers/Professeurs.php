<?php



class Professeurs extends Controller {

    public function __construct() {
        $this->ProfesseurModel = $this->model('Professeur');
    }

    
    public function index() {
        $Professeur = $this->ProfesseurModel->getProfesseurs();
        $data = [
            'Professeurs' => $Professeur 
        ];
        if(isset($_SESSION['email'])){
            $this->view('Professeur/index', $data);
        }else{
            redirect('users/index');
        }
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
                'username' => trim($_POST['username']),
                'genre' => $_POST['genre'],
                'class' => $_POST['class'],
                'matiere' => trim($_POST['matiere']),
                'phone' => trim($_POST['phone']),
                'error' => ''
            ];
            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['class'])) && (!empty($data['matiere'])) && (!empty($data['phone']))){
                $professeur = $this->ProfesseurModel->register($data);
                if($professeur){
                    redirect('professeurs/index', $data);
                }else if($professeur == false){
                    redirect('professeurs/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('professeur/index', $data);
            }
        }
    }
    
    public function edite() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'username' => trim($_POST['username']),
                'genre' => $_POST['genre'],
                'class' => $_POST['class'],
                'matiere' => trim($_POST['matiere']),
                'phone' => trim($_POST['phone']),
                'error' => ''
            ];

            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['class'])) && (!empty($data['matiere'])) && (!empty($data['phone']))){
                $professeur = $this->ProfesseurModel->edite($data);
                if($professeur){
                    redirect('professeurs/index', $data);
                }else if($professeur == false){
                    redirect('professeurs/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('professeur/index', $data);
            }           
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); 
            $data = [
                'id' => $_GET['professeur'],
                'error' => ''
            ];
            $professeur = $this->ProfesseurModel->delete($data);
            if($professeur){
                redirect('professeurs/index', $data);
            }else if($professeur == false){
                redirect('professeurs/index', $data);
            }
        }
    }
}