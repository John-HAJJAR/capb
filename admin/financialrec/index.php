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
  
  <?php if( isset($_SERVER['HTTP_SEC_FETCH_DEST']) && $_SERVER['HTTP_SEC_FETCH_DEST'] == 'iframe' ) {
?>

  <?php 

   $sql= "SELECT * FROM financial_records"; 
        $result = mysqli_query($conn,$sql);
        $arr = mysqli_fetch_assoc($result);
  ?>

    <br>
    <h3 align="center">Financial records </h3>
    <h6 align="center">Any changes will have a direct effect on the website </h6> 
    <br>
    <div class="finance-rec-adm">
        <form name="companydets" class="form-adm-financerec" method="post">
        <p align="center">Cumulative value of successfully-closed private deals (in millions USD)</p>
        <input type="text" name="CumulVal" class="CumulVal" value="<?php echo $arr['CumulativeValues']; ?>"> <br>
        <p align="center"> Total number of successfully-closed private deals </p>
        <input type="text" name="ClosedDeals" class="ClosedDeals" value="<?php echo $arr['ClosedDeals']; ?>"> <br>
        <p align="center"> Total return on investment (YTD) due to our private fund (in percent) </p>
        <input type="text" name="ReturnInv" class="ReturnInv" value="<?php echo $arr['Return_Inv']; ?>"> <br>
        <p align="center"> Direct Investment (in %)</p>
        <input type="text" name="DirectInv" class="DirectIvn" value="<?php echo $arr['Direct_Inv']; ?>"><br>
        <p align="center"> Indirect Investment (in %) </p>
        <input type="text" name="BDIinv" class="BDIinv" value="<?php echo $arr['BDI_Inv']; ?>"><br>
        <p align="center"> Research, Consulting & Advisory services (in %) </p>
        <input type="text" name="RCAservices" class="RCAservices" value="<?php echo $arr['RCA_services']; ?>"><br><br>
        <input type="submit" class="s7-apply-btn update-financerec" name="update-financerec" value="Update">    
        <br><br><br>
    </form>
    </div> 
    <br><br><br>

<?php
if (isset($_POST["action"])){
            if ($_POST["action"] == "update-finance-rec-in-db"){
                $cv = $_POST["cv"];
                $cd = $_POST["cd"]; 
                $ri = $_POST["ri"];
                $di = $_POST["di"];
                $bdi = $_POST["bdi"];
                $rca = $_POST["rca"];

                $sqlUpdate = "UPDATE financial_records 
                SET CumulativeValues = '".$cv."', ClosedDeals = '".$cd."', Return_Inv = '".$ri."', Direct_Inv = '".$di."', BDI_Inv = '".$bdi."', RCA_services = '".$rca."' 
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
  $(".update-financerec").click(function(){
             var action = 'update-finance-rec-in-db';
             var cv = $(".CumulVal").val();
             var cd = $(".ClosedDeals").val();
             var ri = $(".ReturnInv").val();
             var di =  $(".DirectIvn").val();
             var bdi = $(".BDIinv").val();
             var rca = $(".RCAservices").val();

             if(confirm("Are you sure you want to update the database and the website with this new information ?"))
             {
                 $.ajax({
                     url:"index.php",
                     method:"POST",
                     data:{'action':action, 'cv':cv, 'cd':cd, 'ri':ri, 'di':di, 'bdi':bdi, 'rca':rca },
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


<?php } else {

echo "<script>
    alert('Acces Denied : ERROR');
    window.location.href='/capb/';
        </script>";

} ?>

</body>
</html>
