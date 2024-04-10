<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While Loops and For Loops</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Do Loops</h2>
    <?php 
    $index = 6;
    do {
    echo "$index <br />";
    $index ++;
    } while($index <= 5);
    ?>
    <h2>While Loops</h2>
    <?php 
    $index = 1;
    while($index <= 5) {
    echo "$index <br />";
    $index ++;
    }
    echo "<h2>For Loops Comparison</h2>";
    $luckyNumbers = array(4, 8, 14, 16, 23, 42);
    for($i = 0; $i < count($luckyNumbers); $i++){
        echo "$luckyNumbers[$i] <br />";
    }
    ?>
</body>
</html>