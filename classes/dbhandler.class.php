<?php

class DbHandler 
{
  public function connect()
  {
    try 
    {
      $servername = "localhost";
      $dbname = "cafe";
      $username = "root";
      $password = "";

      $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $dbh;
    }
    catch (PDOException $e)
    {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
    }
  }


  public function searchServices($searchKeyword) {
    $stmt = $this->connect()->prepare("SELECT * FROM service WHERE ser_name LIKE ?");
    $searchKeyword = "%" . $searchKeyword . "%"; // Add wildcards for partial matching
    $stmt->execute([$searchKeyword]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

  
}

