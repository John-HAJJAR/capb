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

   <?php $sql= "SELECT * FROM companydetails"; 
        $result = mysqli_query($conn,$sql);
        $arr = mysqli_fetch_assoc($result);
            ?>
    <br>
    <h2 align="center">News & Updates </h2>
    <h6 align="center">Any changes will have a direct effect on the website. </h6> 
    <h6 align="center">Reccomended character number is <span class ="key-word">61</span>.</h6>
    <br>
    <div class="company-details-adm newsnupdates-adm">
        <form name="newsnupdates-adm-form form1-adm-nu" class="form-adm-compdets newsnupdates-adm-form" method="post">
        <h4 align="center"> News #1 </h4>
        <h5 align="center" id="charNum"> News 1 counter :</h5>
        <input type="text" name="update1" class="newsinput update1" onkeyup="countChars(this);">
        <br><br>
        <h5 align="center"> Format : <strong> Enterprise | 10.10.21 </strong>  </h5>
        <input type="text" name="date1" class="newsinput update11">
        <br><br>
        <input type="submit" class="s7-apply-btn update-news1" name="update-news1" value="Update #1">    
        </form>

        <br><br>
        <form name="newsnupdates-adm-form form2-adm-nu" class="form-adm-compdets newsnupdates-adm-form" method="post">
        <h4 align="center"> News #2 </h4>
        <h5 align="center" id="charNum2"> News 2 counter :</h5>
        <input type="text" name="update1" class=" newsinput update2" onkeyup="countChars2(this);">
        <br><br>
        <h5 align="center"> Format : <strong> Finance | 13.07.21 </strong>  </h5>
        <input type="text" name="date2" class="newsinput update11">
        <br><br>
        <input type="submit" class="s7-apply-btn update-news2" name="update-news2" value="Update #2">    
        </form>

        <br><br>
        <form name="newsnupdates-adm-form form3-adm-nu" class="form-adm-compdets newsnupdates-adm-form" method="post">
        <h4 align="center"> News #3 </h4>
        <h5 align="center" id="charNum3"> News 3 counter :</h5>
        <input type="text" name="update1" class=" newsinput update3" onkeyup="countChars3(this);">
        <br><br>
        <h5 align="center">Format : <strong> Enterprise | 10.10.21 </strong> </h5>
        <input type="text" name="date3" class="newsinput update11">
        <br><br>
        <input type="submit" class="s7-apply-btn update-news3" name="update-news3" value="Update #3">    
        </form> 
        <br><br>
        <br>
    </form>
    </div> 
     



   

<?php
if (isset($_POST["action"])){
            if ($_POST["action"] == "update-newsS"){
                $news = $_POST["news"];
                $date = $_POST["date"];
                $nb = $_POST["number"];
                
                $sqlUpdate = "UPDATE news 
                SET news = '".$news."', date = '".$date."' WHERE ID = '".$nb."'";
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
       function countChars(obj){
    document.getElementById("charNum").innerHTML = obj.value.length+' characters';
    }
    function countChars2(obj){
        document.getElementById("charNum2").innerHTML = obj.value.length+' characters';
    }

    function countChars3(obj){
        document.getElementById("charNum3").innerHTML = obj.value.length+' characters';
    }



  $(".update-news1").click(function(){
             var action = 'update-news';
             var news = $(".update1").val();
             var date = $(".update11").val();
             var number = 1;

             if(confirm("Are you sure you want to update the database and the website with this new information ?"))
             {
                 $.ajax({
                     url:"index.php",
                     method:"POST",
                     data:{'action':action, 'news':news, 'date':date, 'number':number },
                     success:function(){
                         location.reload();
                     }
                 })
             }
             else {
                 return false;
             }

         });

    $(".update-news2").click(function(){
        var action = 'update-news';
        var news = $(".update2").val();
        var date = $(".update22").val();
        var number = 2;

        if(confirm("Are you sure you want to update the database and the website with this new information ?"))
        {
            $.ajax({
                url:"index.php",
                method:"POST",
                data:{'action':action, 'news':news, 'date':date, 'number':number },
                success:function(){
                    location.reload();
                }
            })
        }
        else {
            return false;
        }

    });

    $(".update-news3").click(function(){
             var action = 'update-news';
             var news = $(".update3").val();
             var date = $(".update33").val();
             var number = 3;

             if(confirm("Are you sure you want to update the database and the website with this new information ?"))
             {
                 $.ajax({
                     url:"index.php",
                     method:"POST",
                     data:{'action':action, 'news':news, 'date':date, 'number':number },
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

</body>
</html>
