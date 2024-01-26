<?php    

    $h = new Helper();

    $is_member=isset($_SESSION['email']);

    if ($is_member){
        $reader = new BlogMember($_SESSION['email'],'','');  
        // ,$_SESSION['username'],$_SESSION['phone']
    }
    else
    {
        $reader=new BlogReader();
    }

    $products=$reader->getProductsFromDB();
    $images=$reader->getImagesFromDB();

    if($products==false ||$images==false)
    {
        include "output_code/blankcard.html";
    }
    else
    {   
        echo '<div class="card read-card">';
        echo '<div class="card-body">';
        foreach($products as $result)
        {   
            
            foreach($images as $image)
            {
                if($result['name']==$image['name'])
                {
                    
                    $Pname=htmlspecialchars($result['name']);
                    $Pdescription=htmlspecialchars($result['description']);
                    $Pprice=htmlspecialchars($result['price']);

                    $Plocation=$image['location'];
                   
                    

                    include "output_code/messagecard.php";
                    break;
                }
                
            }
            

        }
        echo '</div>';
        echo '</div>';
    }
    
    if ($is_member)
    {
        
        include "output_code/logout.html";
        
    }