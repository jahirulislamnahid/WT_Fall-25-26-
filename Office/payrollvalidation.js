function validatePayrollForm() {

    const empName = document.getElementById("emp_name").value.trim();
    const salary = document.getElementById("salary").value.trim();
    const startDate = document.getElementById("period_start").value.trim();
    const endDate = document.getElementById("period_end").value;

    if (empName === "") {
        alert("Employee name is required!")
        return false;
    }
    
    if (salary === "") {
        alert("Salary is required!")
        return false;
    }

    if (salary <= 0) {
        alert("Salary must be a positive number")
        return false;
    }

}


