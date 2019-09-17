<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link type="text/css" rel="stylesheet" href="main.css">
        <title>Forgot Password</title>
    </head>
    <body>
            <div class="password-details">
                    <!--The href tags from sign up/forgot password has not been inserted-->
                    <a href= " ">Home </a>       
              
       <form action="">
            <div class="forgot"><!--forgot password details-->
                    <h2>Reset your Password</h2>
                </div>
                   
            <div class="form-container">
                <!--email with set input format -->
                <input type="email" id="email" name="email" placeholder="Email address" required 
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"/><br><br>


                <input type="password" id="newpassword" name="newpsw" placeholder="New Password" required><br><br>

                <input type="password" id="confirm" name="conpsw" placeholder="Confirm New Password" required><br><br>

                <button class="button" type="submit">RESET</button>
                        
            </div>
            
        </form>
        
                       
        </div>
        
    </body>
</html>