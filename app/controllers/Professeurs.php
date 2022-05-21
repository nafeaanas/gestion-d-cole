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