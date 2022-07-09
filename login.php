<?php   
 session_start();  
 $conn=mysqli_connect("localhost","root","","tutorials");  
 $msg="";  
 if (isset($_POST['submit'])) {  
      //echo "<pre>";  
      //print_r($_POST);  
      $email=mysqli_real_escape_string($conn,$_POST['email']);  
      $password=mysqli_real_escape_string($conn,$_POST['password']);  
      $sql=mysqli_query($conn,"select * from login where username='$email' && password='$password'");  
      $num=mysqli_num_rows($sql);  
      if ($num>0) {  
           //echo "found";  
           $row=mysqli_fetch_assoc($sql);  
           $_SESSION['USER_ID']=$row['id'];  
           $_SESSION['USER_NAME']=$row['username'];  
           header("location:Registration.php");  
      }else{  
           $msg="Please Enter Valid details !";  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
 <head>  
 <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
      <meta charset="utf-8">  
      <meta name="viewport" content="width=device-width, initial-scale=1">  
      <link rel="stylesheet" type="text/css" href="css/style.css">  
      <title>Login Page</title>  
 </head> 
 <style>
     body {
        font-family: 'Baloo Bhai', cursive;
        color: white;
        margin: 0px;
        padding: 0px;
        background: url('LORD.jpg');
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
        margin: 0px 80px;
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
    .A
    {
        font-size: 60px;
        margin: 40px 150px;
        color: rgb(255, 123, 79);
    }
</style> 
 <body>  

 <h1 class="A">Attain Best Of You</h1>
 <div class="container"  >
               <!-- PHP program to display a digital clock which displays the current time of the server. -->
               <p   align="center" class="clock" >
                    <?php
                    date_default_timezone_set('Asia/kolkata');
                    echo date('h:i:sA');
                    ?>
               </p>
               <div>
                    <h1 >Join the best gym of <h1 class="che"> /Chha.Sambhajinagar/</h1><h4 align="center">LOGIN NOW</h4></h1>
               </div>

            <form action="" method="post" align="center" >
                    <label for="username">Username</label>  
                    <div class="box">  
                         <input type="text" name="email" placeholder="Username" class="form-control" required>  
                    </div>  
                    <label for="password">Password</label>  
                    <div class="box">  
                         <input type="password" name="password" placeholder="Password" class="form-control" required>  
                    </div>  
                    <div class="btn-box">  
                         <input type="submit" name="submit" value="Login" class="btn submit-btn">  
                    </div>  
                    <div class="error">  
                         <?php echo $msg ?>  
                    </div>  
            </form>
    </div> 
 </body>  
 </html>  












 