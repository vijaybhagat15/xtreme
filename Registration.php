<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hpgym";
$message="";
// Create connection
if(count($_POST)>0)
{
$con = mysqli_connect($servername, $username, $password, $dbname) or die('Unable To connect');
$sql="INSERT INTO login_user (Email_Id,Full_Name,password,Age,Gender,Locality,Phon_number)
VALUES ('$_POST[emailid]','$_POST[name]','$_POST[pw]','$_POST[age]','$_POST[gen]','$_POST[loca]','$_POST[phon]')";

if (!mysqli_query($con,$sql))
  {
  die('SQL query error');
  }
else 
$message=" your record added";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>xtreme Fitness</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    /* CSS Reset */
    body {
        font-family: 'Baloo Bhai', cursive;
        color: white;
        margin: 0px;
        padding: 0px;
        background: url('gym_bg.jpg');
    }
    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 60px;
        top: 5px;
    }
    .left img {
        width: 110px;
        
    }
    .left div {
        
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    }
    .mid 
    {
        display: block;
        width: 50%;
        margin: 29px auto;
        /* border: 2px solid green; */
    }
    .right 
    {
       
        display: inline-block;
        position: absolute;
        right: 34px;
        top: 43px;
        display: inline-block;
        /* border: 2px solid yellow; */
    }
    .navbar 
    {
        display: inline-block;
    }

    .navbar li 
    {
        display: inline-block;
        font-size: 15px;
    }
    .navbar li a 
    {
        color: white;
        text-decoration: none;
        padding: 34px 23px;

    }
    .navbar li a:hover,
    .navbar li a.active 
    {
        text-decoration: underline;
        color: rgb(250, 250, 250);

    }
    .btn 
    {
        font-family: 'Baloo Bhai', cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 14px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }
    .btn:hover {
        background-color: rgb(31, 30, 30);
    }
    .container 
    {
        border: 2px solid white;
        margin: 65px 80px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    }
    .form-group input 
    {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        width: 508px;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 25px;
        border-radius: 8px;
    }
    .container h1
    {
        text-align: center;
    }
    .container button
    {
        display: block;
        width: 74%;
        margin: 20px auto;
    }
    .che{
        color: rgb(255, 123, 79);
    }
    .clock
    {
       
        font-size: 30px;
        color: rad;
    }
    #skip
    {
        right: 5px;

    }
   
</style>
<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <div>
            <img src="xtreme.jpeg" alt="">
            </div>
            <div >
                Xtreme Fitness
            </div>
        </div>
        <!-- Mid box for navbar -->
            <div class="mid">
            <ul class="navbar">
                <li><a href="http://localhost/websit/Registration.php" class="active">Home</a>
                <li><a href="http://localhost/websit/email_us.php">E-mail Us</a></li>
                <li><a href="http://localhost/websit/calculator.php">Fitness Calculator</a></li>
                <li><a href="http://localhost/websit/contact.php">Contact Us</a></li>
                <li><a href="http://localhost/websit/login.php" >LOGOUT</a></li>
               
            </ul>
        </div>
           <!-- Right box for buttons -->
        <div class="right">           
           <a href="http://localhost/websit/option_page.php"><img src="Sign_in.png" style="width:150px;height:60px;"></a>
           
        </div>
      
        
       
    </header>
    <div class="container">
        <div class="name">
      <!-- PHP program to display a digital clock which displays the current time of the server. -->



    
        
        <p   align="center" class="clock" >
   <?php
   date_default_timezone_set('Asia/kolkata');
   echo date('h:i:sA');
   ?></p>

        


        <h1 >Join the best gym of <h1 class="che"> /Chha.Sambhajinagar/</h1><h4 align="center">ENTER YOUR DETALS</h4></h1>
       </div>

            <form action="" method="post" align="center" >

            <div class="form-group">
                <input type="email" name="emailid" placeholder="Enter your EMAIL ID">
            </div>
            <div class="form-group">
                <input type="password" name="pw" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your Name">
            </div>
            <div class="form-group">
                <input type="text" name="age" placeholder="Enter your Age">
            </div>
            <div class="form-group">
                <input type="text" name="gen" placeholder="Enter your Gender">
            </div>
           
            <div class="form-group">
                <input type="text" name="loca" placeholder="Enter your Locality">
            </div>
            <div class="form-group">
                <input type="number" type name="phon" placeholder="Enter your Phone Number">
            </div>
            
            <button class="btn" onclick="thanks"   >Submit</button>

                <div class="message" >
                    <?php if($message!="") { echo $message; } ?>
                </div>
            </form>
    </div>
 
   
</body>
</html>

