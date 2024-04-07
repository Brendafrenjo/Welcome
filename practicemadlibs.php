<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practice Madlibs Game</title>
</head>
<body>
  <form action="practicemadlibs.php" method="get">
    Adjective or Noun:
    <br />
    <input type="text" name="adjective">
    <br />
    Place:
    <br />
    <input type="text" name="place">
    <br />
    Verb or Adverb:
    <br />
    <input type="text" name="adverb">
    <br />
    Color:
    <br />
    <input type="text" name="color">
    <br />
    Animal:
    <br />
    <input type="text" name="animal">
    <br />
    verb:
    <br />
    <input type="text" name="verb">
    <br />
    Food:
    <br />
    <input type="text" name="food">
    <br />
    Number:
    <br />
    <input type="text" name="number">
    <br />
    <input type="submit">
    <br />
  </form>  
  <?php 
  $adjective = $_GET["adjective"];
  $place = $_GET["place"];
  $adverb = $_GET["adverb"];
  $color = $_GET["color"];
  $animal = $_GET["animal"];
  $verb = $_GET["verb"];
  $food = $_GET["food"];
  $number = $_GET["number"];
  echo "Answer:";
  echo "Once upon a time, there was a $adjective who lived in a  $place. Every day, they would $adverb around their $place. One day, they met a $color $animal who could $verb $adjective. Together, they went on an adventure to find the legendary $food. Along the way, they encountered $number celebrities who joined them on their quest. Finally, after $number days of searching, they found the $food and celebrated with a $adjective feast."
  ?> 
</body>
</html>