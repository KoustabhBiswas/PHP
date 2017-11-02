<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$conn = mysqli_connect('localhost',  'root','');
$select_db = mysqli_select_db($conn, 'question');
if(!$conn && !$select_db){
    echo 'NOT CONNECTED';
}
else{
    echo 'connected';
}
?>