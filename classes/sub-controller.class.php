<?php

class SubController extends Sub
{
  private $subid;
  private $subno;
  private $subnamechar;
  private $substatus;

  // Constructor
  public function __construct($subid, $subno, $subnamechar, $substatus,) 
  {
    $this->subid = $subid;
    $this->subno = $subno;
    $this->subnamechar = $subnamechar;
    $this->substatus = $$substatus;
  }

  // Function to add sub
  public function addSub()
  {
    // Validation before adding subject
    if ($this->checkEmptyInput() == TRUE)
    {
      // Empty input
      header("location: ../addsub.php?error=emptyinput");
      exit();
    }

    if ($this->checkSubHave() == TRUE)
    {
      
      header("location: ../addsub.php?error=alrhave");
      exit();
    }

    
    $this->setSub($this->subid, $this->subno, $this->subnamechar, $this->substatus);
  }

  // Function to check for empty input
  private function checkEmptyInput() 
  {
    $isEmpty;
    if (empty($this->subid) || empty($this->subno) || empty($this->subnamechar) || empty($this->substatus)) 
    {
      $isEmpty = TRUE;
    }
    else 
    {
      $isEmpty = FALSE;
    }
    return $isEmpty;
  }

  
  private function checkSubHave()
  {
    $exist;
    if ($this->checkSubExist($this->subid, $this->subno))
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