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
        <style>
            .body1 {
    float: left;
    width: 600px;
   
    margin-left: 28%;
    margin-top: 2%;
    background-color: #FFF ;
    
    
}
            
            .sub4 {
    background: aqua;
    color: #333;
    border-radius: 7px;
    padding-left: 20px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-top: 10px;
    box-shadow: 4px 4px 4px grey;
   
}

.sub4:hover {
    background: #0F9;
    box-shadow: 2px 2px 2px grey;
     
}
        </style>
        <script lang="javascript">
        function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "c":
window.location="c_exam.php";
break;

case "html":
window.location="h_exam.php";
break;

case "java":
window.location="j_exam.php";
break;
case "php":
window.location="p_exam.php";
break;

case "HTML":
window.location="../html_tutorial/site_map.php";
break;

/// Can be extended to other different selections of SubCategory //////
default:
window.location="../"; // if no selection matches then redirected to home page
break;
}// end of switch 
}
        </script>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        if (!isset($_SESSION['email'])){
            header('location:login.php');
        }
       
        ?>
         <div class="body1" style=" height: auto;margin-bottom: 2%;">
            
               
                        
                   
                      
        <SELECT id="s1" NAME="section" >
<Option value="">Select Section</option>
<Option value="c">C</option>
<Option value="html">HTML</option>
<Option value="java">Java</option>
<Option value="php">PHP</option>
 
</SELECT>
        <button onclick="SelectRedirect();" class="sub4">Submit</button>
        </div>
    </body>
</html>
