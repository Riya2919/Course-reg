<?php
  require_once 'db.php';

  function register_user(){
    global $con;
    if(isset($_POST['button_reg']) || $_SERVER['REQUEST_METHOD'] == 'POST')
    {
      echo "Working";
    }
  }
 ?>
