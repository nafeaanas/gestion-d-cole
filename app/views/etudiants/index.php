<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Assidbar -->
  <?php require APPROOT . '/views/inc/sidebar.php'; ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="container-fluid py-4">
      <!-- tale étudiants -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center pb-0">
              <h3 class="text-uppercase text-sm">étudiants</h3>
              <button type="button" class="btn btn-primary">Add</button>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0 overflow-hidden">
                <table class="table align-items-center justify-content-center mb-0">
                  <thead>
                    <tr>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Usermane</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Genre</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Class</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Parents</th>
                      <th class="col-3 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Adresse</th>
                      <th class="col-1 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Date de naissance</th>
                      <th class="col-2 text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Email</th>
                      <th class="col-1"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['etudiants'] as $etudiant) : ?>
                        <tr>
                          <td class="col-2"><?php echo  $etudiant->nom_complet ;?></td>
                          <td class="col-1"><?php echo  $etudiant->genre ;?></td>
                          <td class="col-1"><?php echo  $etudiant->class ;?></td>
                          <td class="col-3"><?php echo  $etudiant->parent ;?></td>
                          <td class="col-1"><?php echo  $etudiant->adresse ;?></td>
                          <td class="col-1"><?php echo  $etudiant->date_de_naissance ;?></td>
                          <td class="col-2"><?php echo  $etudiant->email ;?></td>
                          <th class="col-1 nav-item dropdown">
                            <p href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              <i class="bi bi-three-dots-vertical"></i>
                            </p>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Edite</a></li>
                              <li><a class="dropdown-item" href="#">Delete</a></li>
                            </ul>
                          </th>
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