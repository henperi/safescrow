<?php
  $from_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."";
  
  if (isset($_POST['submitLoginForm'])) {
    $Login = new UserSessionsController;
    $Login->submitLoginForm($from_url);
  }

  if (isset($_POST['submitRegistrationForm'])) {
    $Register = new UserRegistrationController;

    $Register->submitRegistrationForm($from_url);
  }

?>
