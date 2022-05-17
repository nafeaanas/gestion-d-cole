<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Assidbar -->
  <?php require APPROOT . '/views/inc/sidebar.php'; ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <div class="container-fluid py-4">
      <!-- table administrateurs -->
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>administrateurs</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prénom</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rôle</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Mot de Passe</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data['Users'] as $User) : ?>
                      <tr>
                        <td><?php echo  $User->nom ;?></td>
                        <td><?php echo  $User->prenom ;?></td>
                        <td><?php echo  $User->role ;?></td>
                        <td><?php echo  $User->email ;?></td>
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

  <!--   Core JS Files   -->
  <?php require APPROOT . '/views/inc/footer.php'; ?>