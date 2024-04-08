<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h2>Arrays</h2>
    <?php 
    $friends = array("Kevin", "Karen", "Oscar", "Jim");
    $friends[1] = "Dwight";
    $friends[3] = 400;
    echo count($friends);
    echo "<br>";
    $friends[4] = "Angela";
    echo count($friends);
    echo "<br>";
    echo $friends[1];
    echo "<br>";
    echo $friends[3];
    echo "<br>";
    echo $friends[4];
    ?>
</body>
</html>