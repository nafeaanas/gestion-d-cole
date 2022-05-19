<?php


class Administrateurs extends Controller{

    public function __construct()
    {
        $this->administrateurModel = $this->model('Administrateur');
    }

    
    public function index(){

        $administrateurs = $this->administrateurModel->getAdministrateurs();
        $data = [
            'administrateurs' => $administrateurs
        ];

        $this->view('administrateurs/index', $data);
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