<?php
include '../resources/Connection.php';
$qid = filter_input(INPUT_GET, 'id');
$sql = "SELECT * FROM `logical questions` WHERE `id` = $qid";
$qry = mysqli_query($conn, $sql);

?>
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
        // put your code here
        while($row = mysqli_fetch_assoc($qry)){
    //echo 

            ?>
        <p><?php echo $row['Correct Answer']; ?></p>
        <?php
        }
        ?>
    </body>
</html>
