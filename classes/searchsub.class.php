<?php

class SearchSub extends DbHandler
{
  
  protected function setSearch($subid, $subno, $subnamechar, $status) 
  { 
    // Prepare query
    $stm = $this->connect()->prepare("SELECT * FROM subject WHERE sub_id LIKE ? AND sub_no LIKE ? AND sub_namechar LIKE ? AND sub_status LIKE ?;");

    
    if (!$stm->execute(array("%$subid%", "%$subno%", "%$subnamechar%", "%$status%"))) 
    {
      $stm = null;
      header("location: ../searchsub.php?error=stmfailed");
      exit();
    }
    
    
    $stm->setFetchMode(PDO::FETCH_ASSOC);
    $result = $stm->fetchAll();

    // If there are results / $result == TRUE
    if ($result)
    {
      // Create array $sub to store the results.
      $sub=array();

      // for loop statement to store results
      for ($i=0; $i < count($result);)
      {
        foreach($result as $s)
        {
          $sub[$i] = array("subid"=>$s['sub_id'], 
                          "subno"=>$s['sub_no'], 
                          "subnamechar"=>$s['sub_namechar'], 
                          "status"=>$s['sub_status'],
                        );
          $i++;
        }
      }
      
      session_start();
      $_SESSION['searchsubsresult'] = $sub;

      
      header("location: ../searchsub.php");
      exit();
    }
   
    else 
    { 
      $stm = null;
      
      header("location: ../searchsub.php?error=nomatchingresults");
      exit();
    }
  }
}