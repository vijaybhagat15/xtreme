<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome</title>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
</head>
<style> 
 body {
        font-family: 'Baloo Bhai', cursive;
        color: white;
        margin: 0px;
        padding: 0px;
    background-image: url(windows-10-technology-minimalism-black-wallpaper-preview.jpg);
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
.mail {
    display: inline-block;
    /* border: 2px solid red; */
    position: absolute;
    left: 70px;
    top: 200px;
}
.H
{
    color:  rgb(255, 123, 79);
  
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
        </div>
        
    </header>
<center>
<div class="H">
    <h1>
        Wellcome to Xtreme Gym
    </h1>
    <h1>
        Let's start YOGA !
    </h1>
</div>
</center>
</body>
</html>