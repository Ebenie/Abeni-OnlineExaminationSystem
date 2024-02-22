<?php


    
    $email="";
    $password="";
    $err="";
    
    
    $conn = mysqli_connect("localhost","id21911728_ebeni","Eben4628$","id21911728_onlinevotingsystem");
    
    if(isset($_POST['login'])){
     $email=mysqli_real_escape_string($conn,$_POST['email']);
     $password=mysqli_real_escape_string($conn,$_POST['password']);
     $sql="select * from users where email = '".$email." ' and  password ='".$password."' limit 1";
     $result = mysqli_query($conn,$sql);
     
     if(empty($email)){
         
        $err="Username is required!"; 
     }
     else if(empty($password)){
         
        $err="User Password  is required!"; 
     }
     
     else if(mysqli_num_rows($result) == 1){
         header('location:frame.php');
         
     }

 
    else {
        
        $err="Username and Password do not match!";
    }
    
    
    
    }

    


else
{

    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <script rel="javascript" src="validation.js"></script>
    <title>Online Voting System</title>
</head>
<body>
    <div class="container">
        <form class="form" name="loginForm"  method="post" onsubmit="return validateForm();">
            <h2>Login</h2>
             <div class="error">
                <h6 id="error"><?php echo $err; ?></h6>
             </div>
            <label for="email">Username:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="registration.php">Sign up</a></p>
    </div>
 
</body>
</html>
