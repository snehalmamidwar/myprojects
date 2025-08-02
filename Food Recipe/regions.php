<?php
  session_start(); 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>regions</title>
</head>
    
<style type="text/css">
          
  *{
    margin: 0px;
 }
 

 
 header{
 
 font-family: 'Dokdo', cursive;
 font-size: 30px;
 padding: 20px;
 }
 main{
       margin-left: 120px;
         width: 100%;
         margin-top: 40px;
 }
 .box{
  width: 20%;
  float: left;
  padding: 7px;
  padding-left: 10px;  
  display: block;
 }
 
 img{
  width: 300px;
  height:340px;
 border-radius: 4px;
 object-fit: contain;
 box-shadow: inset;
 }
 #home::before{
    content: "";
    background: url('imgback.webp') no-repeat center center/cover;
    position: absolute;
    margin-top: 25vh;
    margin-left: 5px;
    height: 150%;
    width: 100%;
    z-index: -1;
    opacity: 0.89;
    flex-direction: column;
 }
 img:hover{
   transform: scale(1.3,1.3);
   transition: .3s transform;
 
 }
 
 
 </style>
  <link rel="stylesheet" href="regions.css">
  <link rel="stylesheet" href="background.css">
<body>
    <nav id="navbar">
        <div id="logo">
          <img src="flogo.png" alt="">
        </div>
          <ul>
              <li><a href="home.html">Home</a></li>
              <li><a href="#">About</a></li>
              <li><a href="regions.html">Regions</a></li>
              <li><a href="#">Search</a></li>
              <div class="logout">
                <a href="#">Logout</a>
            </div>      
          </ul>    
      </nav>
           <section id="home">
            <div>
           </section>
          
        
     
    <div class="container">
           
         
         <main>
          <div class="box">
         <a href="maharashtranew.php"><img src="images\maharashtra.jpg"></a></div>
        
         <div class="box">
         <a href="aasam.php"><img src="images/aasam.jpg"></a></div>
         <div class="box">
          <a href="arunachal.php"><img src="images/arunachal pradesh.jpg"></a></div>
         <div class="box">
          <a href="bengol.php"><img src="images/bengol.jpg"></a></div>
         </main>
         <main>
         <div class="box">
          <a href="gujarat.php"><img src="images/gujarat.jpg"></a></div>
         <div class="box">
          <a href="himachal.php"> <img src="images/himachal pradesh.jpg"></a></div>
         <div class="box">
          <a href="kashmir.php"><img src="images/kashamir.jpg"></a></div>
         <div class="box">
          <a href="tamil.php"><img src="images/tamil.jpg"></a></div>
         </main>
         <main>
             
         <div class="box">
          <a href="punjab.php"><img src="images/punjab.jpg"></a></div>
          <!--          <div class="box">
          <a href="ladakh.php"><img src="images/ladakh.jpg"></a></div>
         <div class="box">
          <a href="mp.php"> <img src="images/mp.jpg"></a></div>
             <div class="box">
              <a href="north.php"><img src="images/north.jpg"></a></div>
               </main>
                 <main>
                 <div class="box">
                  <a href="punjab.php"> <img src="images/punjab.jpg"></a></div>
                     <div class="box">
                      <a href="rajsthan.php">  <img src="images/rajsthan.jpg"></a></div>
                         <div class="box">
                          <a href="south.php"><img src="images/south indian.jpg"></a></div>
                             <div class="box">
                              <a href="tamil.php">  <img src="images/tamil.jpg"></a></div>
                       


                              
                                 </main>
                                 <main>
                                 <div class="box">
                                  <a href="up.php"> <img src="images/up.jpg"></a></div>
                                     <div class="box">
                                      <a href="uttarakhand.php"><img src="images/uttarakhand.jpg"></a></div>
                                        -->
                                      
         </main>
         </div>
         
         
         
         </body>
         </html>
