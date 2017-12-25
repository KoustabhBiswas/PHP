<?php
ob_start();
session_start();
include '../resources/Connection.php';
/*if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password)){
        $sql = "SELECT * FROM `user` WHERE email = '$username' AND password = '$password'";
        $qry = mysqli_query($conn, $qry);
        if (mysqli_num_rows($qry) == 0){
              echo 'skjdbf';
            header("location: ../User/login.php");
        }else{
            $_SESSION['email'] = $username;
            header("location: ../index.php");
          
        }
    }
}*/

if(isset($_POST['username']) && isset($_POST['password'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $user_err ="";
    $pass_err =  "";
    if (!empty($user) && !empty($pass)){
        $sql= "SELECT * FROM `admin` WHERE admin_username = '$user' and  
admin_pass = '$pass' ";
        $qry = mysqli_query($conn, $sql);
         
        if(mysqli_num_rows($qry)==0){
             // $_SESSION['admin_name'] = $user1;
            //echo '<script>alert("Invalid");</script>';
            
             header("location: ../index.php");
        }else {
          // $data= mysqli_fetch_assoc($qry);
            $_SESSION["username"] = $user;
             header("location: ../Admin/Enter_qs.php");
            
        }
    } else {
        $user_err="Please Admin login Id";
    }
}



?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="../css/AptiHome.css" >
    </head>
    <body>
        <div class="container-fluid">
        <?php
        // put your code here
        include '../shared/navbar.php';
        ?>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form class="col-md-4 col-sm-4 col-xs-4 form" action="../User/login.php" method="post">
                        <div class="form-group username">
                            <label class="userlabel">Username:<span style="color: red;">*</span></label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group password">
                            <label class="passlabel">Password:<span style="color: red;">*</span></label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <input type="submit" value="Log In" class="btn btn-info"/>
                    </form>
                </div>
                
            </div>
        </div>
        <link href="../css/LoginForm.css" rel="stylesheet"/>
    </body>
</html>
