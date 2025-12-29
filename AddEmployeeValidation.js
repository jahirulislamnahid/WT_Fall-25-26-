
function validateForm() {

    let username =document.getElementById("username").value.trim();
    let firstname =document.getElementById("firstname").value.trim();
    let lastname =document.getElementById("lastname").value.trim();
    let email =document.getElementById("email").value.trim();
    let department =document.getElementById("department").value.trim();
    let password =document.getElementById("password").value.trim();
    let confirmPassword =document.getElementById("confirmPassword").value.trim();
    
    // in order to check the empty field in the form
    if (username=== "" || firstname=== "" || lastname=== "" || email===""){
        alert("All the required field must be filled !");
    return false;
    }
    
    // Check the email validation
    let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!email.match(emailPattern)) {
        alert("Please enter a valid Email Address!");
        return false;
    }

    //check the department selection
    if (department === ""){
        alert("please select a department!");
        return false;
    }

    // check the password which is fixed as admin (1234)
    if (password !== "1234") {
        alert("Password doesnt match with Admin");
        return false;
    }

    //check with password and the confirm password
    if (password !== confirmPassword) {
        alert("Password doesnt match with Confirm Password");
        return false;
    }
    
    // show the success massage if all works
    alert("Successfully added Employee to Neurobyte. Congratulations!!!!");
    return true;

}