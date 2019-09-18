<?php
    session_start();

    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "mydb";

    $con =  mysqli_connect($host,$user,$password);
     mysqli_select_db($con, $db);

    

    
     if(isset($_POST['email'])){


        $email = $_POST['email'];
        $password = $_POST['psw'];
    
       
    
    
            
    
            $sql = " select * from logintable where username= '$email' && password = '$password'";
    
            $result = mysqli_query($con, $sql);
            
            if(mysqli_num_rows($result) == 1){
              header('location:Forgot Password.php');
            }
            
            else{
                echo "<h1 align = 'center' style = ' color : purple;'>Invalid Login credentials</h1>";
            }
    
        
        }
        

    



?>


