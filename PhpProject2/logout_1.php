<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require './welcome1.php';
if(isset($_SESSION['id'])){
     
    session_destroy('login.php');
    header('location:login.php');
}
?>

