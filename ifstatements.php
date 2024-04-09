<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <h2>If Statement</h2>
    <?php 
    $isMale = true;
    $isTall = true;
    if ($isMale && $isTall){
    echo "You are a tall male!";
    } elseif($isMale && !$isTall){
        echo "You are a short male!";
    } elseif(!$isMale && $isTall){
    echo "You are tall but not male!";
    } else {
    echo "You are neither male nor tall!";
    }
    echo "<h2>Comparisons with If Statements</h2>";
    function getMax($num1, $num2, $num3){
   if ($num1 >= $num2 && $num1 >= $num3) {
    return $num1;
   } elseif ($num2 >= $num1 && $num2 >= $num3) {
    return $num2;
   } else {
    return $num3;
   }
}

    echo getMax(400,520, 520);
    ?>
</body>
</html>