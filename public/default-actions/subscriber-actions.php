<?php
  $from_url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."";
  
  if (isset($_POST['submitSubscribersForm'])) {
    $Subscribe = new SubscribersController;
    $Subscribe->submitSubscribersForm($from_url);
  }

?>
