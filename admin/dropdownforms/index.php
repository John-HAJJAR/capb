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

        $sql= "SELECT * FROM dropdown_form"; 
           $result1 = mysqli_query($conn,$sql);
    ?>
    <br>
    <h3 align="center">Dropdown Selections </h3>
    <h6 align="center">Any changes will have a direct effect on the website </h6> 
    <br>
<div class="dropdown-form-adm">
    <h4 align="center">Chosen Position</h4>
   <?php
      echo '<table border="1" class="table table-bordered table-striped tableforms-adminpanel dropdown-admin">';
      echo '<thead>';
      echo '<tr>';
      echo '<th> ID </th>';
      echo '<th> Name </th>';
      echo '<th> Action </th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
      while ($arr = mysqli_fetch_assoc($result1)){
        if($arr['Type'] == 'CP') {
            echo '<tr>';
              echo '<td>';
                  echo $arr['ID'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Name'];
              echo '</td>';
              echo '<td>';
                  echo '<button name="remove-adm" class="remove-adm" value="'.$arr['ID'].'">';
                  echo 'Remove';
                  echo '</button>';
              echo '</td>';
            echo '</tr>';
            }
      }
            echo '<tr>';
            echo '<td colspan="3">';
            echo '<input type="text" name="new-add1" class="form-control new-add new-add1">';
            echo '<button name="add-adm" class="add-adm" value="CP">';
            echo 'Add';
            echo '</button>';
            echo '</td>';
            echo '</tr>';

      echo '</tbody>';
      echo '</table>';
  ?>

<br><br><br>

<?php $result2 = mysqli_query($conn,$sql); ?>
    <br>
<h4 align="center">Role Type</h4>
   <?php
      echo '<table border="1" class="table table-bordered table-striped tableforms-adminpanel dropdown-admin">';
      echo '<thead>';
      echo '<tr>';
      echo '<th> ID </th>';
      echo '<th> Name </th>';
      echo '<th> Action </th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
      while ($arr = mysqli_fetch_assoc($result2)){
        if($arr['Type'] == 'RT') {
            echo '<tr>';
              echo '<td>';
                  echo $arr['ID'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Name'];
              echo '</td>';
              echo '<td>';
                  echo '<button name="remove-adm" class="remove-adm" value="'.$arr['ID'].'">';
                  echo 'Remove';
                  echo '</button>';
              echo '</td>';
            echo '</tr>';
            }
      }
            echo '<tr>';
            echo '<td colspan="3">';
            echo '<input type="text" name="new-add2" class="form-control new-add new-add2">';
            echo '<button name="add-adm" class="add-adm" value="RT">';
            echo 'Add';
            echo '</button>';
            echo '</td>';
            echo '</tr>';
      echo '</tbody>';
      echo '</table>';
  ?>

  <br><br><br>
  
<?php $result3 = mysqli_query($conn,$sql); ?>
    <br>
<h4 align="center">Investment Category</h4>
   <?php
      echo '<table border="1" class="table table-bordered table-striped tableforms-adminpanel dropdown-admin">';
      echo '<thead>';
      echo '<tr>';
      echo '<th> ID </th>';
      echo '<th> Name </th>';
      echo '<th> Action </th>';
      echo '</tr>';
      echo '</thead>';
      echo '<tbody>';
      while ($arr = mysqli_fetch_assoc($result3)){
        if($arr['Type'] == 'IC') {
            echo '<tr>';
              echo '<td>';
                  echo $arr['ID'];
              echo '</td>';
              echo '<td>';
                  echo $arr['Name'];
              echo '</td>';
              echo '<td>';
                  echo '<button name="remove-adm" class="remove-adm" value="'.$arr['ID'].'">';
                  echo 'Remove';
                  echo '</button>';
              echo '</td>';
            echo '</tr>';
            }
      }
            echo '<tr>';
            echo '<td colspan="3">';
            echo '<input type="text" name="new-add3" class="form-control new-add new-add3">';
            echo '<button name="add-adm" class="add-adm" value="IC">';
            echo 'Add';
            echo '</button>';
            echo '</td>';
            echo '</tr>';
      echo '</tbody>';
      echo '</table>';
  ?>

<br><br><br>
  
  <?php $result4 = mysqli_query($conn,$sql); ?>
      <br>
  <h4 align="center">Selected Service</h4>
     <?php
        echo '<table border="1" class="table table-bordered table-striped tableforms-adminpanel dropdown-admin">';
        echo '<thead>';
        echo '<tr>';
        echo '<th> ID </th>';
        echo '<th> Name </th>';
        echo '<th> Action </th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($arr = mysqli_fetch_assoc($result4)){
          if($arr['Type'] == 'SS') {
              echo '<tr>';
                echo '<td>';
                    echo $arr['ID'];
                echo '</td>';
                echo '<td>';
                    echo $arr['Name'];
                echo '</td>';
                echo '<td>';
                    echo '<button name="remove-adm" class="remove-adm" value="'.$arr['ID'].'">';
                    echo 'Remove';
                    echo '</button>';
                echo '</td>';
              echo '</tr>';
              }
        }
              echo '<tr>';
              echo '<td colspan="3">';
              echo '<input type="text" name="new-add4" class="form-control new-add new-add4">';
              echo '<button name="add-adm" class="add-adm" value="SS">';
              echo 'Add';
              echo '</button>';
              echo '</td>';
              echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    ?>

<br><br><br>
  
  <?php $result5 = mysqli_query($conn,$sql); ?>
      <br>
  <h4 align="center">Defining Entity</h4>
     <?php
        echo '<table border="1" class="table table-bordered table-striped tableforms-adminpanel dropdown-admin">';
        echo '<thead>';
        echo '<tr>';
        echo '<th> ID </th>';
        echo '<th> Name </th>';
        echo '<th> Action </th>';
        echo '</tr>';
        echo '</thead>';
        echo '<tbody>';
        while ($arr = mysqli_fetch_assoc($result5)){
          if($arr['Type'] == 'DE') {
              echo '<tr>';
                echo '<td>';
                    echo $arr['ID'];
                echo '</td>';
                echo '<td>';
                    echo $arr['Name'];
                echo '</td>';
                echo '<td>';
                    echo '<button name="remove-adm" class="remove-adm" value="'.$arr['ID'].'">';
                    echo 'Remove';
                    echo '</button>';
                echo '</td>';
              echo '</tr>';
              }
        }
              echo '<tr>';
              echo '<td colspan="3">';
              echo '<input type="text" name="new-add5" class="form-control new-add new-add5">';
              echo '<button name="add-adm" class="add-adm" value="DE">';
              echo 'Add';
              echo '</button>';
              echo '</td>';
              echo '</tr>';
        echo '</tbody>';
        echo '</table>';
    ?>


</div>

<!-- ADD DEFINING ENTITY COLUMN IN DB + ACTIONS OF ADD -->
<!--  -->



<?php
if (isset($_POST["action"])){
            if ($_POST["action"] == "remove-from-db-dropdownform"){
                $id = $_POST["id"];
                $sqldelete = "DELETE FROM dropdown_form WHERE ID='$id'";
                $resdelete = mysqli_query($conn,$sqldelete);
                if ($resdelete){
                    echo '<script>alert("Product successfully deleted.")</script>';
                }
            }
            if ($_POST["action"] == "add-to-db-dropdownform"){
                $type = $_POST["type"];
                $name = $_POST["name"];
                $sqladd = "INSERT INTO dropdown_form(`Type`, `Name`) VALUES ('$type','$name')";
                $resadd = mysqli_query($conn,$sqladd);
                if ($resadd){
                    echo '<script>alert("Product successfully deleted.")</script>';
                }
            }
       
       
        }

?>

<script>
$(".remove-adm").click(function(){
             var action = 'remove-from-db-dropdownform';
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

$(".add-adm").click(function(){
    var action = 'add-to-db-dropdownform';
    var type = $(this).attr("value");
    if (type == 'CP'){
        var name = $(".new-add1").val();
    } else if(type == 'RT'){
        var name = $(".new-add2").val();
    } else if(type == 'IC'){
        var name = $(".new-add3").val();
    } else if (type == 'SS'){
        var name = $(".new-add4").val();
    } else if (type == 'DE'){
        var name = $(".new-add5").val();
    }
    
    if(confirm("Are you sure you want to add this line to the databse for ever ?"))
    {
        $.ajax({
            url:"index.php",
            method:"POST",
            data:{'type':type, 'name':name, 'action':action},
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

<?php  // } ?>

</body>
</html>
