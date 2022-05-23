
<?php require APPROOT . '/views/inc/header.php'; ?>
<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  
  <!-- Assidbar -->
  <?php require APPROOT . '/views/inc/sidebar.php'; ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->

    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="container-fluid py-4">
      <!-- table professeurs -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h1 class="text-uppercase text-sm">professeurs</h1>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add</button>
              <?php require APPROOT . '/views/inc_models/crdprofesseur.php'; ?>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0" style="min-height: 150px; max-height: 480px; overflow-x: hidden;">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="col-3 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usermane</th>
                      <th class="col-1 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Genre</th>
                      <th class="col-1 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Class</th>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Matière</th>
                      <th class="col-3 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="col-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['Professeurs'] as $Professeur) : ?>
                      <tr class="item_professeur">
                        <td class="col-3 d-none id"><?php echo  $Professeur->id ;?></td>
                        <td class="col-3 username"><?php echo  $Professeur->nom_complet ;?></td>
                        <td class="col-1 genre"><?php echo  $Professeur->genre ;?></td>
                        <td class="col-1 class"><?php echo  $Professeur->class ;?></td>
                        <td class="col-2 matiere"><?php echo  $Professeur->matiere ;?></td>
                        <td class="col-3 phone"><?php echo  $Professeur->phone ;?></td>
                        <td class="col-2 nav-item dropdown">
                          <i class="bi bi-three-dots-vertical" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                          <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width:40px;">
                            <li><a class="dropdown-item edite_professeur" data-bs-toggle="modal" data-bs-target="#editModal">Edite</a></li>
                            <li><a class="dropdown-item" href="<?php echo URLROOT ;?>/Professeurs/delete?professeur=<?php echo  $Professeur->id ;?>">Delete</a></li>
                          </ul>
                        </td>
                      </tr>
                    <?php endforeach ;?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php require APPROOT . '/views/inc/footer.php'; ?>
  <script src="<?php echo URLROOT ;?>/js/update_professeur.js"></script>
