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
<body class="admin-panel-body">
    <?php include '../../db.php'; ?>
<div class="container">
  <h2 align="center">Request Form </h2>
  <p align="center">Here is displayed everything and everyone that is in the DB : </p>  
  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
    <?php
      $sqlaf = "SELECT * FROM request_form";
      $reslist = mysqli_query($conn,$sqlaf);
      echo '<table border="1" class="table table-bordered table-striped tableforms-adminpanel">';
      echo '<thead>';
      echo '<tr>';
      echo '<th style="width:9%;"> Name </th>';
      echo '<th style="width:11%;"> Email </th>';
      echo '<th style="width:10%;"> Phone number </th>';
      echo '<th style="width:10%;"> Selected Service </th>';
      echo '<th style="width:10%;"> Designated Purpose </th>';
      echo '<th style="width:10%;"> Defining Entity  </th>';
      echo '<th class="message-th" style="width:40%;"> Message </th>';
      echo '<th>Action</th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody id="myTable">';
      while ($arr = mysqli_fetch_assoc($reslist)){
          echo '<tr>';
              echo '<td>';
                  echo $arr['FullName'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Email'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Pnumber'];
              echo '</td>';
              echo '<td>';
                  echo $arr['SelectedService'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Des_Purpose'];
              echo '</td>';
              echo '<td>';
                  echo $arr['DefiningEnt'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Message'];
              echo '</td>';
              echo '<td>';
                  echo '<button name="remove-adm" class="remove-adm admin-form-action-btn" value="'.$arr['ID'].'">';
                   echo 'Remove';
                 echo '</button>';
              echo '</td>';
          echo '</tr>';
      }
      echo '</tbody>';
      echo '</table>';
  ?>

</div>


<?php
if (isset($_POST["action"])){
            if ($_POST["action"] == "remove-from-db-reqform"){
                $id = $_POST["id"];
                $sqldelete = "DELETE FROM request_form WHERE ID='$id'";
                $resdelete = mysqli_query($conn,$sqldelete);
                if ($resdelete){
                    echo '<script>alert("Product successfully deleted.")</script>';
                }
            }
        }
?>

<script>
  
  $(".remove-adm").click(function(){
             var action = 'remove-from-db-reqform';
             var id = $(this).attr("value");

             if(confirm("Are you sure you want to remove this line from the databse for ever ?"))
             {
                 $.ajax({
                     url:"index.php",
                     method:"POST",
                     data:{'id':id, 'action':action},
                     success:function(){
                         location.reload();
                     }
                 })
             }
             else {
                 return false;
             }

         });


$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>


</body>


</html>