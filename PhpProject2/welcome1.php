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
    </head>
    <body>
        <?php
             
    session_start();
    if (!isset($_SESSION['email'])){
        echo 'you are logged out<a href="login.php">LOG IN</a> '; 
        
    } else {
        
        echo 'WELCOME ' . implode($_SESSION['email']);
        
    }
 
        ?>
    </body>
    <div style="width: 40px; height: 20px; background-color: activecaption;">
        <form  method="POST"><a href="logout.php" name="log" > Log out </a></form>
    </div>
</html>
