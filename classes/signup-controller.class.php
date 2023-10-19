<?php 

class SignupController extends Signup
{
  private $uid;
  private $fname;
  private $lname;
  private $phone;
  private $email;
  private $pwd;
  private $type;

  // Constructor
  public function __construct($uid, $fname, $lname, $phone, $email, $pwd, $type) 
  {
    $this->uid = $uid;
    $this->fname = $fname;
    $this->lname = $lname;
    $this->phone = $phone;
    $this->email = $email;
    $this->pwd = $pwd;
    $this->type = $type;
  }

  // Function to sign up user
  public function signupUser()
  {
    // Validations
    if ($this->checkEmptyInput() == TRUE)
    {
      // Empty input 
      header("location: ../signup.php?error=emptyinput");
      exit();
    }

    if ($this->checkValidEmail() == FALSE)
    {
      // Invalid email 
      header("location: ../signup.php?error=invalidemail");
      exit();
    }

    if ($this->checkUIDAndEmailExist() == TRUE)
    {
      // ID or Email taken 
      header("location: ../signup.php?error=useroremailtaken");
      exit();
    }

    // If passed validations
    $this->setUser($this->uid, $this->fname, $this->lname, $this->phone, $this->email, $this->pwd, $this->type);
  }

  // Function to check for empty input
  private function checkEmptyInput() 
  {
    $empty;
    if (empty($this->uid) || empty($this->fname) || empty($this->lname) || empty($this->phone) || empty($this->email) || empty($this->pwd) || empty($this->type)) 
    {
      $empty = TRUE;
    }
    else 
    {
      $empty = FALSE;
    }
    return $empty;
  }

  // Function to check valid email address
  private function checkValidEmail()
  {
    $valid;
    if (!filter_var($this->email, FILTER_VALIDATE_EMAIL))
    {
      $valid = FALSE;
    }
    else
    {
      $valid = TRUE;
    }
    return $valid;
  }

  // Function to check ID and email
  private function checkUIDAndEmailExist()
  {
    $exist;
    if ($this->checkUserExist($this->uid, $this->email))
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