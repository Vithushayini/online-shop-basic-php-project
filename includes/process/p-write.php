<?php

    if (!isset($_SESSION['email']) || !isset($_SESSION['is_sadmin']))
        header('Location: adminLogin.php');
    else{
        
        $h = new Helper();
        $name = '';
        $location='';
        $description = '';
        $price = '';
        $msg = '';
        
        if (isset($_POST['submit']))
        {
            
            $name = $_POST['name'];
            // $location=$_POST['location'];
            $description = $_POST['description'];
            $price = $_POST['price'];

            $imgname=$_FILES['location']['name'];
            $tmpimgname=$_FILES['location']['tmp_name'];
            $folder='upload/';
            $location=$folder.$imgname;
            move_uploaded_file($tmpimgname,$location);

            if ($h->isEmpty(array($name, $description, $price)))
                $msg = 'All fields are required';
            else
            {
                
            if(isset($_SESSION['is_sadmin']))
            {
                $Sadmin=new SuperAdmin($_SESSION['email']);
                $Sadmin->insertIntoImagesDB($name,$location);
                $Sadmin->insertIntoProductsDB($name,$description,$price);
                $msg='Product sent successfully';
            }
            else if(isset($_SESSION['is_admin']))
            {
                $admin=new Admin($_SESSION['email']);
                $admin->insertIntoImagesDB($name,$location);
                $admin->insertIntoProductsDB($name,$description,$price);
                $msg='Product sent successfully';
            }
                
                
            }
                
            
        }
        
    }