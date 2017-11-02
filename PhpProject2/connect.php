<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $conn = mysqli_connect('localhost','root','');
          if(!$conn){
              echo 'not selcted';
          }
 else {              echo 'selcteddatabase';}
	 $sql = mysqli_select_db($conn, 'user');
          if(!$sql){
              echo 'not connected';
          }
 else {
              echo '<br>connected';
 }


?>

