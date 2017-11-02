<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'adminboard.php';
session_start();
if (isset($_SESSION['a_name']))
{
    session_destroy();
    header('location:admin.php');
}
  
?>