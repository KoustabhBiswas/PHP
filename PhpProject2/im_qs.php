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
        <link href="im_qs.css" rel="stylesheet" type="text/css">
        <style>
            

        </style>
            
    </head>
    <body>
        <?php
        // put your code here
        session_start();
         $log="";
             if (!isset($_SESSION['a_name'])){
header('location:admin.php'); 
        
    } else {
        
         $log = 'WELCOME ' . implode($_SESSION['a_name']);
        
    }
        ?>
        <div class="maindiv">
            <div class="header">
                <h1>Insert Qustions Here</h1>
            </div>
            <div class="logmaindiv">
                <div class="logdiv" style="margin-top: 7%;border: 0px solid;width: 180px;"><?php echo 'logged in as <br>'.implode($_SESSION['a_name']); ?></div>
                <div style="border: 0px solid;width: 60px;height: 20px; margin-top: 6%;margin-left: 72%;"><a href="adminlogout.php" class="logout">Log Out</a></div>
            </div>
        </div>    
        
        
             <div class="body1">
                 <div class="insert"><a href="qs.php">Enter C questions </a></div>
                 <div class="update"><a href="html_qs.php">Enter HTML questions </a></div>
            <div class="delete"><a href="java_qs.php">Enter Java questions </a></div>
            <div class="qs"><a href="php_qs.php">Enter PHP questions</a></div>
        </div>
        
    </body>
</html>
