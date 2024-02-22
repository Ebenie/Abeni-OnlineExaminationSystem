<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination System</title>
    <style>
        /* Add your CSS styles here */
        .confirmation-box {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 20px;
            margin-left: 20%;
            margin-right: 20%;
            text-align: center;
            width: 60%;
            margin-bottom: 8%;
            margin-top: 7%;
            border-radius: 10px;
           font-family: 'Arial', sans-serif;
           background-color:#333;
           color: white;


        }
button {
    background-color: white;
    color: black;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    width: 20%;
    height: 5%;
    font-size: 30px;
    font-weight: bold;

}


body{
       background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <h1>Welcome to Ethiopian Election Board! </h1><br>
        <h3>It's important to note that each voter is allowed to select a political party only once throughout the entire voting process. Once you've made your selection, it's locked in and cannot be modified, ensuring fairness and integrity in our elections. We appreciate your understanding and cooperation in adhering to this rule, as it helps maintain the transparency and credibility of our democratic process. Thank you for participating and making your voice heard! Happy voting!</h3><br>
        <h2>Are you sure you want to continue ?</h2>
        <button id="redirectButton">OK</button>
    </div>

    <!-- JavaScript to handle redirection -->
    <script>
        // Function to redirect to the dashboard
        function redirectToDashboard() {
            window.location.href = "dashboard.php"; // Replace "dashboard.php" with the actual path to your dashboard
        }

        // Add click event listener to the button
        document.getElementById("redirectButton").addEventListener("click", redirectToDashboard);
    </script>
</body>
</html>
