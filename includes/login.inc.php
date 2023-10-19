<?php
if(isset($_POST["submit"]))
{
  // Retrieve form data
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];

  // Instantiate LoginController class
  include "../classes/dbhandler.class.php";
  include "../classes/login.class.php";
  include "../classes/login-controller.class.php";
  $login = new LoginController($uid, $pwd);

  // Run error handlers
  $login->loginUser();

  // Bring user to home page
  if (isset($_SESSION["type"]))
  {
    $type = $_SESSION["type"];
    switch($type) 
    {
      case "SA": header('Location: ../systemadmin.php'); 
      break;
  
      case "CS": header('Location: ../cafestaff.php'); 
      break;

      case "CM": header('Location: ../cafemanager.php'); 
      break;

      case "CO": header('Location: ../cafeowner.php'); 
      break;
    }
  }
}