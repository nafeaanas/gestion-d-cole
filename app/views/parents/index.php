<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="g-sidenav-show bg-gray-100 overflow-hidden">
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
          <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
              <h1 class="text-uppercase text-sm">étudiants</h1>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add</button>
              <?php require APPROOT . '/views/inc_models/crdparent.php'; ?>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0" style="min-height: 150px; max-height: 480px; overflow-x: hidden;">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usermane</th>
                      <th class="col-1 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Genre</th>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Job</th>
                      <th class="col-3 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adresse</th>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                      <th class="col-2"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['Parents'] as $parent) : ?>
                        <tr class="item_parent">
                          <td class="col-2 d-none id"><?php echo  $parent->id ;?></td>
                          <td class="col-2 username"><?php echo  $parent->nom_complet ;?></td>
                          <td class="col-1 genre"><?php echo  $parent->genre ;?></td>
                          <td class="col-2 job"><?php echo  $parent->job ;?></td>
                          <td class="col-3 adresse"><?php echo  $parent->adresse ;?></td>
                          <td class="col-2 phone"><?php echo  $parent->phone ;?></td>
                          <td class="col-2 nav-item dropdown">
                            <i class="bi bi-three-dots-vertical" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown" style="min-width:40px;">
                              <li><a class="dropdown-item edite_parent" data-bs-toggle="modal" data-bs-target="#editModal">Edite</a></li>
                              <li><a class="dropdown-item" href="<?php echo URLROOT ;?>/Parents/delete?parent=<?php echo  $parent->id ;?>">Delete</a></li>
                            </ul>
                          </td>
                        </tr>
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
  <script src="<?php echo URLROOT ;?>/js/crd_parent.js"></script>