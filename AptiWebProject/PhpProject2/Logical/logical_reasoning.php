<?php
        // put your code here
        include '../resources/Connection.php';
        if(!isset($_GET['page'])){
            $page = 1;
        }else{
            $page = filter_input(INPUT_GET, "page");
        }
        $result_per_page = 1;
        $index = ($page - 1) * $result_per_page;
        $sql  = "SELECT * FROM `logical questions` limit $index , $result_per_page";
        $qry = mysqli_query($conn, $sql);
         
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Logical Reasoning</title>
        <script type="text/javascript">
        
            //var c = document.getElementById("view").innerHTML;
             //$(document).ready(function(){
               //  $("button").click(function(){
                 //    $(".view_element").toggle();
        //});
        
   // function display(){
   //     document.getElementsByClassName("view_element").style.color = "red";
   // }
        
        </script>
        <style>
            body{
                background-image: url('../images/startup-593327_1920.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
            button{
                background: rgba(0,0,0,0.5);
            }
           /* :target{
                display: none;
            }*/
                       .qs_outer{
                margin-top: 5%;
                background-color:rgba(0, 163, 204,0.7);
                font-size: 18px;
                color: white;
                border-radius: 7px;
                border: 2px solid  #003d4d;
                box-shadow: 2px 2px 6px 4px #A1B3BA;
                height: auto;
            }
            .test:hover p{
                color: red;
            }
            .test{
                position: absolute;
            }
           /* @media screen and (min-width: 788px) and (max-width: 1190px){
                .qs_outer{
                    font-size: 18px;
                }
            }
            @media screen and   (min-width: 720px) and (max-width: 788px){
                .qs_outer{
                    font-size: 10px;
                }
            }*/
           @media only screen and (min-width: 600px){
               .qs_outer{
                   font-size: 12px;
               }
           }
           @media only screen and (min-width: 768px){
               .qs_outer{
                   font-size: 18px;
               }
           }
           @media only screen and (max-width: 600px) {
               .qs_outer{
                   font-size: 10px;
               }
}
        </style>
        <script type="text/javascript">
            function load(str){
                xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function(){
                    if(xmlhttp.readyState === 4 && xmlhttp.status === 200){
                        document.getElementById('answer').innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open("GET" , "./correct_answer2.php?id="+ str , true);
                xmlhttp.send();
            }
        </script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="background: rgba(0, 184, 230,0.6);">
                <?php  
                include '../shared/navbar.php';
                ?>
            </div>
             <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3"></div> 
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <!-- Fetch Code from Database -->
                     <?php while ($row = mysqli_fetch_assoc($qry)){ ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 qs_outer ">
                        <br/>
                         
                        <div class="row " style=" border-bottom: 2px solid  #003d4d">
                            <div class="col-md-1 col-sm-1 col-xs-1">Q<?php echo $row['id']; ?>.</div>
                            <div class="col-md-11 col-sm-11 col-xs-11 test"> 
                                 <?php echo $row['Question']; ?>
                            </div>
                        </div>
                        <br/>
                        <div class="row "  >
                            <div class="col-md-12 col-sm-12 col-xs-12 test1">A. <?php echo $row['1st Choice']; ?></div>
                            
                        </div>
                        
                        <div class="row "    >
                            <div class="col-md-12 col-sm-12 col-xs-12">B. <?php echo $row['2nd Choice']; ?></div>
                             
                        </div>
                        
                        <div class="row " >
                            <div class="col-md-12 col-sm-12 col-xs-12">C. <?php echo $row['3rd Choice']; ?></div>
                             
                        </div>
                        
                        <div class="row " >
                            <div class="col-md-12 col-sm-12 col-xs-12">D. <?php echo $row['4th Choice']; ?></div>
                             
                        </div>
                        <div class="row " style="margin-top: 3%; color: white;" >
                            <h4>Correct Answer:</h4>
                            <div class="col-md-12 col-sm-12 col-xs-12"> <?php echo $row['Correct Answer']; ?></div>
                             
                        </div>
                          
                     <!--   <div class="row ">
                            <div class="col-md-12 col-sm-12 col-xs-12 dropdown">
                                <button  class="btn dropdown-toggle" type="button" data-toggle="dropdown" 
                                           >View Answer
                            <span class="caret"></span></button>
                            
                            
                         <div class="dropdown-menu col-md-12 col-sm-12 col-xs-12 test" style="margin-bottom: 5%;background:rgba(0, 163, 204,1);
                                                                                            ">
                                <p style="color:black; "><?php  ?></p>
                            </div> 
                           <div class=" col-md-12 col-sm-12 col-xs-12 " >
                               <!--<p style="color:black;" id="answer"></p> 
                            </div>
                            </div>
    <ul class="dropdown-menu">
       
        <li style="color:black;"> </li>
    </ul>-->
   
  
                           
   
                    </div>
                   
                     
                    <?php } ?>
                     <div class="row " >
                         <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php 
                        $sql_rows = "SELECT * FROM `logical questions`";
                        $qry_rows = mysqli_query($conn, $sql_rows);
                        $total_results = mysqli_num_rows($qry_rows);
                        $no_of_pages = ceil($total_results / $result_per_page);
                         
                    ?>
                    <?php
                    
                     if($page >1){
                                   ?>
                    <a href="logical_reasoning.php?page=<?php echo ($_GET['page'] - 1); ?>" class="btn btn-info" style="margin-top: 3%;margin-bottom: 4%;"  >Previous</a>
                    <?php
                     } else{      
                    ?>   
                     <a href="javascript:void(0)" class="btn btn-info" style="margin-top: 3%;margin-bottom: 4%;cursor: not-allowed"  >Previous</a>
                     <?php } ?>
                     <?php
                      
                     if($page > 0 && $page < $no_of_pages && isset($_GET['page']) ){
                                   ?>
                    <a href="logical_reasoning.php?page=<?php echo ($page + 1); ?>" class="btn btn-info" style="margin-top: 3%;margin-bottom: 4%;" <?php if($page == $no_of_pages){echo 'disabled';} ?>>Next</a>
                    <?php
                     }else if(!isset($_GET['page'])){
                         $page1 = 1;
                    ?>  
                    <a href="logical_reasoning.php?page=<?php echo ($page1 + 0); ?>" class="btn btn-info" style="margin-top: 3%;margin-bottom: 4%;"<?php if($page == $no_of_pages){echo 'disabled';} ?>>Next</a>
                     <?php 
                     
                     }
                     if($page == $no_of_pages){?>
                     <a href="javascript:void(0)" class="btn btn-info" style="margin-top: 3%;margin-bottom: 4%;cursor: not-allowed; background: rgba(0,0,0,0.6)"  >Next</a>
                    <?php
                     }
                     ?>
                         </div>
                     </div>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-3"></div> 
            </div>
        </div>
    </body>
</html>
