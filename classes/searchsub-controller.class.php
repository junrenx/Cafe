<?php 

class SearchSubController extends SearchSub
{
  private $subid;
  private $subno;
  private $subnamechar;
  private $status;

  // Constructor
  public function __construct($subid, $subno, $subnamechar, $status) 
  {
    $this->subid = $subid;
    $this->subno = $subno;
    $this->subnamechar = $subnamechar;
    $this->status = $status;
  }

  
  public function searchSub()
  {
    // Validation 
    if ($this->checkEmptyInput() == TRUE)
    {
      // Empty input 
      header("location: ../searchsub.php?error=emptyinput");
      exit();
    }

    // If passed validation
    
    $this->setSearch($this->subid, $this->subno, $this->subnamechar, $this->status);
  }

  // Function to check if user have empty input for all 4 fields
  private function checkEmptyInput() 
  {
    $empty;
    if (empty(($this->subid)) && empty($this->subno) && empty($this->subnamechar) && empty($this->status)) 
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