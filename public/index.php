<?php
include '../includes/Models/db/db_connection.inc.php';
include '../includes/Models/Subscriber.model.php';
include '../includes/Controllers/SubscribersController/SubscribersController.php';
include './default-actions/subscriber-actions.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="theme-color" content="#333">
    <base href="" target="">
    <title>Safescrow Coming Soon</title>
    <meta name="description" content="Material Style Theme">
    <link rel="shortcut icon" href="assets/img/favicon.png">
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

    <div class="bg-full-page ms-hero-img-coffee ms-hero-bg-primary ms-bg-fixed back-fixed">
      <div class="absolute-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-6">
              <div class="card card-flat bg-transparent">
                <div class="card-body color-white">
                  <header class="text-center mb-2">
                    <span class="ms-logo ms-logo-lg ms-logo-white center-block mb-2 animated zoomInDown animation-delay-5">S</span>
                    <h1 class="no-m ms-site-title color-white center-block ms-site-title-lg mt-2 animated zoomInDown animation-delay-5">Safescrow
                    </h1>
                    <p class="lead lead-xl mt-2 animated fadeInUp animation-delay-7">Safescrow makes social payments for goods and services safe, secure, and effortless by integrating an escrow service to safeguard customers and merchants.</p>
                  </header>
                  <div class="row">

                    <div class="col-sm-6">
                      <div class="text-center card-body animated zoomIn animation-delay-10">
                        <span class="btn-circle btn-circle-raised btn-circle-white btn-circle-xlg color-warning">
                          <i class="zmdi zmdi-lock-outline"></i>
                        </span>
                        <h4 class="color-white">Buyer Protection Service</h4>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="javascript:void(0)" class="btn btn-white color-info btn-raised">
                          <i class="zmdi zmdi-info"></i> Learn More</a>
                      </div>
                    </div>
                    
                    <div class="col-sm-6">
                      <div class="text-center card-body animated zoomIn animation-delay-10">
                        <span class="btn-circle btn-circle-raised btn-circle-white btn-circle-xlg color-warning">
                          <i class="zmdi zmdi-lock-outline"></i>
                        </span>
                        <h4 class="color-white">Seller Protection Service</h4>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="javascript:void(0)" class="btn btn-white color-warning btn-raised">
                          <i class="zmdi zmdi-info"></i> Learn More</a>
                      </div>
                    </div>
                    
                    <div class="col-sm-12">
                      <div class="text-center card-body animated zoomIn animation-delay-10">
                        <span class="btn-circle btn-circle-raised btn-circle-white btn-circle-xlg color-info">
                          <i class="zmdi zmdi-card"></i>
                        </span>
                        <h4 class="color-white">Secure Payment</h4>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <a href="javascript:void(0)" class="btn btn-white color-info btn-raised">
                          <i class="zmdi zmdi-info"></i> More info</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6">
              <div class="card index-1 animated zoomInRight animation-delay-7">
                <div class="card-body-big">
                  <h1 class="color-primary">Coming Soon</h1>
                  <p class="lead">Safescrow is coming soon. Never loose a dime paying for goods and services to online or social sellers ever agian. 
                    We provide you the much needed layer of extra security needed for purchasing products and services online.</p>
                  <div id="ms-countdown"></div>
                  <h2 class="color-primary">Wanna know once it's live?</h2>
                  
                  <form action="" method="POST">
                    <div class="form-group label-floating mt-2 mb-1">
                      <div class="input-group center-block">
                        <label class="control-label" for="ms-subscribe">
                          <i class="zmdi zmdi-email"></i> Email Adress</label>
                          <input type="email" name="email" id="ms-subscribe" class="form-control">
                          <div class="hidden-all" style="display:none">
                            <input type="text" name="fullname" class="form-control">
                            <input type="text" name="phone" class="form-control">
                          </div>
                      </div>
                    </div>
                    <button name="submitSubscribersForm" class="btn btn-raised btn-primary btn-block" type="submit">Subscribe</button>
                  </form>

                  <div class="text-center mt-4">
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-google">
                      <i class="zmdi zmdi-google"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-facebook">
                      <i class="zmdi zmdi-facebook"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-twitter">
                      <i class="zmdi zmdi-twitter"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-instagram">
                      <i class="zmdi zmdi-instagram"></i>
                    </a>
                    <a href="javascript:void(0)" class="btn-circle btn-circle-raised mt-1 mr-1 no-mr-md btn-linkedin">
                      <i class="zmdi zmdi-linkedin"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <p class="lead lead-sm text-center mt-4 color-medium animated fadeInUp animation-delay-16">Safescrow &copy; Copyright 2018</p>
        </div>
      </div>
    </div>
    <script src="assets/js/plugins.min.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/configurator.min.js"></script>
    <script>
      (function(i, s, o, g, r, a, m)
      {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
          (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
          m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
      })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
      ga('create', 'UA-90917746-2', 'auto');
      ga('send', 'pageview');
    </script>
    <script src="assets/js/coming.js"></script>
  </body>
</html>