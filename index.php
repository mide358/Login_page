<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "mydb";

    $con =  mysqli_connect($host,$user,$password);
     mysqli_select_db($con, $db);

    

    
     if(isset($_POST['email'])){

        echo "udnidnoinonod";

        $email = $_POST['email'];
        $password = $_POST['psw'];
    
       
    
    
            
    
            $sql = " select * from logintable where username= '$email' && password = '$password'";
    
            $result = mysqli_query($con, $sql);
            
            if(mysqli_num_rows($result) == 1){
              header('location:Forgot Password.php');
            }
            
            else{
                echo "Invalid Login credentials";
            }
    
        
        }
        

    



?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="main.css">
        <title>Login Page</title>
    </head>
    <body>
       <!--login form details-->
        <form method = "POST" action="#">
            <!--logo for the page-->
            <div class="img">
                <img src="https://res.cloudinary.com/mide358/image/upload/v1568667134/logo_rrxeuy.png" alt="logo">
            </div>

            <div class="form-container">
                <!--email with set input format -->
                <input type="email" id="email" name="email" placeholder="email" required 
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/><br><br>


                <input type="password" id="password" name="psw" placeholder = "Password"  required><br><br>

                <button class="button" type="submit" name = "submit">LOG IN</button>
                        
            </div>
            
        </form>
        <div class="other-details">
            <!--The href tags from sign up/forgot password has not been inserted-->
            <a href=" ">Don't have an account?</a>   <a href= " ">Home </a>        
                       
        </div>
        
    </body>
</html>