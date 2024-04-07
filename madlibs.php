<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad Libs Game</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <br />
    <form action="madlibs.php" method="get">
        Color: 
        <br />
        <input type="text" name="color">
        <br />
        Plural Noun: 
        <br />
        <input type="text" name="pluralNoun">
        <br />
        Celebrity:
        <br />
        <input type="text" name="celebrity">
        <br />
<input type=submit>
    </form>
    <br />
<?php 
$color = $_GET["color"];
$pluralNoun = $_GET["pluralNoun"];
$celebrity = $_GET["celebrity"];
echo "Roses are $color <br />";
echo "$pluralNoun are blue <br />";
echo "I love $celebrity <br />";
?>
    </form>
</body>
</html>