<?php


class Profiles extends Controller{

    public function __construct() {
        $this->profiletModel = $this->model('Profile');
    }

    
    public function index() {
        $Profile = $this->profiletModel->getProfiles();
        $data = [
            'profiles' => $Profile
        ];
        if(isset($_SESSION['email']) && (time() - $_SESSION['timeout'] <= 60*5)){
            $this->view('profiles/index', $data);
        }else{
            redirect('users/logout');
        }
    }
}