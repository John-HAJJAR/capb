<?php 
$errors= [];
$conn = new mysqli('localhost', 'root', '', 'capb');


//ADMISSION FORM SUBMIT -- PAGE 1
if (isset($_POST['submit-adm-form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $nationality = $_POST['nationality'];
    $linkedin = $_POST['linkedin'];
    $position = $_POST['position'];
    $roletype = $_POST['roletype'];
    $message = $_POST['usermessage'];

    

    if (empty($name) || strlen($name) <= 2 ){
        $errors['Name'] = 'Name is required';
    }
    if (empty($email) ){
// valid_mail($email)
    }
    if (empty($pnumber) || strlen($pnumber) <= 6){

    }
    if (empty($linkedin) || strlen($linkedin) <= 10){

    }
    if (empty($position)){

    }
    if (empty($roletype)){

    }
    if (empty($message)){

    }


    if (count($errors) === 0 ){
        $sql= "INSERT INTO admission_form (FullName, Email, Pnumber, Nationality, Linkedin, Position, Role, Message) 
            VALUES('".$name."','".$email."','".$pnumber."','".$nationality."','".$linkedin."', '".$position."', '".$roletype."', '".$message."')";
         $result = mysqli_query($conn,$sql);
    }    

}

//ENLISTMENT FORM SUBMIT-- PAGE 2
if (isset($_POST['submit-en-form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $invcat = $_POST['investmentcat'];
    $prefTH = $_POST['prefftimeHorz'];
    $occupation = $_POST['currOcc'];
    $linkedin = $_POST['linkedin'];
    $message = $_POST['usermessage'];

    

    if (empty($name) || strlen($name) <= 2 ){
        $errors['Name'] = 'Name is required';
    }
    if (empty($email) ){
// || valid_mail($email)
    }
    if (empty($pnumber) || strlen($pnumber) <= 6){

    }
    if (empty($linkedin) || strlen($linkedin) <= 10){

    }
    if (empty($invcat)){

    }
    if (empty($prefTH)){

    }    
    if (empty($occupation)){

    }
    if (empty($message)){

    }


    if (count($errors) === 0 ){
        $sql= "INSERT INTO enlistment_form (FullName, Email, Pnumber, LinkedIn, InvCat, PreffTH, CurrOcc, Message) 
            VALUES('".$name."','".$email."','".$pnumber."','".$linkedin."','".$invcat."', '".$prefTH."', '".$occupation."', '".$message."')";
         $result = mysqli_query($conn,$sql);
    }    

}



//REQUEST FORM SUBMIT-- PAGE 3
if (isset($_POST['submit-req-form'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pnumber = $_POST['pnumber'];
    $selectedServ = $_POST['selectedServ'];
    $despurpose = $_POST['DesPurpose'];
    $deffentity = $_POST['DeffEntity'];
    $message = $_POST['usermessage'];

    

    if (empty($name) || strlen($name) <= 2 ){
        // $errors['Name'] = 'Name is required';
    }
    if (empty($email) ){
//valid_mail($email)
    }
    if (empty($pnumber) || strlen($pnumber) <= 6){

    }
    if (empty($selectedServ)){

    }
    if (empty($despurpose)){

    }
    if (empty($deffentity)){

    }    
    if (empty($message)){

    }


    if (count($errors) === 0 ){
        $sql= "INSERT INTO request_form (FullName, Email, Pnumber, SelectedService, Des_Purpose, DefiningEnt, Message) 
            VALUES('".$name."','".$email."','".$pnumber."','".$selectedServ."','".$despurpose."', '".$deffentity."', '".$message."')";
         $result = mysqli_query($conn,$sql);
    }    

}










?>