<?php


$err = [];


$conn = mysqli_connect("localhost", "id21911728_ebeni", "Eben4628$", "id21911728_onlinevotingsystem");

function generateRandomPassword($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $password = '';
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}



if(isset($_POST['register'])) {
   
    $fname = mysqli_real_escape_string($conn, $_POST['first_name']);
    $mname = mysqli_real_escape_string($conn, $_POST['middle_name']);
    $lname = mysqli_real_escape_string($conn, $_POST['last_name']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $id_photo = mysqli_real_escape_string($conn, $_POST['id_photo']);
    $national_id = mysqli_real_escape_string($conn, $_POST['id_number']);
    $region = mysqli_real_escape_string($conn, $_POST['region']);
    $zone = mysqli_real_escape_string($conn, $_POST['zone']);
    $woreda = mysqli_real_escape_string($conn, $_POST['woreda']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $kebele = mysqli_real_escape_string($conn, $_POST['kebele']);
    $house_no = mysqli_real_escape_string($conn, $_POST['house_number']);
    $profile = mysqli_real_escape_string($conn, $_POST['profile']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $job = mysqli_real_escape_string($conn, $_POST['job']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $nationality = mysqli_real_escape_string($conn, $_POST['nationality']);

     $password = generateRandomPassword();

    
    $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $users = mysqli_fetch_assoc($result);
    
    if(!empty($users['email'])) {
        array_push($err, "The email already exists!");
    } else {
        
        $query = "INSERT INTO citizen (fname, mname, lname, age, id_photo, national_id, region, zone, woreda, city, kebele, house_no, profile, email, job, gender, nationality,password) VALUES ('$fname', '$mname', '$lname', '$age', '$id_photo', '$national_id', '$region', '$zone', '$woreda', '$city', '$kebele', '$house_no', '$profile', '$email', '$job', '$gender', '$nationality','$password')";

        mysqli_query($conn, $query);
        
       
        header("Location: approval.php");
        exit();
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Registration - Online Voting System</title>
</head>
<body>
    <div class="container">
        <form class="form"  method="post">
            <h2>Register</h2>

            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="middle_name">Middle Name:</label>
            <input type="text" id="middle_name" name="middle_name">

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" required>

              <label for="gender">Gender:</label>
             <select id="gender" name="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
               
            </select>

            <label for="id_photo">ID Photo:</label>
            <input type="file" id="id_photo" name="id_photo" accept="image/*">

            <label for="id_number">ID Number:</label>
            <input type="text" id="id_number" name="id_number" required>

            

            <label for="region">Region:</label>
            <input type="text" id="region" name="region" required>

            <label for="zone">Zone:</label>
            <input type="text" id="zone" name="zone" required>

            <label for="woreda">Woreda:</label>
            <input type="text" id="woreda" name="woreda" required>

            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>

            <label for="kebele">Kebele:</label>
            <input type="text" id="kebele" name="kebele" required>

            <label for="house_number" name="house_number">House Number:</label>
            <input type="text" id="house_number" name="house_number" required>

            <label for="profile_pic" name="profile">Profile Picture:</label>
            <input type="file" id="profile_pic" name="profile" accept="image/*">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="job">Job:</label>
            <input type="text" id="job" name="job" required>

           <label for="nationality">Nationality:</label>
            <select id="choice" name="nationality" required>
                <option value="Ethiopian">Ethiopian</option>
                <option value="Foreign">Foreign</option>
               
            </select>

            <br> <br>

            <button type="submit" name="register">Register</button>
        </form>
        <p class="signin-link">Already have an account? <a href="index.php">Sign in</a></p>
    </div>
    
</body>
</html>


