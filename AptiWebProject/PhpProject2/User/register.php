<?php 
         require '../resources/Connection.php';
    if(isset($_POST['name']) && isset($_POST['emailreg']) && isset($_POST['password']) && isset($_POST['address']) && isset($_POST['fon_no'])){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['emailreg']);
    $pass = $_POST['password'];
    $addr = $_POST['address'];
    $fon_no = $_POST['fon_no'];
    $name_err="";
    $email_err="";
     $email_exist_err="";
    $pass_err= "";
    $addr_err ="";
    $fon_no_err= "";
    unset($_POST['emailreg']);
    if(!empty($name) && !empty($email) && !empty($pass) && !empty($addr) && !empty($fon_no)){
        $sql = "INSERT INTO `User`(`Name`, `Email`, `Password`, `Address`, `Phone NO`) 
                VALUES ('$name','$email','$pass','$addr','$fon_no')";
        $sql_select = "SELECT * FROM `User` WHERE Email = '$email'";
        if(filter_var($fon_no, FILTER_SANITIZE_NUMBER_INT) && filter_var($email, FILTER_VALIDATE_EMAIL)){
            $qry = mysqli_query($conn, $sql_select);
            if(mysqli_num_rows($qry) == 0){
                $qry_insert = mysqli_query($conn, $sql);
                 header("location: ../index.php");
            }else{
                $email_exist_err = "Email id already exists";
            }
            
           
        }else{
            unset($_POST['emailreg']);
            $email_err="enter valid email id";
            $fon_no_err="enter valid phone number";
        
        } 
         
        
    }else{
        $name_err="Name can not be empty";
        
        $email_err="can't be empty";
        $pass_err = "Password can not be empty";
        $addr_err= "Address can not be empty";
            $fon_no_err="can't be empty";
    }
    
}
    

?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
   
<style>
  input[type="password"] {
    background-color: rgba(0,0,0,-1);
	border-top: 0px;
	border-left: 0px;
	border-right: 0px;
	color: white;
	text-align: center;
	font-family:Atma;
	font-size:20px;
}
</style>
<script type="text/javascript">
    function test(){
        //var name = document.getElementById("name").value;
        var username=document.forms["registration"]["name"].value;
        var email=document.forms["registration"]["emailreg"].value;
        var password=document.forms["registration"]["password"].value;
        var fonno=document.forms["registration"]["fon_no"].value;
        var addr=document.forms["registration"]["address"].value;
      //var addr = document.getElementById("address").value;
         if(username === "" && email ==="" && password === "" && fonno ==="" && addr === ""){
            
             alert("Invalid");
            document.getElementById("err").innerHTML = "enter your name";
            document.getElementById("emailErr").innerHTML = "Enter your email";
              document.getElementById("passErr").innerHTML = "Enter your password";
           // document.getElementById("addrErr").innerHTML = "enter your address";
              document.getElementById("fonErr").innerHTML = "enter your phone number";
              document.getElementById("addrErr").innerHTML = "enter your address";
            return false;
          
        } 
        else if(email ===  ""){
            document.getElementById("emailErr").innerHTML = "Enter your email";
            return false;
        } 
          if( password ==  ""){
            document.getElementById("passErr").innerHTML = "Enter your password";
            return false;
        } 
         if(fonno ==  ""){
            //alert("Invalid");
            document.getElementById("fonErr").innerHTML = "enter your phone number";
            return false;
        } 
         if(addr ==  ""){
             alert("Invalid");
            document.getElementById("addrErr").innerHTML = "enter your address";
            return false;
        }  
        /*if(addr == ""){
            document.getElementById("addrErr").innerHTML = "enter your address";
            return false;
            
        }else{
            return true;
        }*/
    }
</script>
</head>
<body  style="margin:0%;">
	 

<div class="container-fluid">
   
    <?php include '../shared/navbar.php'; ?>
	 <div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 mainDiv">
                    <form class="col-md-6 col-sm-6 col-xs-6 form" action="register.php" method="post" name="registration" onsubmit="return test();">
				<div class="form-group form-content"  >
					<label>Enter name:</label>
                                        <input type="text" class="form-control" id="name" name="name" value="<?php if(isset($_POST['name'])){echo $_POST['name'];}?>"/>
                                        <p style="color:white;"><?php if(isset($name_err)){echo $name_err;} ?></p>
                                        <!--<span id="err" style="color:white;" ></span>-->
				</div>
				
				<div class="form-group form-content">
					<label>Enter email:</label>
                                        <input type="text" class="form-control" name="emailreg" value="<?php if(isset($_POST['emailreg'])){echo $_POST['email'];}?>"/>
                                        <p style="color:red;"><?php if(isset($email_err)){    echo $email_err;} ?></p>
                                        <p style="color:red;"><?php if(isset($email_exist_err)){    echo $email_exist_err;} ?></p>
                                        <span id="emailErr" style="color:white;" ></span>
				</div>
                                
                                <div class="form-group form-content">
					<label>Enter Password:</label>
                                        <input type="password" class="form-control" name="password" >
                                        <p style="color:red;"><?php if(isset($pass_err)){    echo $pass_err;} ?></p>
                                         <!--<span id="passErr" style="color:white;" ></span>     -->                                 
				</div>
				
				<div class="form-group form-content">
					<label>Enter address:</label>
                                        <input type="text" class="form-control" name="address" value="<?php if(isset($_POST['address'])){echo $_POST['address'];}?>"/>
                                         <p style="color:red;"><?php if(isset($addr_err)){    echo $addr_err;} ?></p>
                                        <span id="addrErr" style="color:white;" ></span>
				</div>
				
				<div class="form-group form-content">
					<label>Enter phone number:</label>
                                        <input type="text" class="form-control"  name="fon_no" value="<?php if(isset($_POST['fon_no'])){echo $_POST['fon_no'];}?>"/>
                                       <span id="fonErr" style="color:white;" ></span>
				</div>
                            <input type="submit" value="Register" class="registerbtn" name="submit"/>
			</form>
		</div>
	</div>
</div>
    
     <link rel="stylesheet" href="../css/AptiHome.css" />
    <link rel="stylesheet" href="../css/register.css" />
</body>
</html> 