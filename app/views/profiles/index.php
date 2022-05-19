<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Assidbar -->
  <?php require APPROOT . '/views/inc/sidebar.php'; ?>
  
  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>
    
    <div class="container-fluid py-4">
      <div class="row">
        <!-- Profile -->
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="<?php echo URLROOT; ?>/img/bg-profile.jpg" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="<?php echo URLROOT; ?>/img/team-2.jpg" class="rounded-circle img-fluid border border-2 border-white">
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
  
  <?php require APPROOT . '/views/inc/footer.php'; ?>