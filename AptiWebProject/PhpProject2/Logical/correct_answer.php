<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../resources/Connection.php';
$qid = filter_input(INPUT_GET, 'id');
$sql = "SELECT * FROM `logical questions` WHERE `id` = $qid";
$qry = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($qry)){
    echo $row['Correct Answer'];
}