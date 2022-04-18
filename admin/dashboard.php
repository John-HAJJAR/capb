<!DOCTYPE html>
<html lang="en">
<head>
<head>  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet">
      <link rel = "stylesheet" href = "Admin.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel = "stylesheet" href = "popupstyles2.css">
      <title>Admin Panel</title>
</head>
<body>
<body>

<?php include '../db.php'; ?> 
<!-- GET INFO FROM DB -->
<?php
    if(empty($_SESSION['username']) || !isset($_SESSION['username']) || $_SESSION['ID'] != 0  ) {
         header("Location: /capb/");
    } else if (isset($_SESSION['ID'])  && $_SESSION['ID'] == 0 && isset($_SESSION['username'])) {
         
    $sql = 'SELECT * FROM admin_dashboard';
    $res = mysqli_query($conn,$sql);
    $resarr = mysqli_fetch_assoc($res);
    
    ?>

  <!-- <div class = "container"> -->
        <?php // include 'adminnav.php'; ?>

        

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
                <!--  href = "admform/" target="_blank" class="a-href-ad-form" -->
                <div class="buttons">
                    <a href="#">
                    
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Admissions Form</h3>          
                </a>
                </div>
                <!-- <a href = "enlform/" target="_blank"> -->
                <div class="buttons1">
                    <a href="#">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Enlistment Form</h3>
                </a>
                </div>
                <!-- <a href = "reqform/" target="_blank"> -->
                <div class="buttons2">
                    <a href="#">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Request Form</h3>    
                </a>
                </div>
                <!-- <a href = "financialrec/"  target="_blank"> -->
                <div class="buttons3">
                    <a href="#">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Financial Records</h3>
                    </a>
                </div>
                    <!-- <a href = "dropdownforms/"  target="_blank"> -->
                <div class="buttons4">
                    <a href="#">
                        <span class="material-icons-sharp">
                            view_list
                        </span>
                        <h3>Drop Downs</h3>
                    </a>
                </div>
                <!-- <a href = "newsnupdates/"  target="_blank"> -->
                <div class="buttons5">
                    <a href="#">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>News and Updates</h3>
                    </a>
                </div>
                <div class="buttons6">
                    <a href="#">
                    <span class="material-icons-sharp">
                        view_list
                    </span>
                    <h3>Company Details</h3>
                    </a>
                </div>

                
                <?php // if($_GET['logout']==1) session_destroy(); ?>

                <a href = "../../capb/" onclick="<?php session_destroy(); ?>">
                    <span class="material-icons-sharp">
                        logout
                    </span>
                    <h3>Logout</h3>

                </a>
            </div>
        </aside>






        
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

    


<!-- ALL OVERLAYS  -->

<div class="overlay">
  <div class="content">
        <iframe src="admform/index.php" height="100%" width="100%" title="description"></iframe>

    <div id="close">&#10799;</div>
  </div>
</div>
    

<div class="overlay1 overlay">
  <div class="content">
        <iframe src="enlform/index.php" height="100%" width="100%" title="description"></iframe>
    <div id="close1">&#10799;</div>
  </div>
</div>
    
<div class="overlay2 overlay">
  <div class="content">
        <iframe src="reqform/index.php" height="100%" width="100%" title="description"></iframe>
    <div id="close2">&#10799;</div>
  </div>
</div>
    

<div class="overlay3 overlay">
  <div class="content">
        <iframe src="financialrec/index.php" height="100%" width="100%" title="description"></iframe>
    <div id="close3">&#10799;</div>
  </div>
</div>


<div class="overlay4 overlay">
  <div class="content">
        <iframe src="dropdownforms/index.php" height="100%" width="100%" title="description"></iframe>
    <div id="close4">&#10799;</div>
  </div>
</div>

<div class="overlay5 overlay">
  <div class="content">
        <iframe src="newsnupdates/index.php" height="100%" width="100%" title="description"></iframe>
    <div id="close5">&#10799;</div>
  </div>
</div>

<div class="overlay6 overlay">
  <div class="content">
        <iframe src="companydet/index.php" height="100%" width="100%" title="description"></iframe>
    <div id="close6">&#10799;</div>
  </div>    
</div>
    
    
    <script src = "Admin.js"></script>
    <script>
$(".buttons a").on("click", function() {
    $(".overlay").addClass("is-on");
    $(".overlay1").removeClass("is-on");
    $(".overlay2").removeClass("is-on");
    $(".overlay3").removeClass("is-on");
    $(".overlay4").removeClass("is-on");
    $(".overlay5").removeClass("is-on");
    $(".overlay6").removeClass("is-on");

  });
  
  
  $("#close").on("click", function() {
    $(".overlay").removeClass("is-on");
  });
  


  $(".buttons1 a").on("click", function() {
    $(".overlay1").addClass("is-on");
  });
  
  $("#close1").on("click", function() {
    $(".overlay1").removeClass("is-on");
  });

  
  
  $(".buttons2 a").on("click", function() {
    $(".overlay2").addClass("is-on");
  });
  
  $("#close2").on("click", function() {
    $(".overlay2").removeClass("is-on");
  });



  $(".buttons3 a").on("click", function() {
    $(".overlay3").addClass("is-on");
  });
  
  $("#close3").on("click", function() {
    $(".overlay3").removeClass("is-on");
  });


  
  $(".buttons4 a").on("click", function() {
    $(".overlay4").addClass("is-on");
  });
  
  $("#close4").on("click", function() {
    $(".overlay4").removeClass("is-on");
  });

    
  $(".buttons5 a").on("click", function() {
    $(".overlay5").addClass("is-on");
  });
  
  $("#close5").on("click", function() {
    $(".overlay5").removeClass("is-on");
  });

      
  $(".buttons6 a").on("click", function() {
    $(".overlay6").addClass("is-on");
  });
  
  $("#close6").on("click", function() {
    $(".overlay6").removeClass("is-on");
  });

    </script>
    
<?php } ?>
</body>
</html>