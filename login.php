
<?php
session_start();

$user = "";
$email = "";
$password = "";
$err = "";

$conn = mysqli_connect("localhost", "id21911728_ebeni", "Eben4628$", "id21911728_onlinevotingsystem");

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $sql = "SELECT * FROM users WHERE email = '" .$email. "' AND password = '" .$password. "' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if (empty($email)) {
        $err = "Username is required!";
    } else if (empty($password)) {
        $err = "Password is required!";
    } else if (mysqli_num_rows($result) == 1) {
        $_SESSION['email'] = $email
        header("Location: frame.php");
        exit;
    } else {
        $err = "Username and Password do not match!";
    }
}
else{


}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Online Voting System</title>
</head>
<body>
   
    <div class="container">
         
        <form class="form" method="post" action="frame.php">
           
            <h2>Login</h2>
            
            <label for="username">Username:</label>
            <input type="email" id="username" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>
        <p class="signup-link">Don't have an account? <a href="registration.html">Sign up</a></p>
    </div>
    <script src="script.js"></script>
</body>
</html>
