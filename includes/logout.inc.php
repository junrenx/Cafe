<?php
  // Logout user by destroying session
  session_start();
  session_unset();
  session_destroy();

  // Return user back to log in page
  header('Location: ../index.php');
