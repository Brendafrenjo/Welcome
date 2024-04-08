<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Checkboxes</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
   <h2>Using Checkboxes</h2> 
   <form action="checkboxes.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"> <br />
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br />
    Pears: <input type="checkbox" name="fruits[]" value="pears"> <br /> <br />
    <input type="submit" > <br />
   </form>
   <br />
   <?php 
   $fruits = $_POST["fruits"];
   echo $fruits[0];
   echo "<br>";
   echo $fruits[1];
   ?>
</body>
</html>