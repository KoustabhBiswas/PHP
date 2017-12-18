<?php 
         require '../resources/Connection.php';
    if(isset($_POST['name']) && isset($_POST['emailreg']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['fon_no'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['emailreg']);
    $pass = $_POST['password'];
    $addr = $_POST['address'];
    $fon_no = $_POST['fon_no'];
    $name_err="";
    $email_err="";
    $pass_err= "";
    $addr_err ="";
    $fon_no_err= "";
    unset($_POST['emailreg']);
    if(!empty($name) && !empty($email) && !empty($pass) && !empty($addr) && !empty($fon_no)){
        $sql = "INSERT INTO `User`(`Name`, `Email`, `Password`, `Address`, `Phone NO`) 
                VALUES ('$name','$email','$pass','$addr','$fon_no')";
        if(filter_var($fon_no, FILTER_SANITIZE_NUMBER_INT) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $qry = mysqli_query($conn, $sql);
            
            //header("location: ../index.php");
        }else{
            unset($_POST['emailreg']);
            $email_err="enter valid email id";
            $fon_no_err="enter valid phone number";
        
        } 
         
        
    }else{
        $name_err="Name can not be empty";
        
        $email_err="can't be empty";
        $pass_err = "Password can not be empty";
        $addr_err= "Address can not be empty";
            $fon_no_err="can't be empty";
    }
    
}

