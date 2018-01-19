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
        <link href="registration.css" rel="stylesheet" type="text/css" />         
<link href="Form.css" rel="stylesheet" type="text/css" />
 
    </head>
    <body style="margin: 0px;">
        <?php
        require 'connect.php';
         
	 if(isset($_POST['username']) && isset($_POST['mail1']) 
		            && isset($_POST['pass1']) && isset($_POST['fon1']) ){
	 $user_name = $_POST['username'];
	 $Email = $_POST['mail1'];
	 $password = $_POST['pass1'];
	 $Fon_no = $_POST['fon1'];
         $mail_check=$Email;
          
	 $emailerr="";
	 $emailerr3="";
	 $emailerr1=$usererr1=$fonerr1=$passerr1="";
         $check_err="";
	 if(!empty($user_name) && !empty($Email) && !empty($password) && !empty($Fon_no)) {
		 if(filter_var($Email, FILTER_VALIDATE_EMAIL)){
                     $mail_check=$fon_check="SELECT * FROM `details` WHERE `email`='$mail_check'";
                      $ins = "INSERT INTO `details`( `uname`, `email`, `password`, `fon`) VALUES ('$user_name','$Email','$password','$Fon_no')";
                     $qry = mysqli_query($conn, $mail_check);
                     $yes = mysqli_num_rows($qry);
                     if($yes == 1){
                         $check_err = "ALREADY REGISTERED";
                         
                     }else{
	
	             mysqli_query( $conn,$ins);
          
                     header('location:login.php');
                     
                     }
            
        }  
	 
	 else {
		 $emailerr= 'invalid email';
		  
         }
	 } 
	 else{
				$usererr1="cant be empty";
				$emailerr1="cant be empty";
				$fonerr1="cant be empty";
				$passerr1="cant be empty";
					
	 }
	 }
	 
        ?>
        <div class="mbody1" >
   <nav><div class="container">
  <a href="#home" class="a">Home</a>
  <a href="../PhpProject2/register.php" class="a">Registraion</a>
  <div class="dropdown">
    <button class="dropbtn">Exams</button>
    <div class="dropdown-content" >
    <div class="exam">
    	<div class="engg">
        	<h1>Engineering Exam</h1><br>
                <a href="#"> SEMJEE </a>
            <a href="#"> KIITEE </a>
            <a href="#">VITEEE</a>
        </div>
       
      </div>
    </div>
  </div> 
  
  <div class="login" style="float:right" ><a href="../PhpProject2/login.php"  class="btn" >LOG IN</a></div>
</div>
	 </nav>
     <div class="heading">
     	<h1>Register Here and Login To Shedule Your Mock Test</h1>
     
     </div></div>
        
           

<div class="formdiv1" >
	<form   method="post">
    <p align="center"> <button class="reg"> Register Here</button> </p>
    
    <p class="username">Your name :</p>	<p><input type="text" class="user"    name="username" value="<?php if(isset($_POST['username'])) echo $_POST['username'];?>"></p><p><?php if(isset($usererr1)&& empty($user_name)){ echo $usererr1;} ?></p> 
	 
    <p class="email">Your mail id :</p><p><input type="text" class="e" name="mail1" value= "<?php if(isset($_POST['mail1'])) echo $_POST['mail1'];?>" ></p><p><?php if(isset($emailerr)){ echo $emailerr;}   ?></p>
    
    
    <p class="password1">Enter your password :</p><p><input type="password" class="password" name="pass1"></p><p><?php if(isset($passerr1)){ echo $passerr1;}   ?> </p>
    
    
    <p class="cpass">Your phone number :</p><p><input type="text" class="fone" id="ph" name="fon1" value="<?php if(isset($_POST['fon1'])) echo $_POST['fon1'];?>"></p><p><?php if(isset($fonerr1)){ echo $fonerr1;}   ?> </p>
    
    
    <p ><input type="checkbox">I have agreed term and conditions</p>
    
    
    <input type="submit" name="submit" class="sub" value="Register"  >
    <p><?php if(isset($check_err)){echo $check_err;} ?></p>
    

</form>
</div>
    </body>
</html>
