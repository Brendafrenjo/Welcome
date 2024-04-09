<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Switch Statement</h2>
    <form action="switch2.php" method="post">
    What is your grade?
    <input type="text" name="grade" >
    <input type="submit" >
    </form>
    <?php
    $grade = $_POST["grade"];
    switch ($grade) {
        case "A+":
            echo "<h3>You did an outstanding job!</h3>";
            break;
        case "A":
            echo "<h3>You did an excellent job!</h3>";
            break;
        case "A-":
            echo "<h3>You did a very good job!</h3>";
            break;
        case "B":
            echo "<h3>You did pretty good</h3>";
            break;
        case "C":
            echo "<h3>You did okay</h3>";
            break;
        case "D":
            echo "<h3>You did an outstanding job!</h3>";
            break;
        default:
            echo "<h3>You need to improve</h3>";
            break; 
    }
     ?>
</body>
</html>