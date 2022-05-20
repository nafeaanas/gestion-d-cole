<?php


class Users extends Controller{

    public function __construct()
    {
        $this->userModel = $this->model('User');
    }

    public function index(){

        $User = $this->userModel->getUser();
        $data = [
            'Users' => $User
        ];

        $this->view('users/index', $data);
    }


    public function login(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 
            $data = [
               'email' => trim($_POST['email']),
               'password' => trim($_POST['password']),
               'error' => ''
            ];
            if((!empty($data['email'])) && (strlen($data['password']) >= 3) && (!empty($data['password']))){
                $user = $this->userModel->login($data['email'], $data['password']);
                if($user){
                    $this->createUserSession($user);
                    redirect('index');
                }else if($user == false){
                    $data['error'] = 'Your Email Or Password Is Incorrect';
                    $this->view('users/index', $data);
                }
            }else{
                $data['error'] = 'File Your Email Or Password To LogIn';
                $this->view('users/index', $data);
            }
        }else{
            //init data
            $data = [
                'email' => '',
                'password' => '',
                'error' => ''
            ];
            $this->view('users/index', $data);        
        }
    }

    public function edite() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING); 

            $data = [
                'user_id' => $_SESSION['user_id'],
                'name' => trim($_POST['name']),
                'prenom' => trim($_POST['prenom']),
                'email' => trim($_POST['email']),
                'role' => $_POST['role'],
                'password' => $_POST['password'],
                'error' => ''
            ];

            if((!empty($data['name'])) && (!empty($data['prenom'])) && (!empty($data['email'])) && (!empty($data['role'])) && (!empty($data['password']))){
                $user = $this->userModel->login($data['email'], $data['password']);
                if($user){
                    $user = $this->userModel->edite($data['user_id'],$data['name'],$data['prenom'],$data['email'],$data['role']);
                    $user = $this->userModel->login($data['email'], $data['password']);
                    $this->createUserSession($user);
                    $this->view('profiles/index', $data);
                }else if($user == false){
                    $data['error'] = 'Your Password Is Incorrect';
                    $this->view('profiles/index', $data);
                }
            }
            else{
                $data['error'] = 'Please, Fill in all the File';
                $this->view('profiles/index', $data);
            }
        }
    }

    //setting user section variable
    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['name'] = $user->nom;
        $_SESSION['prenom'] = $user->prenom;
        $_SESSION['role'] = $user->role;
        $_SESSION['email'] = $user->email;
        // redirect('index');
    }

    //logout and destroy user session
    public function logout(){
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        session_destroy();
        redirect('users/index');
    }
}