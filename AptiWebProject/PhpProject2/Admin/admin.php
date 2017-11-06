
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="C:/Users/Koustabh/Desktop/AptiProject/Blog.css" >
   <link rel="stylesheet" href="C:/Users/Koustabh/Desktop/AptiProject/animate.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
<div class=" col-md-12" >
    <form action="./admin_redirect.php" method="post" style="margin-left:35%;">
	<h1 style="margin-left:5%;text-shadow:2px 2px 4px grey, 0px -1px 20px grey;color: #80dfff">Admin Login</h1>
	<div class="col-md-5"  style="margin-top:5%;">
		<div class="form-group">
			<label>UserName:</label>
                        <input type="text" class="form-control" name="user_name"/>
                        <span></span>
		</div>
		<div class="form-group">
			<label>Password:</label>
                        <input type="password" class="form-control" name="pass"/>
		</div>
		<input type="submit" value="Log In" style="margin-left:37%;padding:3px 25px;color:white;border-radius:7px;border-style:none;background-color:#80dfff"/>
	</div>
</form>
</div>
</div>
</body>
</html>	