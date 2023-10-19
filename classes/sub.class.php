<?php

class Sub extends Dbhandler 
{
  protected function setSub($subid, $subno, $subnamechar, $substatus)
  {
    // Prepare statement to insert data into database
    $stm = $this->connect()->prepare('INSERT INTO subject (sub_subid, sub_subno, sub_subnamechar, sub_substatus) VALUES (?, ?, ?, ?, ?);');

  
  
  // Return error if prepared statement failed to execute
    if (!$stm->execute(array($subid, $subno, $subnamechar, $substatus,))) 
    {
      $stm = null;
      header("location: ../addsub.php?error=stmfailed");
      exit();
    }

    $stm = null;
  }
  
  protected function checkSubExist($subid, $subno)
  {
    // Prepare statement 
    $stm = $this->connect()->prepare('SELECT * FROM subject WHERE sub_id = ? AND sub_no = ?;');

    // Check if prepared statement able to execute, if not then return error
    if (!$stm->execute(array($subid, $subno)))
    {
      $stm = null;
      // Send the user back to sign up page
      header("location: ../addsub.php?error=stmfailed");
      exit();
    }

    // If prepared statement returns any result
    $exist;
    if ($stm->rowCount() > 0)
    {
      $exist = TRUE;
    }
    else 
    {
      $exist = FALSE;
    }
    return $exist;
  }
  
}