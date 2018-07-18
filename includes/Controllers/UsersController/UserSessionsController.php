<?php

/**
 *
 */
class UserSessionsController extends Users
{

  public function showUserData($id)
  {
    // code...
    $User = new Users();
    $userData = $User->getOneUserById($id);
    return $userData['email'];
    return $userData['id'];
  }

  public function submitLoginForm($from_url)
  {
    $returnTo = explode("?returnWith", $from_url);
    $returnTo = $returnTo[0]; #The URL To Return To After Each Action

    //Fetch The Form Data Into Varialbles
    //----------------------------------------------------------------------------------//
        // $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    //----------------------------------------------------------------------------------//

    //Validate The Form Data
    //----------------------------------------------------------------------------------//
      $emptyFields = 0;
      if (empty($email)) {
          $emptyFields += 1;
          header("Location: http://$returnTo?returnWith=emailEmpty");
          exit();		
      }
      if (empty($password)) {
          $emptyFields += 1;
          header("Location: http://$returnTo?returnWith=passwordEmpty");
          exit();		
      }
      if ($emptyFields != 0) {
          header("Location: http://$returnTo?returnWith=thereAreEmptyFields=>$emptyFields");
          exit();
      }
    //----------------------------------------------------------------------------------//

    //Check If This User Exists in The Database
    //----------------------------------------------------------------------------------//
        #1 Define checkable collumn names
        $collumnName1 = 'username'; 
        $collumnName2 = 'email';

        // #2 Check for username
        // $userNameExits = $this->checkIfExist($collumnName1, $username);
        // if($userNameExits){
        //     header("Location: http://$returnTo?returnWith=userNameExits");
        //     exit();
        // }
        
        #3 Check if email
        $emailExits = $this->checkIfExist($collumnName2, $email);
        if(!$emailExits){
            header("Location: http://$returnTo?returnWith=yourAccountDoesNotExist");
            exit();
          exit();
        } else {
          $attemptToLogin = $this->attemptToLogin($collumnName2, $email, $password);
          if($attemptToLogin){
            header("Location: http://$returnTo?returnWith=loginSuccessful");
            exit();
          }else {
            header("Location: http://$returnTo?returnWith=incorrectLoginDetails");
            exit();
          }
        }
    //---------------------------------------------------------------------------------//
  }

}





?>
