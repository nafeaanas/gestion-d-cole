<?php

  class Dashboards extends Controller {
    public function __construct(){
      $this->administrateurModel = $this->model('Administrateur');
      $this->etudiantModel = $this->model('Etudiant');
      $this->professeurModel = $this->model('Professeur');
      $this->parentModel = $this->model('Pare');
    }
    
    public function index(){
      $rowadministrateurs = $this->administrateurModel->nombreAdministrateur();
      $rowetudiants = $this->etudiantModel->nombreEtudiant();
      $maleetudiant = $this->etudiantModel->genreEtudiant('male');
      $femaleetudiant = $this->etudiantModel->genreEtudiant('female');
      $cless1etudiant = $this->etudiantModel->classEtudiant(1);
      $cless2etudiant = $this->etudiantModel->classEtudiant(2);
      $cless3etudiant = $this->etudiantModel->classEtudiant(3);
      $rowprofesseurs = $this->professeurModel->nombreProfesseur();
      $maleprofesseur = $this->professeurModel->genreProfesseur('male');
      $femaleprofesseur = $this->professeurModel->genreProfesseur('female');
      $rowparents = $this->parentModel->nombreParent();

        $data = [
            'rowetudiants' => $rowetudiants,
            'maleetudiant' => $maleetudiant,
            'femaleetudiant' => $femaleetudiant,
            'cless1etudiant' => $cless1etudiant,
            'cless2etudiant' => $cless2etudiant,
            'cless3etudiant' => $cless3etudiant,
            'rowadministrateurs' => $rowadministrateurs,
            'rowprofesseurs' => $rowprofesseurs,
            'maleprofesseur' => $maleprofesseur,
            'femaleprofesseur' => $femaleprofesseur,
            'rowparents' => $rowparents
        ];

        if(isset($_SESSION['email'])){
          $this->view('dashboards/index', $data);
        }else{
            redirect('users/index');
        }        
    }
  }