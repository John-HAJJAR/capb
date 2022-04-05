<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "Admin.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp"
      rel="stylesheet">
    <title>Admin Panel</title>
</head>
<body>
    
<?php

                    
// $password = 
//  password_verify($password, $hashedpass);
include '../db.php';


?>



<aside>
            <div class = "top">
                <span class = "side-bar-title">CapB</span>
                <img src = "../imgs/logo-blue.png" class = "side-bar-logo logo"> 
                <div class="close" id = "close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>

            <div class="sidebar">
                
                <a href = "dashboard.php" class = "active">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Dashboard</h3>
                    
                    
                </a>
                <a href = "admform/" target="_blank" class="a-href-ad-form">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Admissions Form</h3>

                    
                </a>
                <a href = "enlform/" target="_blank">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Enlistment Form</h3>

                    
                </a>
                <a href = "reqform/" target="_blank">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Request Form</h3>

                    
                </a>
                <a href = "https://www.gmail.com" target="_blank">
                    <span class="material-icons-sharp">
                        inbox
                    </span>
                    <h3>Inbox</h3>
                    <span class = "inbox-count">55</span>
                    
                    
                </a>

                <a href = "financialrec/"  target="_blank">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Financial Records</h3>

                    <a href = "dropdownforms/"  target="_blank">
                        <span class="material-icons-sharp">
                            view_list
                        </span>
                        <h3>Drop Downs</h3>

                    
                </a>

                <a href = "newsnupdates/"  target="_blank">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>News and Updates</h3>
                </a>
                
                <?php // if($_GET['logout']==1) session_destroy(); ?>

                <a href = "../../capb/" onclick="<?php session_destroy(); ?>">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>

                </a>
            </div>
        </aside>

</body>
</html>