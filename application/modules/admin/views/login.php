<!DOCTYPE html>
<html lang="en">

<head>
    <title><?php echo $title; ?></title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/vendors/css/forms/icheck/custom.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/components.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/core/colors/palette-gradient.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/app-assets/css/pages/login-register.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>admin_assets/assets/css/style.css">
</head>

<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><section class="row flexbox-container">
  <div class="col-12 d-flex align-items-center justify-content-center">
    <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
      <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
        <div class="card-header border-0">
          <div class="card-title text-center">

		  <!-- logo image -->
            <img src="<?php echo base_url(); ?>admin_assets/app-assets/images/logo/logo-dark.png" alt="branding logo">
          </div>
          <!-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6> -->
        </div>
        <!-- <div class="card-content">
          <div class="text-center">
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span
                class="la la-facebook"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span
                class="la la-twitter"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span
                class="la la-linkedin font-medium-4"></span></a>
            <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span
                class="la la-github font-medium-4"></span></a>
          </div> -->
          <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>OR Using Account
              Details</span></p> -->
          <div class="card-body">
            <form class="form-horizontal" action="" method="POST" novalidate>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="text" class="form-control" id="admin_email" name="admin_email" placeholder="Admin Email Id" required>
                <div class="form-control-position">
                  <i class="la la-user"></i>
                </div>
              </fieldset>
              <fieldset class="form-group position-relative has-icon-left">
                <input type="password" class="form-control" id="admin_pass" name="admin_pass" placeholder="Enter Password" required>
                <div class="form-control-position">
                  <i class="la la-key"></i>
                </div>
              </fieldset>
              <div class="form-group row">
                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                  <fieldset>
                    <input type="checkbox" id="remember-me" class="chk-remember">
                    <label for="remember-me"> Remember Me</label>
                  </fieldset>
                </div>
                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html"
                    class="card-link">Forgot Password?</a></div>
              </div>
              <button type="submit" class="btn btn-outline-info btn-block" name="admin_login" id="admin_login"><i class="ft-unlock"></i> Login</button>
            </form>
          </div>
          <!-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to Modern
              ?</span></p>
          <div class="card-body">
            <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="la la-user"></i>
              Register</a>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>

        </div>
      </div>
    </div>
	<!-- BEGIN: Vendor JS-->
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/js/core/app.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- <script src="<?php echo base_url(); ?>admin_assets/app-assets/js/scripts/forms/form-login-register.min.js"></script> -->
    <!-- END: Page JS-->
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/js/popper.min.js"></script>
    <script src="<?php echo base_url(); ?>admin_assets/app-assets/vendors/bootstrap.min.js"></script>

    <!-- Application main common jquery file -->
    <!-- <script src="<?php echo base_url(); ?>admin_assets/app-assets/js/main.js"></script> -->
     <!--Toster plugins -->
     <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">  
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!--Toster end plugins -->

    <!--Start toster validation -->
    <?php if($this->session->flashdata('success')) {  ?>
    <script type="text/javascript">
    toastr.success("<?php echo $this->session->flashdata('success'); ?>", "", {
    "closeButton": "true",
    "progressBar": "true",
    "timeOut": "5000",
    "extendedTimeOut": "2000"   
    });
    </script> 
    <?php  } elseif($this->session->flashdata('error')){ ?>
    <script type="text/javascript">
    toastr.error("<?php echo $this->session->flashdata('error'); ?>", "", {
    "closeButton": "true",
    "progressBar": "true"
    });
    </script> 
    <?php } ?>

    <?php 
    $err = validation_errors();
    $err_msg   = str_replace(array("\r","\n"), '\n', $err);
    if(isset($err_msg) &&  $err_msg != ""){?>
    <script type="text/javascript">
    toastr.error("<?php echo $err_msg; ?>", "", {
    "closeButton": "true",
    "progressBar": "true"
    });
    </script> 
    <?php  } ?>   
    <!--End toster validation -->
</body>

</html>
