<?php require APPROOT . '/views/inc_home/header.php'; ?>

<body class="">
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
              <div class="card card-plain">
                <div class="card-header text-start">
                  <h4 class="font-weight-bolder">Sign In</h4>
                  <p class="mb-0">Enter your email and password to sign in</p>
                  <span class="text-danger"><?php if(isset($data['error'])){ echo $data['error'] ;} ?> </span>
                </div>
                <div class="card-body">
                  <form method="POST" action="<?php echo URLROOT ;?>/users/login" data-parsley-validate>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control form-control-lg" placeholder="Email" required data-parsley-type="email">
                    </div>
                    <div class="mb-3">
                      <input type="password" name="password" class="form-control form-control-lg" placeholder="Password" required data-parsley-minlength="3">
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" name="remembere" type="checkbox" id="rememberme">
                      <label class="form-check-label" for="rememberme">Remember me</label>
                    </div>
                    <div class="text-center">
                      <input type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0" value="Login">
                    </div>
                  </form>                  
                </div>
              </div>
            </div>
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center overflow-hidden" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/argon-dashboard-pro/assets/img/signin-ill.jpg'); background-size: cover;">
                <span class="mask bg-gradient-primary opacity-6"></span>
                <h4 class="mt-5 text-white font-weight-bolder position-relative">"Attention is the new currency"</h4>
                <p class="text-white position-relative">The more effortless the writing looks, the more effort the writer actually put into the process.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php require APPROOT . '/views/inc_home/footer.php'; ?>

  <style>
    .parsley-errors-list{
        color: red;
        list-style: none;
    }
  </style>