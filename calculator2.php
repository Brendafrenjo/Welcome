<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Building a Better Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Building a Better Calculator</h2>
    <form action="calculator2.php" method="post">
    First number: <input type="number" step="0.1" name="num1" > <br />
    OP: <input type="text" name="op" > <br />
    Second number: <input type="number" step="0.01" name="num2" > <br /> <br />
    <input type="submit" >
    </form>
    <?php 
    $num1 = $_POST["num1"];
    $op = $_POST["op"];
    $num2 = $_POST["num2"];

    if ($op == "+") {
       $result = $num1 + $num2;
    } elseif ($op == "-") {
       $result = $num1 - $num2; 
    } elseif($op == "*"){
    $result = $num1 * $num2;
    } elseif ($op == "/") {
       $result = $num1/$num2; 
    } else {
      $result = "Invalid operator";
    }

    echo "<h3>$result</h3>"

    ?>
</body>
</html>