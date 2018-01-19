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
<title>Apti Practice</title>
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
body{
     background-image: url('images/macbook-2600651.jpg');
    background-position: inherit;
    background-repeat: no-repeat;
   background-size: cover;
    background-attachment:fixed;
}
.prac_test{
	font-size: 44px;
	color: #ffffff;
	/*margin-left: 15%;*/
        text-align: center;
   }
   .give_test{
       font-size: 44px;
	color: #ffffff;
	margin-left: 35%;
        text-align: center;
   }
   .give_test:hover{
       color:rgb(0, 163, 204);
   }
   .body_h1{
       font-size: 33px;
       color: white;
   }
   .body_p{
       font-size: 20px;
       color: white;
   }
   
   .body_main{
       background-color: rgba(255, 117, 26,0.7);
   }
   .learn{
       float: left;
       text-align: center;
       font-size: 20px;
        
       margin-top: 5%; 
       margin-left: 30%;
       border: 3px solid   #662900;
       -o-border:3px solid;
      -webkit-border: 3px dashed ;
       border-radius: 5px;
       background-color: rgba(204, 82, 0,0.8); 
   }
   .learn:hover{
       background-color: rgba(0, 143, 179,0.7);
       border-color: rgb(0, 61, 77);
   }
   span{
       color: white;
   }
   .taketest{
       float: left;
       text-align: center;
       font-size: 20px;
       margin-top: 5%; 
       margin-left: 30%;
       border: 3px solid   #662900;
       -o-border:3px solid;
      -webkit-border: 3px dashed ;
       border-radius: 5px;
       background-color: rgba(204, 82, 0,0.8); 
   }
   .taketest:hover{
       background-color: rgba(0, 143, 179,0.7);
       border-color: rgb(0, 61, 77);
   }
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
			font-size: 12.7px; 
			margin-left:1%;
		}
		.rightnav a{
			 padding: 14px 3px;
			color: white;
			font-size: 12.7px; 
		}
                .prac_test{
                    font-size: 44px;
                }
                .give_test{
                    font-size: 44px;
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
                 .prac_test{
                    font-size: 22px;
                }
                .give_test{
                    font-size: 22px;
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
                 .prac_test{
                    font-size: 22px;
                }
                .give_test{
                    font-size: 22px;
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
 
 
   <div class="row" style="  background: rgba(255, 117, 26,0.7);">
	<div class="col-md-12 col-sm-12 col-xs-12  " >
		<div class="col-md-7 col-sm-7 col-xs-7 leftnav">
                    <a href="./index.php">APTITUDE</a>
                        <a href="./Logical/logical_reasoning.php">Logical Reasoning</a>
                        <a href="./Verbal/verbal_reasoning.php">Verbal Reasoning</a>
                        <a href="./Quantitive/quant.php">Quantitive Aptitude</a>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-3 rightnav">
                    <a href="./Admin/admin.php">Admin LogIn</a>
                    <!--<a href="./User/register.php">Register</a>-->
			 
		</div>
		<div class="responsive" ><button type="button" id="id1"  >&#9776;</button></div>
		
	</div>
	<div id="id2" class="col-md-12 col-sm-12 col-xs-12 responsive_nav" style="display: none;">
            <a href="./Logical/logical_reasoning.php">Logical Reasoning</a>
            <a href="./Verbal/verbal_reasoning.php" >Verbal Reasoning</a>
            <a href="./Quantitive/quant.php">Quantitive Aptitude</a>
            <a href="./Admin/admin.php">Admin LogIn</a>
                        
	</div>
 </div>
 <!-- nav bar ends  demo take_test-->
 <div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: rgba(255, 117, 26,0.7); height: 300px auto;">
		  
			<p class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prac_test">Learn & Practice Aptitude Questions</p>
			<!--<a href="#" class="try_test_btn"> Try Test For Free</a>-->
                        <a href="#" class="give_test"> Give Test for free </a>
		
	</div>
 </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <div class="row body_main">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" ">
             <div class="row">
                 <a href="./Logical/logical_reasoning.php" class="col-lg-4 col-md-4 col-sm-4 col-xs-4   learn" style=" "><span>Learn</span></a>
             </div>
             <div class="row">
                 <a href="#" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 taketest" style=" "><span>Take a Test</span></a>
        
             </div>
         </div>    
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" ">
             <h1 class="body_h1"  >Logical Reasoning</h1>
             <p class="body_p"  >Logical Reasoning questions and answers with explanation for interview, 
                 competitive examination and entrance test. Fully solved examples with 
                 detailed answer description, explanation are given and it would be easy to understand</p>
         </div>
         
     </div>
 </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <div class="row body_main">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" ">
             <h3 class="body_h1">Verbal Reasoning</h3>
             <p class="body_p">Verbal reasoning is understanding and reasoning using concepts framed in words.
                 It aims at evaluating ability to think constructively, rather than at simple fluency
                 or vocabulary recognition.</p>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" ">
             <div class="row">
                 <a href="./Verbal/verbal_reasoning.php" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 learn"  ><span>Learn</span></a>
             </div>
             <div class="row">
                 <a href="#" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 taketest"  ><span>Take a Test</span></a>
        
             </div>
         </div>
     </div>
 </div>
 <br/>
 <br/>
 <br/>
 <br/>
 <div class="row body_main">
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" ">
             <div class="row">
                 <a href="./Quantitive/quant.php" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 learn"  ><span>Learn</span></a>
             </div>
             <div class="row">
                 <a href="#" class="col-lg-4 col-md-4 col-sm-4 col-xs-4 taketest"  ><span>Take a Test</span></a>
        
             </div>
         </div>
         <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" ">
             <h3 class="body_h1">Quantitive Aptitude</h3>
             <p class="body_p">Quantitative Aptitude is one of the scoring subject, as it involves
                 questions purely of numerical calculations relates to problems like
                 arithmetic, graph and table reading, percentage analysis, categorization,
                 quantitative analysis and more.</p>
         </div>
         
     </div>
 </div>
 
	<!--<div class="col-md-12 col-sm-12 shortcut_navbar">
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
	
 </div>-->
 
 
 
 
 </div>
    <link rel="stylesheet" href="./css/AptiHome.css" />
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
</body>
</html>