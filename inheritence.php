<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritence</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Inheritence</h2>
    <?php 
    class Chef{
        function makeChicken() {
            echo "The chef makes chicken <br />";
        }

        function makeSalad() {
            echo "The chef makes salad <br />";
        }

        function makeSpecialDish() {
            echo "The chef makes bbq ribs <br />";
        }
    }

    class ItalianChef extends Chef {
        function makePasta() {
            echo "The chef makes pasta <br />";
        }
        
    }

        $chef = new Chef;
        $chef->makeSpecialDish();

        echo "<br />";
        echo "<h3>Italian Chef</h3>";

        $italianChef = new ItalianChef;
        $italianChef->makeChicken();
        $italianChef->makePasta();
    ?>
</body>
</html>