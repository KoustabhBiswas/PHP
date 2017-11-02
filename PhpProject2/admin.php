<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="admin.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        ob_start();
        session_start();
         require './adminconnect.php';
        
        
         if (isset($_POST['username1']) && isset($_POST['apass'])){
             $admin_name = $_POST['username1'];
             $admin_pass = $_POST['apass'];
              $select_db = "SELECT `a_name` FROM  `admin1` WHERE `a_name`='$admin_name' AND `a_password`='$admin_pass'";
              if($query_run = mysqli_query( $conn, $select_db)){
                     $query_run_rows = mysqli_num_rows($query_run);
                if ($query_run_rows == 0){
                    echo "INVALID CREDENTIALS";
                } else  {
                   
 				$data = mysqli_fetch_assoc($query_run);
				
				$_SESSION['a_name']=$data;
                                header('location:adminboard.php');
                }						
            }
             }
         
        
        ?>
        <div class="admin">
            <h1>Admin Login</h1>
        </div>
        <div class="form">
            <form method="POST">
                <p style="color: darkred; margin-left: 40%; font-size: 16px;">Your name/mail id :</p>
                <input type="text" name="username1" class="username" placeholder="Enter your name/Email id">
                
                <p style="color: darkred; margin-left: 40%; font-size: 16px;">Your Password :</p>
                <input type="password" name="apass" class="username" placeholder="Enter your password"><br>
                
                <input type="submit" name="submit" class="sub1" value="Log In">
                   
                   
            </form>
        </div>
    </body>
</html>
