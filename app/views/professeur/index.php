
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
            <div class="card-header pb-0">
              <h6>professeurs</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Usermane</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Genre</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Class</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Matière</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Phone</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($data['Professeurs'] as $Professeur) : ?>
                      <tr>
                        <td><?php echo  $Professeur->nom_complet ;?></td>
                        <td><?php echo  $Professeur->genre ;?></td>
                        <td><?php echo  $Professeur->class ;?></td>
                        <td><?php echo  $Professeur->matiere ;?></td>
                        <td><?php echo  $Professeur->phone ;?></td>
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
