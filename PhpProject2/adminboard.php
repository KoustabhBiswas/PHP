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
        <link href="adminboard.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
         session_start();
         $log="";
             if (!isset($_SESSION['a_name'])){
header('location:admin.php'); 
        
    } else {
        
         $log = 'WELCOME ' . implode($_SESSION['a_name']);
        
    }
     
    ?>      
        
        <div class="container">
            <div class="header">
            <h1>Admin Dashboard</h1>
            </div>
            <div class="header1">
                <div class="loggedin"><?php if(isset($log)){
     echo $log;
                } ?> </div>
                <div class="loggedin1"><p>  <a href="adminlogout.php">Logout</a> </p></div>
            </div>
        </div>
        <div class="body1">
            <div class="insert"><a href="#">Insert Student Details</a></div>
            <div class="update"><a href="#">Update Student Details</a></div>
            <div class="delete"><a href="#">Delete Student Details</a></div>
            <div class="qs"><a href="im_qs.php">Enter Qustion</a></div>
        </div>
    </body>
</html>
