<?php 

class LoginController extends Login
{
  private $uid;
  private $pwd;

  public function __construct($uid, $pwd)
  {
    $this->uid = $uid;
    $this->pwd = $pwd;
  }

  public function loginUser()
  {
    if ($this->checkEmptyInput() == TRUE)
    {
      // Empty input 
      header("location: ../index.php?error=emptyinput");
      exit();
    }

    // If passed validation
    $this->getUser($this->uid, $this->pwd);
  }

  private function checkEmptyInput()
  {
    $empty;
    if (empty($this->uid) || empty($this->pwd)) 
    {
      $empty = TRUE;
    }
    else 
    {
      $empty = FALSE;
    }
    return $empty;
  }
}