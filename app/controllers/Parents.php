<?php


class Parents extends Controller{

    public function __construct() {
        $this->parenttModel = $this->model('Pare');
    }

    public function index() {
        $Parent = $this->parenttModel->getParents();
        $data = [
            'Parents' => $Parent
        ];
        if(isset($_SESSION['email']) && (time() - $_SESSION['timeout'] <= 60*5)){
            $this->view('Parents/index', $data);
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
                'job' => trim($_POST['job']),
                'adresse' => trim($_POST['adresse']),
                'phone' => trim($_POST['phone']),
                'error' => ''
            ];
            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['job'])) && (!empty($data['adresse'])) && (!empty($data['phone']))){
                $parent = $this->parenttModel->register($data);
                if($parent){
                    redirect('parents/index', $data);
                }else if($parent == false){
                    redirect('parents/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('parent/index', $data);
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
                'job' => trim($_POST['job']),
                'adresse' => trim($_POST['adresse']),
                'phone' => trim($_POST['phone']),
                'error' => ''
            ];

            if((!empty($data['username'])) && (!empty($data['genre'])) && (!empty($data['job'])) && (!empty($data['adresse'])) && (!empty($data['phone']))){
                $parent = $this->parenttModel->edite($data);
                if($parent){
                    redirect('parents/index', $data);
                }else if($parent == false){
                    redirect('parents/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('parent/index', $data);
            }       
        }
    }

    public function delete() {
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $_GET = filter_input_array(INPUT_GET, FILTER_SANITIZE_STRING); 
            $data = [
                'id' => $_GET['parent'],
                'error' => ''
            ];
            $parent = $this->parenttModel->delete($data);
            if($parent){
                redirect('parents/index', $data);
            }else if($parent == false){
                redirect('parents/index', $data);
            }
        }
    }
}