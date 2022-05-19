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
            <div class="card-header d-flex justify-content-between align-items-center">
              <h1 class="text-uppercase text-sm">administrateurs</h1>
              <button type="button" class="btn btn-primary">Add</button>
            </div>
            <div class="card-body px-3 pt-0 pb-2">
              <div class="table-responsive p-0 overflow-hidden">
                <table class="table align-items-center justify-content-center mb-0 text-center">
                  <thead>
                    <tr>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nom</th>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Prénom</th>
                      <th class="col-2 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Rôle</th>
                      <th class="col-4 text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Adress Email</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data['administrateurs'] as $Admin) : ?>
                      <tr>
                        <td class="col-2"><?php echo  $Admin->nom ;?></td>
                        <td class="col-2"><?php echo  $Admin->prenom ;?></td>
                        <td class="col-2"><?php echo  $Admin->role ;?></td>
                        <td class="col-4"><?php echo  $Admin->email ;?></td>
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