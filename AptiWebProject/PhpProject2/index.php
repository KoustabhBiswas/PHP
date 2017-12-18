<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="./css/AptiHome.css" >
   <link rel="stylesheet" href="./css/navbar.css" >
<style>
 /*
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
*/
/* 
    Created on : Dec 6, 2017, 11:04:37 PM
    Author     : Koustabh
*/

   @font-face{
		font-family: MetalMacabre;
		src: url(MetalMacabre.ttf);
	}
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
	
	 
	.leftnav a:hover{
		background-color: red;
	}
	
	.rightnav a{
		  float: right;
		   
		  display: block;
		  color: white;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
			font-family: MetalMacabre;
		  
		  
		  
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
    $(document).ready(function(){
			$("#id1").click(function(){
				$("#id2").toggle();
			});
		});
</script>
</head>
<body  style="margin:0%;">
 <div class="container-fluid">
 <!-- Nav bar begins-->
 
 
   <div class="row" style="background-color:#00001a">
	<div class="col-md-12 col-sm-12 col-xs-12  " >
		<div class="col-md-7 col-sm-7 col-xs-7 leftnav">
			<a href="">APTITUDE</a>
			<a href="">Logical Reasoning</a>
			<a href="">Verbal Reasoning</a>
			<a href="">Quantitive Aptitude</a>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-3 rightnav">
                    <a href="./User/login.php">Sign In</a>
                    <a href="./User/register.php">Register</a>
			 
		</div>
		<div class="responsive" ><button type="button" id="id1"  >&#9776;</button></div>
		
	</div>
	<div id="id2" class="col-md-12 col-sm-12 col-xs-12 responsive_nav" style="display: none;">
		<a href="">Logical Reasoning</a>
			<a href="#" >Verbal Reasoning</a>
			<a href="">Quantitive Aptitude</a>
                        <a href="./User/login.php">Sign In</a>
                        <a href="./User/register.php">Register</a>
	</div>
 </div>
 <!-- nav bar ends -->
 <div class="row">
	<div class="col-md-12 back_image" >
		 <div class="col-md-6 demo">
			<p class="take_test">Practice Aptitude Tests</p>
			<a href="#" class="btn try_test_btn"> Try Test For Free</a>
		 </div>
		
	</div>
	<div class="col-md-12 col-sm-12 shortcut_navbar">
		<div class="col-md-1 col-sm-1 container_div" >
			<a href="#"><div class="text_div"   ><p style="margin-top: 22%; margin-left:13%;">Logical Reasoning<p></div></a>
			<div class="col-md-1 hover_div">
				
			</div>
		</div>		
		
		<div class="col-md-1 col-sm-1 container_div" >
			<a href="#"><div class="text_div"><p style="margin-top: 22%; margin-left:13%;">Verbal Reasoning<p></div></a>
			<div class="col-md-1 hover_div">
				
			</div>
		</div>	
		 
		<div class="col-md-1 col-sm-1 container_div" >
			<a href="#"><div class="text_div" style="" ><p style="margin-top: 22%; margin-left:13%;">Quantitive Aptitude<p></div></a>
			<div class="col-md-1 hover_div">
				
			</div>
		</div>	
		 
	</div>
	
 </div>
 
 
 
 </div>
    <link rel="stylesheet" href="./css/AptiHome.css" >
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</body>
</html>