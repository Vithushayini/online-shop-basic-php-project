<?php

    session_start();
    include "UI_include.php";
    include INC_DIR.'header.html';

?>

    <body>
 <div class="content">
 <nav>
            <div class="nav-left">
            <h1 class="logo">ABC Private Limited</h1>
            <ul>
                <li>
                    <?php
                    if(isset($_SESSION['is_sadmin'])){

                        echo '<a href="write.php">Add the product</a>';
                       
                    }
                    if(isset($_SESSION['is_admin'])){

                        echo '<a href="write.php">Add the product</a>';
                       
                    }
                    ?>
                </li>
                    
                
                    <?php
                    if(!isset($_SESSION['email'])){
                       echo "<li> <a href='login.php'>Log in</a></li>";
                       echo "<li><a href='signup.php'>Sign up</a></li>";
                    }
                    ?>
                    <!-- <a href="login.php">Log in</a> -->
                
                <li>
                <?php
                    if(isset($_SESSION['is_sadmin']))
                    {
                        echo '<a href = "adminSignup.php">Sign Up Admin</a>';
                    }

                    ?>
                    
                </li>
            </ul>
            </div>
            <div class="nav-right">
            <div class="nav-user-icon online" onclick="settingsMenuToggle()">
                <img src="images/profile-pic.png">
            </div>

            </div>

            <!-- menu bar -->
            <div class="settings-menu">
                <div class="settings-menu-inner">
                    <div class="user-profile">
                        <img src="images/profile-pic.png">
                        <div>
                            <?php
                                if(isset($_SESSION['username']))
                                {
                                    echo "<p>{$_SESSION['username']}</p>";
                                }
                                else
                                {
                                    echo'<p>User Name</p>';
                                }
                                if(isset($_SESSION['is_sadmin'])||isset($_SESSION['is_admin'])){
                                if(isset($_SESSION['is_admin']))
                                {
                                    echo'<p>Admin</p>';
                                }
                                else if(isset($_SESSION['is_sadmin']))
                                {
                                    echo'<p>Super Admin</p>';
                                }
                            }
                                // else if(!isset($_SESSION['is_admin']) && !isset($_SESSION['is_Sadmin']))
                                // {
                                //     echo'<p>Customer</p>';
                                // }
                            ?>
                            <!-- <a href="#">See your profile</a> -->
                        </div>
                    </div>
                    <div class="user-profile">
                        <img src="images/email-icon-square-13.png">
                        <div>
                            <?php
                                if(isset($_SESSION['email']))
                                {
                                    echo "<p>{$_SESSION['email']}</p>";
                                }
                                else
                                {
                                    echo'<p>Email</p>';
                                }
                            ?>
                        </div>
                    </div>
                    <div class="user-profile">
                        <img src="images/phone.png">
                        <div>
                            <?php
                                if(isset($_SESSION['phone']))
                                {
                                    echo "<p>{$_SESSION['phone']}</p>";
                                }
                                else
                                {
                                    echo'<p>Phone</p>';
                                }
                            ?>    
                        </div>
                    </div>
                    <hr>
                    <div class="user-profile">
                        <img src="images/logout.png">
                        <!-- <p>Log out</p> -->
                        <a href="logout.php">Log Out</a>
                    </div>
                </div>
            </div>

        </nav>
            

<div>
<?php 
        include INC_DIR."/process/p-read.php";
    ?>
</div>
 </div>       

    
    

    <script>
        function settingsMenuToggle() {
        var settingsMenu = document.querySelector('.settings-menu');
        if (settingsMenu.style.display === 'block') {
            settingsMenu.style.display = 'none';
        } else {
            settingsMenu.style.display = 'block';
        }
      }
    </script>
    

    <!-- <script src="includes/js/script.js"></script> -->
	</body>

    
</html>