<?php

    $h = new Helper();
    $msg = '';
    $email = '';
    $username='';
    $phone='';

    if (isset($_POST['submit']))
    {        
        $email = $_POST['email'];                

        if ($h->isEmpty(array($email, $_POST['password'])))
        {
            $msg = 'All fields are required';     
        }
        else
        {
            $member = new BlogMember($email,$username,$phone);

            if (!$member->isValidLogin($_POST['password']))
            {
                $msg = "Invalid Email or Password";
            }
            else
            {
                $result=$member->getUserFromDB($email);
                $_SESSION['email'] = $result['email'];
                $_SESSION['username']=$result['username'];
                $_SESSION['phone']=$result['phone'];
                $_SESSION['is_admin']=$result['is_admin'];
                $_SESSION['is_sadmin']=$result['is_sadmin'];
                header("Location:read.php");                
            }
        }
            
    }