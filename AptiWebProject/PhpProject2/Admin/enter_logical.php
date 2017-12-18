<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../resources/Connection.php';
 if(isset($_POST['qs']) && isset($_POST['c1'])&& 
        isset($_POST['c2'])&& isset($_POST['c3'])&& 
                isset($_POST['c4'])&& isset($_POST['correct'])){
    
   $qs= $_POST['qs'];
    $c1=$_POST['c1'];
   $c2= $_POST['c2'] ;
    $c3 = $_POST['c3'] ;
    $c4 = $_POST['c4']  ;
   $correct =  $_POST['correct']  ;
    
    $sql = "INSERT INTO `logical questions`(`Question`, `1st Choice`, `2nd Choice`, `3rd Choice`, `4th Choice`, `Correct Answer`) VALUES ('$qs','$c1','$c2','$c3','$c4','$correct')";
    $qry = mysqli_query($conn, $sql);
    if($qry){
        header('location: ../Admin/enter_logical_reasoning_qs.php');
    }
    
} 

/*$data = json_decode(file_get_contents("php://input"));
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json; charset=UTF-8");
if(count($data) >0){
    $firstname = mysqli_real_escape_string($data->firstname);
    $lastname = mysqli_real_escape_string($data->lastname);
    $sql= "INSERT INTO `logical questions`(`Question`, `1st Choice`) VALUES ('$firstname','$lastname')";
    if (mysqli_query($conn, $sql)){
        echo 'data inserted';
    }
}

