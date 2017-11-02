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
        <link href="qs.css" rel="stylesheet" type="text/css">
        <style>
            .logoutdiv {
    float: right;
    width: 60px;
    margin-right:  1%;
   margin-top:  -7%;
   padding-left: 10px;
   padding-right: 10px;
   padding-top: 8px;
   padding-bottom: 8px;
   text-decoration: none;
   border-style: none;
   font-size: 18px;
   text-align: center;
}
a{
    text-decoration: none;
    
}
.logoutdiv:hover {
    background: #0F9;
    border-radius: 5px;
    color: whitesmoke;
}

.selec {
    margin-left: 35%;
}
        </style>
    </head>
    <body>
        <?php
        ob_start();
        session_start();
         require 'qsconnect.php';
        
         if(!isset($_SESSION['a_name'])){
             
             header('location:admin.php');
              
         }
         
         if (isset($_POST['qs']) && isset($_POST['opt1']) && isset($_POST['opt2']) && isset($_POST['opt3']) && isset($_POST['opt4']) && isset($_POST['ans'])){
             $enter_qs = $_POST['qs'];
             $enter_opt1 = $_POST['opt1'];
             $enter_opt2 = $_POST['opt2'];
             $enter_opt3 = $_POST['opt3'];
             $enter_opt4 = $_POST['opt4'];
             $enter_ans = $_POST['ans'];
             $enter_qs_err=$enter_opt1_err=$enter_opt2_err=$enter_opt3_err=$enter_opt4_err=$enter_ans_err="";
                

             if (!empty($enter_qs) && !empty($enter_opt1) && !empty($enter_opt2) && !empty($enter_opt3) && !empty($enter_opt4) && !empty($enter_ans)){
             $ins = "INSERT INTO `qs` (`questions`, `option1`, `option2`, `option3`, `option4`, `answer`) VALUES ('$enter_qs' , '$enter_opt1' , '$enter_opt2' , '$enter_opt3' , '$enter_opt4' , '$enter_ans')";
             $qry = mysqli_query($conn, $ins);
             }
               
         
        
    
                else
                    {
                  $enter_qs_err="Please enter question";
                  $enter_opt1_err="Please enter option";
                  $enter_opt2_err="Please enter option ";
                  $enter_opt3_err="Please enter option";
                  $enter_opt4_err="Please enter option";
                  $enter_ans_err="Please enter option";
             } 
         
         }
         
             
         
        ?>
        <div class="maindiv">
            <div class="header">
                <h1>Insert Qustions Here</h1>
            </div>
            <div class="logmaindiv">
                <div class="logdiv" style="margin-top: 7%;border: 1px solid;width: 180px;"><?php echo 'logged in as <br>'.implode($_SESSION['a_name']); ?></div>
                <div class="logoutdiv"><a href="adminlogout.php" class="logout">Log Out</a></div>
            </div>
        </div>    
        <div class="body1" style=" height: auto;margin-bottom: 2%;">
            <form method="POST">
                 
                    
            
                <p class="st1">Enter Questions :</p><textarea name="qs" class="text"></textarea><p style="margin-left: 25%;color: red;"><?php if(isset($enter_qs_err)){echo $enter_qs_err;} ?></p>
                <p class="st2">Enter Option 1 :</p><textarea name="opt1" class="opt1"></textarea><p  style="margin-left: 25%;color: red;"><?php if(isset($enter_opt1_err)){echo $enter_opt1_err;} ?></p>
                <p class="st3">Enter Option 2 :</p><textarea name="opt2" class="opt2"></textarea><p  style="margin-left: 25%;color: red;"><?php if(isset($enter_opt2_err)){echo $enter_opt2_err;} ?></p>
                <p class="st4">Enter Option 3 :</p><textarea name="opt3" class="opt3"></textarea><p  style="margin-left: 25%;color: red;"><?php if(isset($enter_opt3_err)){echo $enter_opt3_err;} ?></p>
                <p class="st5">Enter Option 4 :</p><textarea name="opt4" class="opt4"></textarea><p  style="margin-left: 25%;color: red;"><?php if(isset($enter_opt4_err)){echo $enter_opt4_err;} ?></p>
                <p class="st6">Enter Answer :</p><textarea name="ans" class="ans"></textarea><p  style="margin-left: 25%;color: red;"><?php if(isset($enter_ans_err)){echo $enter_ans_err;} ?></P>
                <div class="last"><input type="submit" name="submit" class="sub4" value="submit"></div><br/>
                        
                   
                
            </form>
                
        </div>
    </body>
</html>

