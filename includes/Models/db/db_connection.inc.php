<?php
  /**
   *
   */
  class Database
  {
    private $dbServername = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName = "safex-scrow@#";

    protected function connectToDatabase()
    {
      // code...
      return $connect = new mysqli($this->dbServername, $this->dbUsername, $this->dbPassword, $this->dbName);
    }
  }


?>
