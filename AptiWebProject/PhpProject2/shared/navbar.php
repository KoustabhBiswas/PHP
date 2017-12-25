<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
      
	.leftnav a{
		  float: left;
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		  border:0px solid red;
	}
	
	 
	.leftnav a:not(:first-child):hover{
		background-color: red;
	}
	
	.rightnav a{
		  float: right;
		   
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 17px;
		  border:0px solid red;
	}
	.rightnav a:hover{
		background-color: red;
	}
	.rightnav{
		margin-left:16%;
	}
	.responsive{
		color: white;
		position: relative;
		display: none;
	}
	.responsive button{
		background: rgba(0,0,0,0.1);
		border-style: none;
	}
	.responsive_nav{display:none;}
	.responsive_nav a{
		
		float:left;
		width: 102.2%;
		 
		margin-left: -1.3%;
		padding: 7px ;
		border-bottom: 0.5px solid grey;
		text-decoration: none;
		color: white;
		 
	}
	.responsive_nav a:hover{
		background-color:  #ebebe0;
		color:black;
	}
	
	 
	@media screen and (min-width: 788px) and (max-width: 1190px){
		.leftnav a{
			 padding: 14px 3px;
			color: white;
			font-size: 12px; 
			margin-left:1%;
		}
		.rightnav a{
			 padding: 14px 3px;
			color: white;
			font-size: 12px; 
			 
			 
		}
	}
	 
	@media screen and   (min-width: 720px) and (max-width: 788px){
		.leftnav a{
			padding: 14px 2px;
			color: white;
			font-size: 11.3px;
			margin-left:1%;
		}
		.rightnav a{
			padding: 14px 2px;
			color: white;
			font-size: 11.3px;
		}
	}
	 
	@media screen and   (max-width: 720px)  {
		.leftnav a:not(:first-child){
			display: none;
		}
		.leftnav a:first-child{
			color: white;
			padding: 14px 16px;
			font-size: 17px;
		}
		.rightnav {
			display: none;
		}
		.responsive{
			display:block;
 			border: 0px solid red;
			padding: 14px 16px;
			float:right;
			font-size:17px;
		}
	}
  </style>
  <script>
	 
		/*if(document.getElementById('id1').style.display == 'none'){
			document.getElementById('id1').style.display = 'block';
		}else{
			document.getElementById('id1').style.display = 'none';
		}*/
		$(document).ready(function(){
			$("#id1").click(function(){
				$("#id2").toggle();
			});
		});
	 
  </script>
</head>
<body>

  
  
 <!--<div class="container-fluid">-->
 
	<div class="col-md-12 col-sm-12 col-xs-12  " >
		<div class="col-md-7 col-sm-7 col-xs-7 leftnav">
                    <a href="../index.php">APTITUDE</a>
                        <a href="../Logical/logical_reasoning.php">Logical Reasoning</a>
                        <a href="../Verbal/verbal_reasoning.php">Verbal Reasoning</a>
                        <a href="../Quantitive/quant.php">Quantitive Aptitude</a>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-3 rightnav">
                    <a href="../User/login.php">Admin LogIn</a>
                   <!-- <a href="../User/register.php">Register</a>-->
			 
		</div>
		<div class="responsive" ><button type="button" id="id1"  >&#9776;</button></div>
		
	</div>
	<div id="id2" class="col-md-12 col-sm-12 col-xs-12 responsive_nav" style="display: none;">
            <a href="../Logical/logical_reasoning.php">Logical Reasoning</a>
            <a href="../Verbal/verbal_reasoning.php" >Verbal Reasoning</a>
            <a href="../Quantitive/quant.php">Quantitive Aptitude</a>
                        <a href="../User/login.php">Admin LogIn</a>
                        
	</div>
 
  
    <link href="./navbar.css" rel="stylesheet"/>
</body>
</html>
