<!DOCTYPE html>
<html>
<head>
    <title>CGPA Grouping & Task Assignment</title>
    <style>
        body {
            font-family: Arial;
            background: #f2f2f2;
            padding: 20px;
        }
        .box {
            background: white;
            width: 600px;
            margin: auto;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 8px gray;
        }
        h2 {
            text-align: center;
        }
        .group {
            background: #eaeaea;
            padding: 10px;
            margin-top: 15px;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Student CGPA Grouping & Task Assignment</h2>

    <?php
    $cgpas = array(3.90, 3.50, 2.80, 3.20, 1.90, 2.50, 3.70, 2.10);

    echo "<div class='group'>";
    echo "<h3>CGPA, Group & Assigned Task</h3>";

    foreach ($cgpas as $cgpa) {

        if ($cgpa >= 3.75) {
            $group = "Group A (Top Performers)";
            $task = "AI Research Project";
        } 
        elseif ($cgpa >= 3.00) {
            $group = "Group B (Good Performers)";
            $task = "Web Development Project";
        } 
        elseif ($cgpa >= 2.00) {
            $group = "Group C (Average Performers)";
            $task = "Database Management Task";
        } 
        else {
            $group = "Group D (Needs Improvement)";
            $task = "Basic Programming Practice";
        }

        echo "CGPA: $cgpa → $group → Task: $task <br>";
    }

    echo "</div>";
    ?>
</div>

</body>
</html>
