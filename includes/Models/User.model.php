<?php

// include 'db/db_connection.inc.php';

/**
 *
 */
class Users extends Database
{

  function __construct()
  {
    // code...
  }

  protected $tableName = "users";

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

  protected function attemptTORegister($username, $email, $password)
  {
    $sql = "INSERT INTO $this->tableName (username, email, password) 
            VALUES('$username', '$email', '$password');";
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

  protected function attemptToLogin($collumnName, $value, $password)
  {
    $sql = "SELECT * FROM $this->tableName WHERE $collumnName='$value' LIMIT 1;";
    $sql_query = mysqli_query($this->connectToDatabase(), $sql);
    $user_row = mysqli_fetch_assoc($sql_query);

    if($password !== $user_row['password']){
      return false;
      exit();
    } elseif ($password === $user_row['password']) {
      //log the users important details to session
      $_SESSION['user_id'] 			= $user_row['user_id'];
      $_SESSION['username'] 			= $user_row['username'];
      $_SESSION['user_token'] 		= $user_row['user_token'];

      return true;
      exit();

    }
    
  }

}


// var_dump($result);

?>
