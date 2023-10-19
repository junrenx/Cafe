

<?php  
// Display Cafe Owner navbar
if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "CO") { ?>
  <div class="navbar">
    <a href=".php">Owner</a>
  </div>
  <br>
<?php } ?>

<?php 
// Display Cafe Manager navbar
if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "CM") { ?>
  <div class="navbar">
    <a href=".php">Cafe Manager</a>
  </div>
  <br>
<?php } ?>

<?php 
// Display Cafe Staff navbar
if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "CS") { ?>
  <div class="navbar">
    <a href=".php">STAFF</a>
  </div>
  <br>
<?php } ?>

<?php 
// Display System Admin navbar
if (isset($_SESSION['user']) && isset($_SESSION['uid']) && $_SESSION['type'] == "SA") { ?>
  <div class="navbar">
  <a href="signup.php">Create Cafe User Account</a>
</div>
  <br>
<?php } ?>