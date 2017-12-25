<?php
        // put your code here
        include '../resources/Connection.php';
        $sql  = "SELECT * FROM `verbal questions`";
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
        <title>Logical Reasoning</title>
        <style>
            body{
                background-image: url('../images/background-2850091_1920.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }
                       .qs_outer{
                margin-top: 5%;
                background-color:rgba(0, 255, 0,0.7);
                font-size: 18px;
                color: white;
                border-radius: 7px;
                border: 2px solid  #008000;
                box-shadow: 2px 2px 6px 4px #A1B3BA;
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
    </head>
    <body>
        <div class="container-fluid">
            <div class="row" style="background: rgba(0, 230, 0,0.6);">
                <?php  
                include '../shared/navbar.php';
                ?>
            </div>
             <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-3"></div> 
                <div class="col-md-6 col-sm-6 col-xs-6">
                     <?php while ($row = mysqli_fetch_assoc($qry)){ ?>
                    <div class="col-md-12 col-sm-12 col-xs-12 qs_outer ">
                        <br/>
                         
                        <div class="row " style=" border-bottom: 2px solid  #003d4d">
                            <div class="col-md-1 col-sm-1 col-xs-1">Q<?php echo $row['id']; ?>.</div>
                            <div class="col-md-11 col-sm-11 col-xs-11"> 
                                 <?php echo $row['Question']; ?>
                            </div>
                        </div>
                        <br/>
                        <div class="row "  >
                            <div class="col-md-12 col-sm-12 col-xs-12">A. <?php echo $row['1st Choice']; ?></div>
                            
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
                    </div>
                   
                     
                    <?php } ?>
                </div>
                 <div class="col-md-3 col-sm-3 col-xs-3"></div> 
            </div>
        </div>
    </body>
</html>
