function validateForm() {

    let username = document.getElementById("username").value.trim();
    let firstname = document.getElementById("firstname").value.trim();
    let lastname = document.getElementById("lastname").value.trim();
    let email = document.getElementById("email").value.trim();
    let department = document.getElementById("department").value;
    let salary = document.getElementById("salary").value.trim();
    let dob = document.getElementById("dob").value;
    let experience = document.getElementById("experience").value.trim();
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirmPassword").value;

    if (
        username === "" || firstname === "" || lastname === "" ||
        email === "" || department === "" || salary === "" ||
        dob === "" || experience === "" || password === "" || confirmPassword === ""
    ) {
        alert("All fields are required!");
        return false;
    }

    let emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address!");
        return false;
    }

    if (isNaN(salary) || salary <= 0) {
        alert("Please enter a valid salary!");
        return false;
    }

    if (password.length < 6) {
        alert("Password must be at least 6 characters!");
        return false;
    }

    if (password !== confirmPassword) {
        alert("Password and Confirm Password do not match!");
        return false;
    }

    return true;
}
