<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1">
        <br />
        +
        <br />
         <input type="number" name="num2">
        <br />
        <br />  
        <input type="number" name="num3">
        <br />
        -
        <br />
         <input type="number" name="num4">
        <br />
        <input type="submit">
    </form>
     Answer:
    <?php echo $_GET["num1"] + $_GET["num2"] ?>
    <br />
    Answer:
    <?php echo $_GET["num3"] - $_GET["num4"] ?>
</body>
</html>