function validateForm(){

    const empId = document.getElementById('emp_id').value.trim();
    const empName = document.getElementById('emp_name').value.trim();
    const leaveType = document.getElementById('leave_type').value;
    const department = document.getElementById('department').value.trim();
    const reason = document.getElementById('reason').value.trim();
    const start = document.getElementById('start_date').value;
    const end = document.getElementById('end_date').value;

    if (!/^\d+$/.test(empId)) {
        alert('Employee ID must be numbers only.');
        return false;
    }


    if (!/^[a-zA-Z\s]+$/.test(empName)) {
        alert('Employee Name must be conatins letters and spaces only.');
        return false;
    }

    if (!leaveType) {
        alert('Please select a leave type.');
        return false;
    }

    if (!department) {
        alert('Please select a department.');
        return false;
    }
    
    if (!start || !end) {
        alert('please select both start and end date');
        return false;
    }

    if (new Date(end) < new Date(start)) {
        alert('End date cannot be before start date.');
        return false;
    }
    
    return true;




}


