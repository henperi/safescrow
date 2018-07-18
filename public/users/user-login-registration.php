<?php
  include '../../includes/Models/db/db_connection.inc.php';
  include '../../includes/Models/User.model.php';
  include '../../includes/Controllers/UsersController/UserSessionsController.php';
  include '../../includes/Controllers/UsersController/UserRegistrationController.php';
  include './user-actions/form-actions.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="theme-color" content="#333">
        <base href="/safe-c/public/" target="">
        <title>Safescrow Nigeria</title>
        <meta name="description" content="Material Style Theme">
        <link rel="shortcut icon" href="assets/img/favicon.png?v=3">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="assets/css/preload.min.css">
        <link rel="stylesheet" href="assets/css/plugins.min.css">
        <link rel="stylesheet" href="assets/css/style.light-blue-500.min.css">
        <link rel="stylesheet" href="assets/css/width-boxed.min.css" id="ms-boxed" disabled="">
        <!--[if lt IE 9]>
            <script src="assets/js/html5shiv.min.js"></script>
            <script src="assets/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="ms-preload" class="ms-preload">
            <div id="status">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div>
    
        <div class="bg-full-page ms-hero-bg-dark ms-hero-img-airplane back-fixed">
            <div class="mw-500 absolute-center">
                <div class="card color-dark shadow-6dp animated fadeIn animation-delay-7">
                    <div class="ms-hero-bg-primary ms-hero-img-mountain">
                        <h2 class="text-center no-m pt-4 pb-4 color-white index-1">Users Area</h2>
                    </div>
                    <ul class="nav nav-tabs nav-tabs-full nav-tabs-3 nav-tabs-transparent indicator-primary" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a href="#ms-login-tab" aria-controls="ms-login-tab" role="tab" data-toggle="tab" class="nav-link withoutripple active">
                                <i class="zmdi zmdi-account"></i> Login
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#ms-register-tab" aria-controls="ms-register-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                                <i class="zmdi zmdi-account-add"></i> Register
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a href="#ms-recovery-tab" aria-controls="ms-recovery-tab" role="tab" data-toggle="tab" class="nav-link withoutripple">
                                <i class="zmdi zmdi-key"></i> Recovery
                            </a>
                        </li>
                    </ul>
                    <div class="card-body">
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade active show" id="ms-login-tab">
                                <form action="" method="POST">
                                    <fieldset>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-account"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-user">Email</label>
                                                <input name="email" type="text" id="ms-form-user" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <i class="zmdi zmdi-lock"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-pass">Password</label>
                                                <input name="password" type="password" id="ms-form-pass" class="form-control">
                                            </div>
                                        </div>
                                        <div class="row mt-2">
                                            <div class="col-5">
                                                <div class="form-group mt-1">
                                                    <div class="checkbox">
                                                        <label>
                                                        <input type="checkbox"> Remember </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <button name="submitLoginForm" class="btn btn-raised btn-primary pull-right">Login</button>
                                            </div>
                                        </div>
                                    </fieldset>
                                </form>
                                <div class="text-center">
                                    <h3>Login with</h3>
                                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-facebook">
                                        <i class="zmdi zmdi-facebook"></i> Facebook
                                    </a>
                                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-twitter">
                                        <i class="zmdi zmdi-twitter"></i> Twitter
                                    </a>
                                    <a href="javascript:void(0)" class="wave-effect-light btn btn-raised btn-google">
                                        <i class="zmdi zmdi-google"></i> Google
                                    </a>
                                </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="ms-register-tab">
                                <form action="" method="POST">
                                    <fieldset>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <i class="zmdi zmdi-account"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-user-r">Username</label>
                                                <input name="username" type="text" id="ms-form-user-r" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <i class="zmdi zmdi-email"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-email-r">Email</label>
                                                <input name="email" type="email" id="ms-form-email-r" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <i class="zmdi zmdi-lock"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-pass-r">Password</label>
                                                <input name="password" type="password" id="ms-form-pass-r" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                <i class="zmdi zmdi-lock"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-pass-retype">Re-type Password</label>
                                                <input name="password_confirmation" type="password" id="ms-form-pass-retype" class="form-control">
                                            </div>
                                        </div>
                                        <button type="submit" name="submitRegistrationForm" class="btn btn-raised btn-block btn-primary">Register Now</button>
                                    </fieldset>
                                </form>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="ms-recovery-tab">
                                <form action="users/recover" method="POST">
                                    <fieldset>
                                        <div class="form-group label-floating">
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                    <i class="zmdi zmdi-email"></i>
                                                </span>
                                                <label class="control-label" for="ms-form-email-recovery">Email</label>
                                                <input type="email" id="ms-form-email-recovery" class="form-control">
                                            </div>
                                        </div>
                                        <button class="btn btn-raised btn-block btn-primary">Send Password</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center animated fadeInUp animation-delay-7">
                    <a href="index.html" class="btn btn-white">
                        <i class="zmdi zmdi-home"></i> Go Home
                    </a>
                </div>
            </div>
        </div>

    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/configurator.min.js"></script>
    <script src="assets/js/index.js"></script>
  </body>
</html>
