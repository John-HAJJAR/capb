<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../../stylesheet.css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
  <?php include '../../db.php'; ?>

  <?php
    // if(empty($_SESSION['username']) || !isset($_SESSION['username']) || $_SESSION['ID'] != 0  ) {
    //         header("Location: /capb/");
    //     } else if (isset($_SESSION['ID'])  && $_SESSION['ID'] == 0 && isset($_SESSION['username'])) {

        $sql= "SELECT * FROM companydetails"; 
            $result = mysqli_query($conn,$sql);
            $arr = mysqli_fetch_assoc($result);
  ?>
    <br>
    <h3 align="center">Company details </h3>
    <h6 align="center">Any changes will have a direct effect on the website </h6> 
    <br>
    <div class="company-details-adm">
        <form name="companydets" class="form-adm-compdets" method="post">
        <input type="text" name="phonenumbcomp" class="phonenumbcomp" value="<?php echo $arr['Phone']; ?>"> <br>
        <input type="text" name="emailcomp" class="emailcomp" value="<?php echo $arr['Email']; ?>"> <br>
        <input type="text" name="locationcomp" class="locationcomp" value="<?php echo $arr['Location']; ?>"> <br>
        <input type="text" name="linkedincomp" class="linkedincomp" value="<?php echo $arr['LinkedIN']; ?>"><br>
        <input type="text" name="instagramcomp" class="instagramcomp" value="<?php echo $arr['Instagram']; ?>"><br><br>
        <input type="submit" class="s7-apply-btn update-compdet" name="update-compdet" value="Update">    
        <br><br><br>
    </form>
    </div> 
     



   

<?php
if (isset($_POST["action"])){
            if ($_POST["action"] == "update-company-det-in-db"){
                $np = $_POST["npn"];
                $ne = $_POST["ne"]; 
                $nloc = $_POST["nloc"];
                $nlink = $_POST["nlink"];
                $ni = $_POST["ni"];

                $sqlUpdate = "UPDATE companydetails 
                SET Phone = '".$np."', Email = '".$ne."', Location = '".$nloc."', LinkedIn = '".$nlink."', Instagram = '".$ni."' 
                WHERE 1";
                $resultUp = mysqli_query($conn,$sqlUpdate);
                if ($resultUp){
                    echo '<script>alert("Done, your company details have been updated !")</script>';
                } else {
                    echo '<script>alert("Mistake ! Nothing has changed.")</script>';
                }
            }
        }
?>
   <script>
  $(".update-compdet").click(function(){
             var action = 'update-company-det-in-db';
             var newpnumber = $(".phonenumbcomp").val();
             var newemail = $(".emailcomp").val();
             var newlocation = $(".locationcomp").val();
             var newlinkedin =  $(".linkedincomp").val();
             var newinstagram = $(".instagramcomp").val();



             if(confirm("Are you sure you want to update the database and the website with this new information ?"))
             {
                 $.ajax({
                     url:"index.php",
                     method:"POST",
                     data:{'action':action, 'npn':newpnumber, 'ne':newemail, 'nloc':newlocation, 'nlink':newlinkedin, 'ni':newinstagram },
                     success:function(){
                         location.reload();
                     }
                 })
             }
             else {
                 return false;
             }

         });
</script>

<?php //  } ?>

</body>
</html>
