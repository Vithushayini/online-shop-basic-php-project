<?php

    $h = new Helper();
    $msg = '';
    $email = '';
    $username='';
    $phone='';

    if (isset($_POST['submit']))
    {      
        $email=$_POST['email'];  
        $username = $_POST['username'];
        $phone=$_POST['phone'];                

        if ($h->isEmpty(array($email,$username, $_POST['password'], $_POST['confirm_password'],$phone)))
        {
            $msg = 'All fields are required';     
        }
        else if (!$h->isValidLength($username, 6, 100)){
            $msg = 'Username must be between 6 and 100 characters';
        }
        else if (!$h->isValidLength($_POST['password'])){
            $msg = 'Password must be between 8 and 20 characters';
        }
        else if (!$h->isSecure($_POST['password'])){
            $msg = 'Password must contain at least one lowercase character, one uppercase character and one digit';
        }
        else if (!$h->passwordsMatch($_POST['password'], $_POST['confirm_password'])){
            $msg = 'Passwords do not match';
        }        
        else
        {
            $member = new BlogMember($email,$username,$phone);

            if ($member->isDuplicateID())
            {
                $msg = "Email already in use";
            }
            else
            {
                $member->insertIntoUserDB($_POST['password']);
                header("Location: login.php?new=1");                
            }
        }
            
    }