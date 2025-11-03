<!DOCTYPE html>
<head>
<title>
    AIUB Course Registration System
</title>
<style>
    body {
      background-color: #f4f4f9;
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
    </style>
</head>
<body>
    <div class="container">
        <h1 style="color:Red"><u>Welcome to AIUB Course registration System</u></h1>
         First Name <br>
        <input type="text"> <br>
        Last Name <br>
        <input type="text"> <br>
        Student ID <br>
        <input type="number"> <br>
        Programme/Mejor <br>
        <select>
            <option value="Mejor in Computer theory">Computer theory</option>
            <option value="Mejor in data Science">data Science</option>
            <option value="Mejor in Software Engineering">Software Engineering</option>
            <option value="Mejor in Information Technology">Information Technology</option>
</select> <br>
        Department <br>
        <select>
            <option value="Bsc in CSE">CSE</option>
            <option value="Bsc in EEE">EEE</option>
            <option value="Bsc in IPE">IPE</option>
            <option value="Bsc in Arch">Arch</option>
</select> <br>
        Phone Number <br>
        <input type="number"> <br>

        University Mail <br>
        <input type="text"> <br>

        Create Password (min 8 character) <br>
        <input type="password"> <br>

        Confirm Password <br>
        <input type="password"> <br>

        Semster Selection <br>
        <input type="radio">Summer 2024
        <input type="radio">Spring 2024
        <input type="radio">Fall 2024
        <input type="radio">Spring 2025
        <br>


        Requested credit Load (Max 15) <br>
        <input type="text"> <br>
        <br>

        <input type="checkbox"> I require Academis Advising before final registration

        <h2 style="color:Red"><u>Course Selection</u></h2>
        <br>
        <input type="checkbox"> Math 1101 (Calculas 1)
        <input type="checkbox"> CSE 1205 (Programming 1)
        <input type="checkbox"> Math 1105 (Numerical 1)
        <input type="checkbox"> phy 1101 (Physics 1)
        <br>
        <br>
        Coments/Special Request <br>
        <input type="text" style="width : 500px; height: 100px;"><br>
        <br>
        <br>

        <input type="Submit" value="Submit">
        <input type="Reset" value="Reset">
        
</div>
</body>
</html>

