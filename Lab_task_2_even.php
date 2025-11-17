<!DOCTYPE html>
<head>
<title>
    AIUB Course Registration System
</title>
<style>
    body {
      background-color: #b4b4e7ff;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .container {
    background-color: white;
    color: black;
    padding: 30px 40px;
    box-shadow: 0px 0px 15px rgba(0,0,0,0.2);
    width: 500px;
  }
 
  .btn_1 {
    padding: 10px 10px;
    background-color: #3969a9ff;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 16px;
}
.btn_2 {
    padding: 5px 5px;
    background-color: #3969a9ff;
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 10px;
}
    </style>
</head>
<body>
    <form onsubmit="return handleRegister()">

    <div class="container">
        <center>
        <h1 style="color:Black"><u>Participant Registration</u></h1>
</center>
         Full Name <br>
        <input type="text"> <br>

         Email <br>
        <input type="text"> <br>

        Phone Number <br>
        <input type="number"> <br>

        Create Password (min 8 character) <br>
        <input type="password"> <br>

        Confirm Password <br>
        <input type="password"> <br>

        <br>
        <br>

        <input type="button" value="Register" class="btn_1">

        <br>
        <br>

        </form>
 
       <div id="alert"> </div>
       <div id="error"> </div>
       <div id="output"> </div>

        <script>
<script>
function handleRegister() {

    var fullName = document.getElementById("fullName").value.trim();
    var email = document.getElementById("email").value.trim();
    var phone = document.getElementById("phone").value.trim();
    var password = document.getElementById("password").value.trim();
    var confirmPassword = document.getElementById("confirmPassword").value.trim();

    var errorDiv = document.getElementById("error");
    var outputDiv = document.getElementById("output");

    errorDiv.innerHTML = "";
    outputDiv.innerHTML = "";

    // Empty field check
    if (fullName === "" || email === "" || phone === "" || password === "" || confirmPassword === "") {
        errorDiv.innerHTML = "Please fill all the fields. No field can be empty.";
        return false;
    }

    // Email validation
    if (!email.includes("@")) {
        alert("Invalid email. Email must contain '@'");
        return false;
    }

    // Phone validation
    if (isNaN(phone)) {
        alert("Phone number must contain only digits.");
        return false;
    }

    // Password length check
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    // Password match check
    if (password !== confirmPassword) {
        alert("Passwords do not match.");
        return false;
    }

    // Success output
    outputDiv.innerHTML = `
        <h3>Registration Successful!</h3>
        Full Name: ${fullName} <br>
        Email: ${email} <br>
        Phone Number: ${phone}
    `;
}
</script>

        
 

        <h1 style="color:Black">Activity Selection</h1>
         Activity Name <br>
        <input type="text"> <br>
        <br>

        <input type="Add Activity" value="Add Activity" class="btn_2">
        <br>
        <br>
        <input type="text">





        
</div>
</body>
</html>

