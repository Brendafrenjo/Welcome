<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statement</title>
</head>
<body>
    <h1>Return Statement</h1>
    <?php 
    function cube($num){
        return $num * $num * $num;
    }

    $cubeResult = cube(8);
    echo $cubeResult;
    ?>
</body>
</html>