function validateForm() {
    var email = document.forms["loginForm"]["email"].value;
    var password = document.forms["loginForm"]["password"].value;
    var errorElement = document.getElementById("error");

    if (email.trim() === ""|| email.length < 11) {
        errorElement.textContent = "Invalid ID Input!";
        return false;
    }

    if (password.trim() === ""|| password.length < 8 ) {
        errorElement.textContent = "Invalid Password Input!";
        return false;
    }

    errorElement.textContent = "";
}

