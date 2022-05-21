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
        if(isset($_SESSION['email'])){
            $this->view('Parents/index', $data);
        }else{
            redirect('users/index');
        }
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