<?php

    $h = new Helper();
    $msg = '';
    $email = '';

    if (isset($_POST['submit']))
    {        
        $email = $_POST['email'];                

        if ($h->isEmpty(array($email, $_POST['password'])))
        {
            $msg = 'All fields are required';     
        }
        else
        {
            $Sadmin = new Admin($email);

            if (!$Sadmin->isValidLogin($_POST['password']))
            {
                $msg = "Invalid Email or Password";
            }
            else
            {
                $_SESSION['email'] = $email;
                $_SESSION['is_admin'] = true;
                header("Location: write.php");                
            }
        }
            
    }