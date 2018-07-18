<?php

/**
 *
 */
class UserRegistrationController extends Users
{

    public function submitRegistrationForm($from_url)
    {
        $returnTo = explode("?returnWith", $from_url);
        $returnTo = $returnTo[0]; #The URL To Return To After Each Action

        //Fetch The Form Data Into Varialbles
        //----------------------------------------------------------------------------------//
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $password_confirmation = $_POST['password_confirmation'];
        //----------------------------------------------------------------------------------//

        //Validate The Form Data
        //----------------------------------------------------------------------------------//
            $emptyFields = 0;
            if (empty($username)) {
                $emptyFields += 1;
                // header("Location: http://$returnTo?returnWith=usernameEmpty");
                // exit();		
            }
            if (empty($email)) {
                $emptyFields += 1;
                // header("Location: http://$returnTo?returnWith=emailEmpty");
                // exit();		
            }
            if (empty($password)) {
                $emptyFields += 1;
                // header("Location: http://$returnTo?returnWith=passwordEmpty");
                // exit();		
            }
            if (empty($password_confirmation)) {
                $emptyFields += 1;
                // header("Location: http://$returnTo?returnWith=password_confirmationEmpty");
                // exit();		
            }
            if($password != $password_confirmation){
                $emptyFields += 1;
                // header("Location: http://$returnTo?returnWith=passwordsMissmatch");
                // exit();
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

            #2 Check for username
            $userNameExits = $this->checkIfExist($collumnName1, $username);
            if($userNameExits){
                header("Location: http://$returnTo?returnWith=userNameExits");
                exit();
            }
            
            #3 Check for email
            $emailExits = $this->checkIfExist($collumnName2, $email);
            if($emailExits){
                header("Location: http://$returnTo?returnWith=emailExits");
                exit();
            }
        //---------------------------------------------------------------------------------//

        //Attempt To Register the user in the database
        //---------------------------------------------------------------------------------//
            $attemptTORegister = $this->attemptTORegister($username, $email, $password);
            if($attemptTORegister){
                header("Location: http://$returnTo?returnWith=RegistrationWasSuccessful");
                exit();
            } else {
                header("Location: http://$returnTo?returnWith=RegistrationError");
                exit();
            }
        //---------------------------------------------------------------------------------//    
    }

}

?>
