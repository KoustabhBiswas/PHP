  <?php 
   
  include './require_admin.php'; 

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
   <meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="C:/Users/Koustabh/Desktop/AptiProject/Blog.css" >
   <link rel="stylesheet" href="C:/Users/Koustabh/Desktop/AptiProject/animate.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
		.common{
			top:60px; 
			border:0px solid;
			margin-left:7%;
			padding:10px 20px;
			margin-top:2%;
		}
		.question{
			border:2px solid #98CA32;
			border-radius:7px;
			text-align:center;
			color:white;
			padding:7px 20px;
			background-color: #80ff80;
		
		}
		 .question:hover{
			color: white;
			background-color: #00aaff;
			border:2px solid #20A5D9;
			animation-name: link;
			animation-duration: 1.5s;
			animation-iteration-count: 1;
		}
		/*@keyframes link{
			from{background-color: #80ff80; border:2px solid #98CA32;}
			to{background-color:#9EEA06; border:2px solid  #00aaff;}
		}*/
                .log_out{
                    padding: 7px 25px;
                    background-color: #99BE13;
                    border-radius: 7px;
                    color: whitesmoke;
                }
                .log_out:hover{
                    background-color: #269BC9;
                    color: whitesmoke;
                    
                }
	</style>
</head>
<body>
   
<div class="container-fluid">
	<div class="row">
            <h1 style="margin-left:28%;">Welcome <?php echo $_SESSION["name"]; ?></h1>
            <a href="./logout.php" class="log_out" style="margin-left:40%;">Log Out</a>
            
            <div class="col-xs-12 col-sm-12 col-md-12"  style="margin-top: 0%;">
			 <div class="col-xs-10 col-sm-10 col-md-10 common" >
                             <a href=" " class="col-xs-12 col-sm-12 col-md-12 question" >Enter Logical Reasoning Questions</a>
			</div> 
			<div class="col-xs-10 col-sm-10 col-md-10 common">
				<a href="" class="col-xs-12 col-sm-12 col-md-12 question">Enter Verbal Reasoning Questions</a>
			</div>
			 <div class="col-xs-10 col-sm-10 col-md-10 common">
				<a href="" class="col-xs-12 col-sm-12 col-md-12 question">Enter Quantitive Reasoning Questions</a>
			</div>
			
		</div>
	</div>
</div>
</body>
</html>
