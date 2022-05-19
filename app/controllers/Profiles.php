<?php


class Profiles extends Controller{

    public function __construct()
    {
        $this->profiletModel = $this->model('Profile');
    }

    
    public function index(){

        $Profile = $this->profiletModel->getProfiles();
        $data = [
            'profiles' => $Profile
        ];

        $this->view('profiles/index', $data);
    }


    public function add(){

    }

    //show single post 
    public function show($id){

    }

     //edit post
     public function edit($id){

    }
    
    //delete post
    public function delete($id){

    }


}