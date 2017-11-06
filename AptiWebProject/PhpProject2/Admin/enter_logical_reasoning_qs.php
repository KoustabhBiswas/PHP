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
	<style>
		.common{
			top:60px; 
			border:0px solid;
			margin-left:7%;
			padding:10px 20px;
			margin-top:2%;
		}
		a{
			border:2px solid #98CA32;
			border-radius:7px;
			text-align:center;
			color:white;
			padding:7px 20px;
			background-color: #80ff80;
		
		}
		a:hover{
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
		.form_text_color{
			color:#FF8629;
		}
		.btn{
			background-color:#23627B;
			color:white;
			margin-left:38%;
			padding:5px 35px;
			box-shadow:2px 2px 6px   grey, 1px 0px 20px grey;
		}
		.btn:hover{
			background-color:#67DB14;
			color:white;
		}
	</style>
</head>
<body>
<div class="container-fluid" >
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12" >
			<form action="" method="POST" class="col-xs-4 col-sm-4 col-md-4" style="margin-left:25%;margin-top:7%;margin-bottom:2%; ">
				<div class="form-group form_text_color">
					<label>Enter Question :</label>
					<textarea class=" form-control" rows="6" cols="10" style="width:400px;"></textarea>
				</div>
				
				<div class="form-group form_text_color">
					<label>Choice 1 :</label>
					<input type="text"  class=" form-control"/>
				</div>
				
				<div class="form-group form_text_color">
					<label>Choice 2 :</label>
					<input type="text" class=" form-control" />
				</div>
				
				<div class="form-group form_text_color">
					<label>Choice 3 :</label>
					<input type="text" class=" form-control" />
				</div>
				
				<div class="form-group form_text_color">
					<label>Choice 4 :</label>
					<input type="text"  class=" form-control"/>
				</div>
				
				<div class="form-group form_text_color">
					<label>Correct Answer :</label>
					<input type="text"  class=" form-control"/>
				</div>
				<input type="submit" value="Submit" class="btn"/>
			</form>
		</div>
	</div>
</div>
</body>
</html>	