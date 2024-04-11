<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construtor Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Construtor Functions</h2>
    <?php
    class Food{
        var $name;
        var $category;
        var $type;

        function __construct($aName, $aCategory, $aType)
        {
           $this->name = $aName;
           $this->category = $aCategory;
           $this->type = $aType;
        }
    }

    $food1 = new Food("Pizza", "Italian Cuisine", "New York Style Pizza");
    $food2 = new Food("Sushi", "Japanese Cuisine", "Maki");
    $food2->name = "Pilau";

    echo $food1->name;
    echo "<br />";
    echo $food1->category;
    echo "<br />";
    echo $food1->type;
    echo "<br />";
    echo "<br />";
    echo $food2->name;
    echo "<br />";
    echo $food2->category;
    echo "<br />";
    echo $food2->type;
     ?>
</body>
</html>