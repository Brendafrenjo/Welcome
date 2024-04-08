<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
    <h2>Functions</h2>
    <?php
    function sayHello($name, $age){
        echo "Hello $name, you are $age years <br>";
    }

    sayHello("Brenda", 31);
    sayHello("Tracy", 25);
    sayHello("Becky", 40);
    sayHello("Jude", 50);
    ?>
</body>
</html>