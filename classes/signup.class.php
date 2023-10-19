<?php

class Signup extends DbHandler
{
  protected function setUser($uid, $fname, $lname, $phone, $email, $pwd, $type) 
  {
    // Prepare query
    $stm = $this->connect()->prepare('INSERT INTO users (users_uid, users_fname, users_lname, users_phone, users_email, users_pwd, users_type) VALUES (?, ?, ?, ?, ?, ?, ?);');

    // Store user's password as hash (for security purposes)
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    // Execute query, Redirect user if failed to execute
    if (!$stm->execute(array($uid, $fname, $lname, $phone, $email, $hashedPwd, $type))) 
    {
      $stm = null;
      header("location: ../signup.php?error=stmfailed");
      exit();
    }

    $stm = null;
  }

  // Function to check if userid or email already exist in users db table
  protected function checkUserExist($uid, $email)
  {
    // Prepare query
    $stm = $this->connect()->prepare('SELECT users_uid FROM users WHERE users_uid = ? OR users_email = ?;');

    // Execute query, Redirect user if failed to execute
    if (!$stm->execute(array($uid, $email)))
    {
      $stm = null;
      header("location: ../signup.php?error=stmfailed");
      exit();
    }

    // Check if any results from the query that was executed
    $haveResults;
    // If there are results
    if ($stm-> rowCount() > 0)
    {
      $haveResults = TRUE;
    }
    else 
    {
      $haveResults = FALSE;
    }
    return $haveResults;
  }

}