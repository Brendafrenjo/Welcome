<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h2>Associative Arrays</h2>
    <form action="associativearrays.php" method="post">
        <input type="text" name="student">
        <input type="submit"> <br />
    </form>
    <?php 
    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
   echo $grades["Jim"];
    echo "<br>";
    $grades["Pam"] = "B+";
    echo $grades["Pam"];
    echo "<br>";
    echo $grades["Oscar"];
    echo "<br>";
    echo count($grades);
    echo "<br>";
    echo $grades[$_POST["student"]];
   ?>
</body>
</html>