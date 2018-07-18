<?php

// include 'db/db_connection.inc.php';

/**
 *
 */
class Subscribers extends Database
{

  function __construct()
  {
    // code...
  }

  protected $tableName = "subscribers";

  // protected function getOneUserById($id)
  // {
  //   // code...

  //   $sql = "SELECT * FROM users WHERE id='$id';";
  //   $sql_query = mysqli_query($this->connectToDatabase(), $sql);
  //   return mysqli_fetch_assoc($sql_query);
  // }

  protected function checkIfExist($collumnName, $value)
  {
    $sql = "SELECT * FROM $this->tableName WHERE $collumnName='$value';";
    $sql_query = mysqli_query($this->connectToDatabase(), $sql);
    if(mysqli_num_rows($sql_query) > 0){
      return true;
    } else return false;
  }

  protected function attemptTORegister($fullname, $email, $phone)
  {
    $sql = "INSERT INTO $this->tableName (fullname, email, phone) 
            VALUES('$fullname', '$email', '$phone');";
            if(mysqli_query($this->connectToDatabase(), $sql)){
              return true;
            } else return false;
    
  }

  protected function fetchUserBy($collumnName, $value)
  {
    $sql = "SELECT * FROM $this->tableName WHERE $collumnName='$value' LIMIT 1;";
    $sql_query = mysqli_query($this->connectToDatabase(), $sql);
    return mysqli_fetch_assoc($sql_query);
  }

}


// var_dump($result);

?>
