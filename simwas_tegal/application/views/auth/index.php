<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/'); ?>css/custom.css" rel="stylesheet">
    <title>Login Form
    </title>
  </head>
  <body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js">
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
    <!------ Include the above in your HEAD tag ---------->
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="user_card">
          <div class="d-flex justify-content-center">
            <div class="brand_logo_container">
              <img src="<?= base_url(); ?>/assets/img/logo.png"" class="brand_logo" alt="Logo">
                                                                                              </div>
                                                                                              </div>
                                                                                              <div class="d-flex justify-content-center form_container">
<?= form_open('', ['class' => 'user']); ?>
<form class="user" method="post" action="
                   <?= base_url() ?>">
              <div class="input-group mb-3">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-user">
                    </i>
                  </span>
                </div>
                <input type="text" name="username" class="form-control form-control-user <?= form_error('username') ? 'is-invalid border-left-danger' : 'border-left-primary' ?>" value="<?= set_value('username') ?>" placeholder="Username">
                <div class="invalid-feedback">
                  <?= form_error('username', '<p class="text-danger pl-3">', '</p>') ?>
                </div>
              </div>
              <div class="input-group mb-2">
                <div class="input-group-append">
                  <span class="input-group-text">
                    <i class="fas fa-key">
                    </i>
                  </span>
                </div>
                <input type="password" name="pass" class="form-control form-control-user <?= form_error('pass') ? 'is-invalid border-left-danger' : 'border-left-primary' ?>" placeholder="Password">
                <div class="invalid-feedback">
                  <?= form_error('pass', '<p class="text-danger pl-3">', '</p>') ?>
                </div>
              </div>
              <button type="submit" class="btn btn-danger btn-user btn-block">
                Login
              </button>
              <?= form_close(); ?>
              </form>
          </div>
          <div class="mt-4">
            <div class="d-flex justify-content-center links" style="color: white">
              Inspektorat Kota Tegal
            </div>
          </div>
        </div>
      </div>
    </div>
    <style type="text/css">
      /* Coded with love by Mutiullah Samim */
      body,
      html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #5db7d9 !important;
      }
      .user_card {
        height: 500px;
        width: 350px;
        margin-top: auto;
        margin-bottom: auto;
        background: #d68f5c;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 5px;
      }
      .brand_logo_container {
        position: absolute;
        height: 70px;
        width: 170px;
        top: 50px;
        
        padding: 10px;
        text-align: center;
      }
      .brand_logo {
        height: 150px;
        width: 150px;
        
        
      }
      .form_container {
        margin-top: 200px;
      }
      .login_btn {
        width: 100%;
        background: #c0392b !important;
        color: white !important;
      }
      .login_btn:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .login_container {
        padding: 0 2rem;
      }
      .input-group-text {
        background: #c0392b !important;
        color: white !important;
        border: 0 !important;
        border-radius: 0.25rem 0 0 0.25rem !important;
      }
      .input_user,
      .input_pass:focus {
        box-shadow: none !important;
        outline: 0px !important;
      }
      .custom-checkbox .custom-control-input:checked~.custom-control-label::before {
        background-color: #c0392b !important;
      }
    </style>
  </body>
</html>
