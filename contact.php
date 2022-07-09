<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>contact info</title>
</head>
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<style>
    body{
        background-image: url(cc.jpg);
        background-repeat: no-repeat;
        font-family: 'Baloo Bhai', cursive;
        
    }
    .apps
    {
        top: 550px;
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
        color: rgb(253, 251, 251);

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
    .twit {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
      left: 1050px;
        top: 60px;
    }
    .twit img {
        width: 210px;
    }

    .twit div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
        
    }
    .insta {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 80px;
        top: 130px;
    }
    .insta img {
        width: 210px;
    }

    .insta div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
        
    }
    .fb {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 550px;
        top: 55px;
    }
    .fb img {
        width: 210px;
        
    }

    .fb div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    
    }
    .YOU_TUB {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
      left: 625px;
        top: 450px;
    }
    .YOU_TUB
    { 
         width: 210px;
    }

    .YOU_TUB {
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
        <div class="apps">
                <div class="insta"> <div>
                    
                
                    <div><a href="https://www.instagram.com/artist_vijay_bhagat/"><img src="i.jpg" style="width:255px;height:265px;"></a></div>
                    <a href="https://www.instagram.com/artist_vijay_bhagat/" style="color: rgb(246, 242, 248);"> Instragram</a>
                </div>
                <div class="fb">
                    <div>
                    <a href="https://m.facebook.com/profile.php"><img src="facebook-logo-3.png" style="width:230px;height:230px;"></a>
                    </div>
                    <div>
                        <a href="https://m.facebook.com/profile.php" style="color: rgb(253, 251, 249);">Facebook</a>
                        
                    </div>
                </div>>
                <div class="twit"> 
                    <div>
                        <a href="https://twitter.com/vijay_bhagat_"><img src="logo-twitter-png-5865-256x256.ico" style="width:280px;height:280px;"></a>
                    </div>
                    <div></div>
                        <a href="https://twitter.com/vijay_bhagat_" style="color: rgb(249, 249, 248);">Twit us</a>
                    </div>
                </div>
                <div class="YOU_TUB"> 
                    <div>
                        <a href="https://www.youtube.com/channel/UCAUO9NJSkM3VCVTybDbgLCw"><img src="kT8kABGyc.png" style="width:240px;height:210px;"></a>
                    </div>
                    <div>
                        <a href="https://www.youtube.com/channel/UCAUO9NJSkM3VCVTybDbgLCw" style="color: rgb(249, 249, 248);">_SUBSCRIBE_</a>
                    </div>
                </div>
        </div>
</body>
</html>