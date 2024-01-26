<?php

    session_start();
    include "UI_include.php";
    include INC_DIR."/process/p-write.php";
    include INC_DIR.'header.html';

?>

    <body>        
        <script>
            $(function(){
            setTimeout(function() {
                $('#error').fadeOut();
            }, 3000); 

            });
        </script>    
		<div id="container">
            <h1>New Product</h1>
            <form method="post" action="" enctype="multipart/form-data">                 
                <div id = "inputtitle">
                    <input id = "txttitle" type="text" name="name" placeholder="Enter Product Name" autofocus <?php if ($msg != 'Product saved successfully') $h->keepValues($name, 'textbox'); ?>>                    
                </div>

                <div id = "inputtitle">
                    <input id = "txttitle" type="file" name="location" placeholder="Add image here" autofocus <?php if ($msg != 'Product saved successfully') $h->keepValues($location, 'file'); ?>>                    
                </div>

                <div id="message">
                    <textarea name = "description"><?php if ($msg != 'Product saved successfully') $h->keepValues($description, 'textarea'); ?></textarea>
                    <!-- <script>CKEDITOR.replace('description', {height: 400});
                    </script>                     -->
                </div>

                <div id = "inputtitle">
                    <input id = "txttitle" type="text" name="price" placeholder="Enter Product Price" autofocus <?php if ($msg != 'Product saved successfully') $h->keepValues($price, 'textbox'); ?>>                    
                </div>

                <div id = "error" class="error"><?php echo $msg; ?></div>
                <div id="submit-section">        
                    <input id = "postsubmit" class="btn btn-primary" type="submit" name="submit" value="Send" />                    
                    <!-- <select id = "postoptions" class = "custom-select" name = "audience">
                        <option value = ''>Available to: </option>
                        <option value = '1' <//?php if ($msg != 'Product saved successfully') $h->keepValues($audience, 'select', '1'); ?> >Public</option>
                        <option value = '2' <//?php if ($msg != 'Message saved successfully') $h->keepValues($audience, 'select', '2'); ?>>Members Only</option>           
                    </select>                                         -->
                </div>                
            </form>                
		</div>
        <div id = 'postlogout'>
            <?php
            if(isset($_SESSION['is_admin'])){
            echo '<a href = "logout.php?admin=1">Click here to logout</a>|';
            echo '<a href = "read.php" target="_blank">Click here to read posts</a>';  
            }

            if(isset($_SESSION['is_sadmin'])){
                echo '<a href = "logout.php?Sadmin=1">Click here to logout</a>|' ;
                echo '<a href = "read.php" target="_blank">Click here to read posts</a>'; 
            }
            ?>
                      
        </div>        

	</body>
</html>