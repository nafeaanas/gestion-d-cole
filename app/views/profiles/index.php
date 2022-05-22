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
        <div class="col-md-4 mb-5">
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
                <h5><?php echo $_SESSION['name']." ".$_SESSION['prenom'] ?></h5>
                <h6 class="mt-4"><?php echo $_SESSION['role'] ?></h6>
              </div>
            </div>
          </div>
        </div>

        <!-- Edite profile -->
        <div class="col-md-8">
          <div class="card">
            <p class="card-header pb-0">Edit Profile</p>
            <div class="card-body">
              <form method="POST" action="<?php echo URLROOT ;?>/users/edite" data-parsley-validate>
                <div class="d-flex justify-content-between align-items-center">
                  <p class="text-uppercase text-sm">User Information</p>
                  <button type="submit" class="btn btn-primary">Sauvegarder</button>
                </div>
                <p class="text-danger text-center"><?php if(isset($data['error'])){ echo $data['error'] ;} ?> </p>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Prénom</label>
                      <input class="form-control" name="prenom" type="text" value="<?php echo $_SESSION['prenom'] ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Nom</label>
                      <input class="form-control" name="name" type="text" value="<?php echo $_SESSION['name'] ?>" required>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Email address</label>
                      <input class="form-control" name="email" type="email" value="<?php echo $_SESSION['email'] ?>" required data-parsley-type="email">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="example-text-input" class="form-control-label">Rôle</label required>
                      <select class="form-select" name="role">
                        <option value="formateur" <?php if($_SESSION['role']=='formateur') echo 'selected'; ?>>Formateur</option>
                        <option value="administrateur" <?php if($_SESSION['role']=='administrateur') echo 'selected'; ?>>Administrateur</option>
                        <option value="autre" <?php if($_SESSION['role']=='autre') echo 'selected'; ?>>Autre...</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group col-md-6 mx-auto text-center mt-4">
                    <label for="example-text-input" class="form-control-label">Password</label>
                    <input class="form-control" name="password" type="password" required>
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

  <style>
    .parsley-errors-list{
        color: red;
        list-style: none;
    }
  </style>