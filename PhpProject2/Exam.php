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
        <link href="exam.css" rel="stylesheet" type="text/css" >
            </head>
    <body>
        <?php
        require 'examconnect.php';
        ?>
        
        <nav>  <div class="container">
                        
  <a href="#home" class="a">Home</a>
  <a href="#news" class="a">Registraion</a>
  <div class="dropdown">
    <button class="dropbtn">Exams</button>
    <div class="dropdown-content">
    <div class="exam">
    	<div class="engg">
        	<h1>Engineering Exam</h1><br>
                <a href="register.php">SEMJEE</a>
        	<a href="#">KIITEE</a>
            <a href="#">VITEEE</a>
        </div>
       
      </div>
    </div>
  </div> 
  
  <div class="login" style="float:right" ><a href="#"  class="btn" >LOG IN</a></div>
</div>
	</nav> 
        <div class="exam1">
            <form method="POST">
                <?php
                    $sql = "SELECT * FROM `qs`";
                    $qry = mysqli_query($conn, $sql);
                    while ($row = mysqli_fetch_assoc($qry)){
                        echo 'Q'.$row['id'].":".$row['questions'];
                    }
                ?>
                
            </form>
        </div>
    </body>
</html>
