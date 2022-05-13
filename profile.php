<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
  <link href="assets/css/nucleo-icons.css" rel="stylesheet"/>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet"/>
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet"/>
  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.2" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <title>Profile</title>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Assidbar -->
  <?php require_once 'sidebar.php'; ?>
  
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <?php require_once 'navbar.php'; ?>
    
    <div class="container-fluid py-4">
      <div class="row">
        <!-- Profile -->
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="assets/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="assets/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-body pt-0">
              <div class="text-center mt-4">
                <h5>Username<span class="font-weight-light">, Age</span></h5>
                <h6 class="font-weight-300">Country, City</h6>
                <h6 class="mt-4">Rôle</h6>
                <span class="font-weight-light">Address de l'école</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Edite profile -->
        <div class="col-md-8">
          <div class="card">
            <p class="card-header pb-0">Edit Profile</p>
            <div class="card-body">
              <form>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="text-uppercase text-sm">User Information</p>
                  <button type="button" class="btn btn-primary">Sauvegarder</button>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Prénom</label>
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nom</label>
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Email address</label>
                      <input class="form-control" type="email" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Matricule</label>
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Rôle</label>
                      <input class="form-control" type="text" value="">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Date de naissance</label>
                      <input class="form-control" type="date" value="">
                    </div>
                  </div>
                </div>
              </form>
              
              <hr class="horizontal dark my-4">
              <form>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="text-uppercase text-sm">Contact Information</p>
                  <button type="button" class="btn btn-primary">Sauvegarder</button>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Address de l'école</label>
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">City</label>
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="example-text-input" class="form-control-label">Country</label>
                    <input class="form-control" type="text" value="">
                  </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!--   Core JS Files   -->
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="assets/js/plugins/smooth-scrollbar.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/argon-dashboard.min.js?v=2.0.2"></script>
</body>
</html>