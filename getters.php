<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Object Functions</h1>
    <?php
    class Book{
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->getRating($rating);
        }

        function getRating(){
           return $this->rating; 
        }

        function setRating($rating){
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
               $this->rating = $rating;
            } else {
                $this->rating = "NR";
            }
        }

    }

    $antMan = new Book("The AntMan and the Wasp", "dOG");
   //G, PG, PG-13, R, NR

   echo $antMan->title;
   echo "<br />";
   echo $antMan->getRating();
        ?>
</body>
</html>