<?php

class Login extends Dbhandler
{
  protected function getUser($uid, $pwd) 
  {
    // Prepare statement to select data from database
    $stm = $this->connect()->prepare('SELECT users_pwd FROM users WHERE users_uid = ? OR users_email = ?;');

    // Validation
    if (!$stm->execute(array($uid, $uid)))
    {
      $stm = null;
      header("location: ../index.php?error=stmfailed");
      exit();
    }

    //If no result found from querying database
    if ($stm->rowCount() == 0) 
    {
      $stm = null;
      header("location: ../index.php?error=usernotfound");
      exit();
    }

    $hashedPwd = $stm->fetchAll(PDO::FETCH_ASSOC);
    $checkPwd = password_verify($pwd, $hashedPwd[0]['users_pwd']);

    // If no matching password,
    if ($checkPwd == FALSE)
    {
      $stm = null;
      header("location: ../index.php?error=wrongpassword");
      exit();
    }
    // If matched password,
    else if ($checkPwd == TRUE)
    {
     
      $stm = $this->connect()->prepare('SELECT * FROM users WHERE users_uid = ? OR users_email = ? OR users_pwd = ?;');
      
      // Validations for statement 
      if (!$stm->execute(array($uid, $uid, $pwd)))
      {
        $stm = null;
        header("location: ../index.php?error=stmfailed");
        exit();
      }

     
      if ($stm->rowCount() == 0)
      {
        $stm = null;
        header("location: ../index.php?error=usernotfound");
        exit();
      }

      // Proceed to login user after passed validations
      $user = $stm->fetchAll(PDO::FETCH_ASSOC);
      session_start();
      $_SESSION["user"] = $user[0]["users_fname"];  
      $_SESSION["type"] = $user[0]["users_type"];   
      $_SESSION["uid"] = $user[0]["users_uid"];     

      $stm = null;
    }

    $stm = null;
  }
}