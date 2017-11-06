 <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
ob_start();
session_start();


 
include '../resources/Connection.php';

if(isset($_POST['pass']) && isset($_POST['user_name'])){
    $user = $_POST['user_name'];
    $pass = $_POST['pass'];
    $user_err ="";
    $pass_err =  "";
    if (!empty($user) && !empty($pass)){
        $sql= "SELECT * FROM `admin` WHERE admin_name = '$user' and admin_pass = '$pass' ";
        $qry = mysqli_query($conn, $sql);
         
        if(mysqli_num_rows($qry)==0){
           // $_SESSION['admin_name'] = $user1;
   header("location: ../index.php");
        }else {
          // $data= mysqli_fetch_assoc($qry);
            $_SESSION["name"] = $user;
             header("location: ../Admin/Enter_qs.php");
            
        }
    } else {
        $user_err="Please Admin login Id";
    }
}


