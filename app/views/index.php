<?php require APPROOT . '/views/inc/header.php'; ?>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <!-- Assidbar -->
  <?php require APPROOT . '/views/inc/sidebar.php'; ?>

  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <?php require APPROOT . '/views/inc/navbar.php'; ?>

    <!-- Statistiques -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">nombre des <br> administrateurs</p>
                    <h5 class="font-weight-bolder">0</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="bi bi-person text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">nombre des <br> étudiant</p>
                    <h5 class="font-weight-bolder">0</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="bi bi-person text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">nombre des <br> professeurs</p>
                    <h5 class="font-weight-bolder">0</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
          <div class="card">
            <div class="card-body p-3">
              <div class="row">
                <div class="col-8">
                  <div class="numbers">
                    <p class="text-sm mb-0 text-uppercase font-weight-bold">nombre des <br> parents</p>
                    <h5 class="font-weight-bolder">0</h5>
                  </div>
                </div>
                <div class="col-4 text-end">
                  <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
                    <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-5 mb-5">
          <div class="card">
            <div class="card-header pb-0 p-3">
              <h6 class="mb-0">genre</h6>
            </div>
            <div class="card-body p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="bi bi-gender-male opacity-10" style="color: #1181F0;"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-sm" style="color: #1181F0;">Masculin</h6>
                      <span class="text-xs">0 étudiant, <span class="font-weight-bold">0 professeurs</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                  <div class="d-flex align-items-center">
                    <div class="icon icon-shape icon-sm me-3 bg-gradient-dark shadow text-center">
                      <i class="bi bi-gender-female opacity-10" style="color: #E95098;"></i>
                    </div>
                    <div class="d-flex flex-column">
                      <h6 class="mb-1 text-sm" style="color: #E95098;">Féminin</h6>
                      <span class="text-xs">0 étudiant, <span class="font-weight-bold">0 professeurs</span></span>
                    </div>
                  </div>
                  <div class="d-flex">
                    <button class="btn btn-link btn-icon-only btn-rounded btn-sm text-dark icon-move-right my-auto"><i class="ni ni-bold-right" aria-hidden="true"></i></button>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-lg-7">
          <div class="card pb-3">
            <div class="card-header pb-4 p-3">
              <h6 class="mb-0">classe</h6>
            </div>
            <div class="col-11 mx-auto border-start border-bottom border-3 position-relative gap-3" style="height: 200px;">
              <div class="col-2 position-absolute top-0 end-0">
                <div class="d-flex align-items-center gap-2">
                  <div class="bg-success" style="width: 20px; height: 20px;"></div>
                  <span>Classe 1</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <div class="bg-info" style="width: 20px; height: 20px;"></div>
                  <span>Classe 2</span>
                </div>
                <div class="d-flex align-items-center gap-2">
                  <div class="bg-danger" style="width: 20px; height: 20px;"></div>
                  <span>Classe 3</span>
                </div>
              </div>
              <div class="position-absolute bottom-0 w-100 mx-3 d-flex align-items-end gap-3 text-center text-dark">
                <div class="rounded-top bg-success text-uppercase font-weight-bolder" style="width: 50px; height: 60px;">60</div>
                <div class="rounded-top bg-info text-uppercase font-weight-bolder" style="width: 50px; height: 20px;">20</div>
                <div class="rounded-top bg-danger text-uppercase font-weight-bolder" style="width: 50px; height: 80px;">80</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </main>

  <?php require APPROOT . '/views/inc/footer.php'; ?>