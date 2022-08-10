<?php
$page =(isset($_GET['load']) && $_GET['load'] !='') ? $_GET['load'] :'';
?>
<html>
<head>
    <link rel="stylesheet" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="navbar">
  <a href="aboutme.php">About me</a>
  <a href="index.php">Home</a>
  <img src="images/r.jpg">
  <div class="dropdown">
  <button class="dropbtn">Sample Works</button>
  <div class="dropdown-content">
      <li>
    <a class="active" href="http://rexnard.herokuapp.com/CLE1MT/" target="blank">CLE1</a>
    <a class="active" href="https://rexnard.herokuapp.com/LT2/recipe.html" target="blank">LEARNING TASK 2</a>
    <a class="active" href="http://rexnard.herokuapp.com/LT3/" target="blank">LEARNING TASK 3</a>
          <a class="active" href="http://rexnard.herokuapp.com/LT4/" target="blank">LEARNING TASK 4</a>
          <a href="https://github.com/rexnard/Learning-Task/tree/main/LT5">LEARNING TASK 5</a>
      </li>
  </div>
</div>
</div>
<div style="padding:15px 15px 2500px;font-size:30px;margin-top:30px;">

    <div id="container">
    <img src="images/car.gif" width="1248" height="550">
            <div class="centered">
                
                <b>WELCOME TO MY WEBSITE!</b>
            
           
                
            
            </div>
            
             <div class="top-left">This website contains information about my works and my personal information.</div>
              <div class="top-leftt">Riding a race bike is an art - a thing that you do because you feel something inside. <br>
                
        
        
        </div>
              <div class="top-right"><img src="images/rexxxx.jpg" width="200" alt="Avatar"></div>

        <img src="images/orange.gif" width="1248" height="85">
            <div class="bottom-right">
               </div>
            
           
           
           
           
      

         <img src="images/vapor.gif" width="1248" height="550">
            <div id="text-block">
                <br>
            
              
            </div>
        </div>
        
    </div>
  
   
  
    <script type="text/javascript" src="style.js"></script>
    <div id="content">
           <?php 
            switch($page){
                case 'home':
                    include_once 'index.php';
                    break;
               
                case 'profile':
                    include_once 'aboutme.php';
                    break;
            }
        ?>
    </div>
</body>
</html>
