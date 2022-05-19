<!---------------------- sidebar ---------------------->
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <!-- Logo -->
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="<?php echo URLROOT ;?>/index">
        <img src="<?php echo URLROOT; ?>/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Gestion d'école</span>
      </a>
    </div>
    
    <hr class="horizontal dark mt-0">

    <div class="collapse navbar-collapse w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['REQUEST_URI'] == '/gestion-d-cole/index') echo'active'; ?>" href="<?php echo URLROOT ;?>/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
            <ul class="navbar-nav collapse" id="collapseExample" style="width: 80%; margin-left: 10%;">
              <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/gestion-d-cole/Professeurs') echo'active'; ?>" href="<?php echo URLROOT ;?>/Professeurs">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-secondary text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Professeurs</span>
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/gestion-d-cole/etudiants') echo'active'; ?>" href="<?php echo URLROOT ;?>/etudiants">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-secondary text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Etudiants</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/gestion-d-cole/parents') echo'active'; ?>" href="<?php echo URLROOT ;?>/parents">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-secondary text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Parents</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/gestion-d-cole/administrateurs') echo'active'; ?>" href="<?php echo URLROOT ;?>/administrateurs">
                  <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="ni ni-calendar-grid-58 text-secondary text-sm opacity-10"></i>
                  </div>
                  <span class="nav-link-text ms-1">Administrateurs</span>
                </a>
              </li>
            </ul>
        </li>

        <hr class="horizontal dark mt-5">

        <li class="nav-item">
          <a class="nav-link <?php if($_SERVER['REQUEST_URI']=='/gestion-d-cole/profiles') echo'active'; ?>" href="<?php echo URLROOT ;?>/profiles">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="sign-in.php">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="bi bi-box-arrow-left text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    
  </aside>