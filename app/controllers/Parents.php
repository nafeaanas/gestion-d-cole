<?php


class Parents extends Controller{

    public function __construct()
    {
        $this->parenttModel = $this->model('Pare');
    }

    
    public function index(){

        $Parent = $this->parenttModel->getParents();
        $data = [
            'Parents' => $Parent
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