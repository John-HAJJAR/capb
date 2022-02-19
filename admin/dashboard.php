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

<!-- GET INFO FROM DB -->
    <?php
    include '../db.php'; 
    $sql = 'SELECT * FROM admin_dashboard';
    $res = mysqli_query($conn,$sql);
    $resarr = mysqli_fetch_assoc($res);
    
    ?>

<?php 
 if(!isset($_SESSION['status']) && empty($_SESSION['status']) && $_SESSION['status'] == false) {
    header("Location: /capb");
} else if(isset($_SESSION['ID'])  && $_SESSION['ID'] == 0){
    ?>

  <!-- <div class = "container"> -->
        <?php include 'adminnav.php'; ?>
        <div class = "container">

        <div class = "panel">
            <div class = "dash">Dashboard</div>
            <div class = "right">
                <div class="theme-toggler">
                    <span class="material-icons-sharp light">
                        light_mode
                    </span>

                    <span class="material-icons-sharp dark">
                        dark_mode
                    </span>
                </div>
                    <button id = "menu-btn">
                        <span class="material-icons-sharp">
                            menu
                        </span>
                    </button>

                    <span class="profile">
                        <span class="info">
                            <p>Hey, <b>Georges</b></p>
                        </span>
                    </span>
                </div>
            </div>  
            <div class = "date"><?php echo date("d/m/Y"); ?></div>
            <!-- 
                <div class="theme-toggler">
                    <span class="material-icons-sharp">
                        light_mode
                    </span>

                    <span class="material-icons-sharp">
                        dark_mode
                    </span>
                    
                </div>

                
            </div> -->
        <div class = "main">
            <div class="blocks b1">
                <div class = "number"><?php echo $resarr['StaticPages']; ?></div>
                <div class = "category">
                        Total Static Pages
                </div>
                <a href = "">
                    <div class = "info bg-1">More info 
                        <span class="material-icons-sharp arrow">
                            arrow_circle_right
                        </span>
                    </div>
                </a>
                
            </div>
            <div class="blocks b2">
                <div class = "number"><?php echo $resarr['Users']; ?></div>
                <div class = "category">
                        Total Number of User
                </div>
                <a href = "">
                    <div class = "info bg-2">More info 
                        <span class="material-icons-sharp arrow">
                            arrow_circle_right
                        </span>
                    </div>
                </a>
            </div>
            <div class="blocks b3">
                <div class = "number"><?php echo $resarr['Inbox']; ?></div>
                <div class = "category">
                    Inbox
                </div>
                <a href = "">
                    <div class = "info bg-3">More info 
                        <span class="material-icons-sharp arrow">
                            arrow_circle_right
                        </span>
                    </div>
                </a>
            </div>
            <div class="blocks b4">
                <div class = "number"><?php echo $resarr['FormsSubmitted'];   ?></div>
                <div class = "category">
                        Total Forms Submitted
                </div>
                <a href = "">
                    <div class = "info bg-4">More info 
                        <span class="material-icons-sharp arrow">
                            arrow_circle_right
                        </span>
                    </div>
                </a>
            </div>

        </div>
    </div>

    

    <?php } ?>




    <script src = "Admin.js"></script>
</body>
</html>