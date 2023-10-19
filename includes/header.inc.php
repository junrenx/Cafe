<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>307</title>
  <style>
    .wrapper {
      border: 1px solid black;
      padding: 20px;
      text-align: center; /* Center-align the content within the wrapper */
    }

    .wrapper li {
      display: inline;
      border: 1px solid black;
      padding: 10px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <nav>
      <?php
        // Display Cafe Staff Home page
        if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "CS") 
        {
        ?>
          <ul>
            <li><?php echo "Welcome, " . ucfirst(strtolower($_SESSION['user'])); ?></li>
            <li><a href="cafestaff.php">Home</a></li>
            <li><a href="includes/logout.inc.php">Log out</a></li>
          </ul>
        <?php
        }// Display Cafe Manager Home page
        else if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "CM") 
        {
        ?>
          <ul>
            <li><?php echo "Welcome, " . ucfirst(strtolower($_SESSION['user'])); ?></li>
            <li><a href="cafemanager.php">Home</a></li>
            <li><a href="includes/logout.inc.php">Log out</a></li>
          </ul>
        <?php
        }// Display Cafe Owner Home page
        else if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "CO") 
        {
        ?>
          <ul>
            <li><?php echo "Welcome, " . ucfirst(strtolower($_SESSION['user'])); ?></li>
            <li><a href="cafeowner.php">Home</a></li>
            <li><a href="includes/logout.inc.php">Log out</a></li>
          </ul>
        <?php
        }
        // Display System Admin Home page
        else if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "SA") 
        {
        ?>
          <ul>
            <li><?php echo "Welcome, " . ucfirst(strtolower($_SESSION['user'])); ?></li>
            <li><a href="systemadmin.php">Home</a></li>
            <li><a href="includes/logout.inc.php">Log out</a></li>
          </ul>
        <?php
        }
      ?>
      
    </nav>
