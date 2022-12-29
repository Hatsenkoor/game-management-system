<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Register</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/plugins/bootstrap/dist/css/bootstrap.min.css')?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/plugins/nprogress/nprogress.css')?>" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url('assets/plugins/animate.css/animate.css')?>" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/css/custom.css')?>" rel="stylesheet">
    <link rel="icon" type="image/x-icon" size="16*16" href="<?php echo base_url('favicon.ico')?>">
  </head>

  <body class="login">
    <div>
      <div class="login_wrapper">
        <div class="animate form registration_form">
          <section class="login_content">
            <form action="<?php echo base_url('register')?>" method="post">
              <?= csrf_field() ?>
              <h1>Create Account</h1>
              <?php 
                $errors = session()->getFlashdata('errors');
                if($errors !== NULL) {
                foreach($errors as $error) {
              ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo $error; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
              <?php }} ?>              
              <?php if (session()->getFlashdata('error') !== NULL) : ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?php echo session()->getFlashdata('error'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
              <?php endif; ?>              
              <div>
                <input type="text" class="form-control" placeholder="Username" required name="username"/>
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required name="email"/>
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required name="password"/>
              </div>
              <div>
                <button class="form-control btn btn-primary me-md-2" href="javascript:;"><i class="fa fa-sign-in"></i> Register</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="<?php echo base_url('signin')?>" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1>RAMMSAU ALLY</h1>
                  <p>©2022 All Rights Reserved</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/plugins/jquery.min.js')?>"></script>
    <script src="<?php echo base_url('assets/plugins/bootstrap/dist/js/bootstrap.min.js')?>"></script>
  </body>
</html>
