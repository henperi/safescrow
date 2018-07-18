<?php

/**
 *
 */
class SubscribersController extends Subscribers
{

    public function submitSubscribersForm($from_url)
    {
        $returnTo = explode("?returnWith", $from_url);
        $returnTo = $returnTo[0]; #The URL To Return To After Each Action

        //Fetch The Form Data Into Varialbles
        //----------------------------------------------------------------------------------//
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
        //----------------------------------------------------------------------------------//

        //Validate The Form Data
        //----------------------------------------------------------------------------------//
            $emptyFields = 0;
            // if (empty($fullname)) {
            //     $emptyFields += 1;
            //     // header("Location: http://$returnTo?returnWith=fullnameEmpty");
            //     // exit();		
            // }
            if (empty($email)) {
                $emptyFields += 1;
                // header("Location: http://$returnTo?returnWith=emailEmpty");
                // exit();		
            }
            // if (empty($phone)) {
            //     $emptyFields += 1;
            //     // header("Location: http://$returnTo?returnWith=phoneEmpty");
            //     // exit();		
            // }
            if ($emptyFields != 0) {
                header("Location: http://$returnTo?returnWith=thereAreEmptyFields=>$emptyFields");
                exit();
            }
        //----------------------------------------------------------------------------------//

        //Check If This Subscriber Exists in The Database
        //----------------------------------------------------------------------------------//
            #1 Define checkable collumn names
            $collumnName1 = 'email'; 
            $collumnName2 = 'phone';

            #2 Check for email
            $emailExits = $this->checkIfExist($collumnName1, $email);
            if($emailExits){
                header("Location: http://$returnTo?returnWith=emailExits");
                exit();
            }
            
            // #3 Check for phone
            // $emailExits = $this->checkIfExist($collumnName2, $phone);
            // if($emailExits){
            //     header("Location: http://$returnTo?returnWith=emailExits");
            //     exit();
            // }
        //---------------------------------------------------------------------------------//

        //Attempt To Register the user in the database
        //---------------------------------------------------------------------------------//
            $attemptTORegister = $this->attemptTORegister($fullname, $email, $phone);
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
