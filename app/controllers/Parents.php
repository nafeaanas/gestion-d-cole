<?php


class Parents extends Controller{

    public function __construct()
    {
        $this->parenttModel = $this->model('Pareent');
    }

    
    public function index(){

        $Parent = $this->parenttModel->getParents();
        $data = [
            'Parent' => $Parent
        ];

        $this->view('Parents/index', $data);
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