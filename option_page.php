<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Option_Page</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    body
    {
        font-family: 'Baloo Bhai', cursive;
        color: white;
        background-image: url(gym_bg.jpg);
        background-repeat: no-repeat;
        border-image-width: 1920;
    }
    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 60px;
        top: 20px;
    }
    .left img {
        width: 110px;
        
    }
    .left div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
        color: aliceblue;
    }
    .mid 
    {
        display: block;
        width: 36%;
        margin: 29px auto;
        /* border: 2px solid green; */
    }
    .right 
    {
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
        color: rgb(249, 247, 247);

    }
    .video_2 
    {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 600px;
        top: 100px;
    }
    .c
    {
        color: rgb(255, 123, 79);
    }
    .video_2
     {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    
    }
    .video_1 
    {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 200px;
        top: 100px;
    }
    .b
    {
        color: rgb(255, 123, 79);
    }
    .video_1
     {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    
    }
    .video_3 
    {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        right: 200px;
        top: 100px;
    }
    .y
    {
        color: rgb(255, 123, 79);
    }
    .video_3
     {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    
    }
</style>
<body>
    <header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <div>
            <img src="xtreme.jpeg" alt="">
            </div>
            <div>
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
            </ul>
        </div>
        
    </header>
    <div class="options">
    <div class="video_1">
        <video width="360" height="340" controls> 
            <source  src="Jai_hanumanta.mp4" type="video/mp4">
            <source src="Jai_hanumanta.mp4" type="video/ogg">
        </video>
        <div>
            <a href="http://localhost/websit/wellcom%20to%20xtreme%20gym.php" style="color:  rgb(255, 255, 255);"> GO FOR BODY BUIlDING </a>
        </div>
    <h4 class="b">Body Building</h4>
    </div>
    <div class="video_2">
        <video width="360" height="340" controls>
            <source  src="cardio.mp4" type="video/mp4">
            <source src="cardio.mp4" type="video/ogg">
        </video><div>
            <a href="http://localhost/websit/wellcom%20to%20xtreme%20gym3.php" style="color: rgb(255, 255, 255);"> GO FOR CARDIO </a>
        </div>

        <h4  class="c">CARDIO</h4>
    </div>
    <div class="video_3">
        <video width="360" height="340" controls>
            <source  src="yoga.mp4" type="video/mp4">
            <source src="yoga.mp4" type="video/ogg">
        </video>
        <div>
            <a href="http://localhost/websit/wellcom%20to%20xtreme%20gym2.php" style="color: rgb(255, 255, 255);">GO FOR YOGA</a>
        </div>
        <h4 class="y">YOGA</h4><br>
    </div>
    </div>
</body>
</html>