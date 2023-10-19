<?php
  if(isset($_POST["submit"]))
  {
    // Retrieve form data
    $uid = $_POST["uid"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $type = $_POST["type"];

    // Instantiate SignupController class
    include "../classes/dbhandler.class.php";
    include "../classes/signup.class.php";
    include "../classes/signup-controller.class.php";
    $signup = new SignupController($uid, $fname, $lname, $phone, $email, $pwd, $type);

    // Run error handlers
    $signup->signupUser();

    // Return to signup.php page
    header("location: ../signup.php?error=none");
  }