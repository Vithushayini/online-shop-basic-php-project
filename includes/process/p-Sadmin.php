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
            $Sadmin = new SuperAdmin($email);

            if (!$Sadmin->isValidLogin($_POST['password']))
            {
                $msg = "Invalid Email or Password";
            }
            else
            {
                $_SESSION['email'] = $email;
                $_SESSION['is_sadmin'] = true;
                header("Location: write.php");                
            }
        }
            
    }