<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Switch Statement</h2>
    <form action="switch.php" method="post">
    What is your grade?
    <input type="text" name="grade" >
    <input type="submit" >
    </form>
    <?php 
    $grade = $_POST["grade"];
    switch ($grade) {
        case "A+":
        case "A":
        case "A-":
            echo "<h3>You did an amazing job!</h3>";
            break;
        case "B+":
        case "B":
        case "B-":
            echo "<h3>You did pretty good</h3>";
            break;
        case "C+":
        case "C":
        case "C-":
            echo "<h3>You did okay</h3>";
            break;
        case "D+":
        case "D":
        case "D-":
            echo "<h3>You need to improve</h3>";
            break;
        case "F":
            echo "<h3>You failed!</h3>";
            break;
        default:
            echo "<h3>Invalid Grade!</h3>";
        }
    ?>
</body>
</html>