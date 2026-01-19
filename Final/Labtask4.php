<!DOCTYPE html>
<html>
<head>
    <title> Lab task 4 </title>

</head>
<body>
    <form method="post" action="Lab4Validation.php">
    <fieldset>
                <legend>Name</legend>
                <input type =text>
            </fieldset>
            <br>

    <fieldset>
                <legend>Email</legend>
                <input type =text>
            </fieldset>
            <br>

            <fieldset>
                <legend>Date of Birth</legend>
                <input type =date>
            </fieldset>
            <br>

            <fieldset>
                <legend>Gender</legend>
                <p>
            Male <input type="radio" name="gender" id="gender">
            Female <input type="radio" name="gender" id="gender">
            other <input type="radio" name="gender" id="gender">
            </p>
            </fieldset>
            
            <br>

            <fieldset>
                <legend>Degree</legend>
                <p>
            SSC <input type="checkbox" name="degree[]" id="degree">
            HSC <input type="checkbox" name="degree[]" id="degree">
            Bs <input type="checkbox" name="degree[]" id="degree">
            </p>
            </fieldset>

            <br>
            <fieldset>
                <legend>Blood Group</legend>
                <select>
                    <option value="A+">A+</option>
                    <option value="B+">B+</option>
                    <option value="AB+">AB+</option>
                    <option value="o+">O+</option>
                    <option value="A-">A-</option>
                    <option value="B-">B-</option>
              </select>

            </fieldset>
            <br>
            <center>

            <button type="Submit">Submit</button>

           </center>

</form>
</body>
</html>
