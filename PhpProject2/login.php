 
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
        <link href="login.css" rel="stylesheet" type="text/css" />
    </head>
    <body style="margin: 0px;">
        <?php
        ob_start();
         session_start();
         if(isset($_SESSION['email'])){
             echo 'you are logged in';
             header('location:welcome1.php');
         }
         
       // $current_file = $_SERVER['SCRIPT_NAME'];
        require './connect.php';
        if(isset($_POST['pass1']) && isset($_POST['mail1'])){
            
             $mail = $_POST['mail1'] ;
            $pass = $_POST['pass1'] ;
            $invalid ="";
            $mailerr="";
            $passerr="";
            if(!empty($mail ) && !empty($pass)){
                $select_db = "SELECT `email` FROM `details` WHERE `email`='$mail' AND `password`='$pass'";
                 if($query_run = mysqli_query($conn, $select_db)){
                     $query_run_rows = mysqli_num_rows($query_run);
                if ($query_run_rows == 0){
                    $invalid = "INVALID CREDENTIALS";
                } else  {
                   
 				$data = mysqli_fetch_assoc($query_run);
				
				$_SESSION['email']=$data;
                                header('location:welcome1.php');
                }						
            }
            }elseif (empty($mail ) && empty ($pass) ) {
                 $mailerr = "PLEASE ENTER MAIL ID";
                $passerr ="PLEASE  ENTER PASSWORD";
            } 
               // $passerr ="PLEASE  ENTER PASSWORD";
        
    
        
    }
            
                    
        
            
        
        ?>
        <div class="mbody">
  		<nav><div class="container">
                        
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
  <div class="mbody2">
      <h1> WELCOME TO LOGIN</h1>
    </div>
            <div class="logdiv" style="width: 700px;
	height:400px;
	border:1px solid;
	 background:white;
	 -webkit-background:linear-gradient(to bottom , #848484 , #FFF );
	border-radius:7px;
	box-shadow:3px 3px 3px grey;
         margin-left: 25%;
        float:  left;
	 ">
  
 <form method="post">
  <p align="center"> <button class="reg"> Register Here</button> </p>
    
   
	 
  <p class="email" >Your mail id :</p><p><input type="text" class="e" name="mail1"></p> <p class="err"><?php if (isset($mailerr)){echo $mailerr;} ?></p> 
    
    
    <p class="password1" style="color: crimson;
            margin-left: 300px; ">Enter your password :</p><p><input type="password" style="margin-left:270px;
            border-top-style:none; 
            border-left-style:none;
            border-right-style:none;
            border-bottom-left-radius: 7px;
            border-bottom-right-radius: 7px;
            border-bottom-color: goldenrod;
            background-color: transparent;
            width: 180px;
            text-align: center;" class="p" name="pass1"></p> <p><?php if (isset($passerr)){echo $passerr;} ?> </p> 
    <p class="invalid"><?php if(isset($invalid)){echo $invalid; } ?> </p>
    
    <input type="submit" value="LogIN" class="sub " style="margin-left: 320px" > 
 </form>
  </div>
        </div>
  
    </body>
</html>
