<!---------------------- navbar ---------------------->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
    <div class="container-fluid py-1 px-3">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">
                <?php if(basename($_SERVER['REQUEST_URI'])=='index.php') echo'Dashboard'; elseif(basename($_SERVER['REQUEST_URI'])=='profile.php') echo'Profile'; else echo 'Table'; ?>
            </li>
        </ol>
        <h6 class="font-weight-bolder text-white mb-0"><?php if(basename($_SERVER['REQUEST_URI'])=='index.php') echo'Dashboard'; elseif(basename($_SERVER['REQUEST_URI'])=='profile.php') echo'Profile'; elseif(basename($_SERVER['REQUEST_URI'])=='professeurs.php') echo'Professeurs'; elseif(basename($_SERVER['REQUEST_URI'])=='parents.php') echo'Parents'; elseif(basename($_SERVER['REQUEST_URI'])=='etudiants.php') echo'Etudiants'; elseif(basename($_SERVER['REQUEST_URI'])=='administrateurs.php') echo'Administrateurs'; ?></h6>
    </nav>
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <ul class="navbar-nav justify-content-end">
        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-white" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
                <i class="sidenav-toggler-line bg-white"></i>
            </div>
            </a>
        </li>
        </ul>
        <!-- Searsh -->
        <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group">
            <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
            <input type="text" class="form-control" placeholder="Type here...">
        </div>
        </div>

    </div>
    </div>
</nav>