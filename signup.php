<!DOCTYPE html>
<html lang="en">
<?php include "includes/header.inc.php"; ?>
<body>
  <div class="container">
    <h1>Sign up</h1>
    <form action="includes/signup.inc.php" method="post">
      <div class="form-group">
        <label for="uid">Username</label>
        <input type="text" id="uid" name="uid" placeholder="Enter a username" required>
      </div>

      <div class="form-group">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="fname" placeholder="Enter your first name" required>
      </div>

      <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lname" placeholder="Enter your last name" required>
      </div>

      <div class="form-group">
        <label for="phone">Phone Number</label>
        <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
      </div>

      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
      </div>

      <div class="form-group">
        <label for="pwd">Password</label>
        <input type="password" id="pwd" name="pwd" placeholder="Enter a password" required>
      </div>

      <div class="form-group">
        <label>Account Type</label>
        <div class="radio-group">
          <label for="cafestaff">
            <input type="radio" id="cafestaff" name="type" value="CS" checked>
            Cafe Staff
          </label>
          <label for="cafemanager">
            <input type="radio" id="cafemanager" name="type" value="CM" >
            Cafe Manager
          </label>
          <label for="cafeowner">
            <input type="radio" id="cafeowner" name="type" value="CO" >
            Cafe Owner
          </label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" name="submit">Signup</button>
      </div>
    </form>

    <footer>
      <?php
        if (isset($_GET['error'])) {
          if ($_GET['error'] == 'emptyinput') {
            echo "<p>Invalid signup, please try again</p>";
          }
          if ($_GET['error'] == 'invalidemail') {
            echo "<p>Invalid signup, please enter a valid email address</p>";
          }
          if ($_GET['error'] == 'useroremailtaken') {
            echo "<p>Invalid signup, username or email has been taken</p>";
          }
          if ($_GET['error'] == 'none') {
            echo "<p>You have signed up successfully!</p>";
          }
        }
      ?>
    </footer>
  </div>
</body>
</html>
