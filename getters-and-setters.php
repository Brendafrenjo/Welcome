<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getters and Setters</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Getters and Setters</h2>
    <?php
    class Movie{
        public $title;
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
        }

        function getRating(){
            return $this->rating;
        }

        function setRating($rating){
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR")
        return $this->rating = $rating;
        else {
            $this->rating = "NR";
        }
    }
}

    $avangers = new Movie("Avangers EndGame", "PG-13");

    echo $avangers->title;
    echo "<br />";
    $avangers->setRating("Dog");
    echo $avangers->getRating();
    ?>
</body>
</html>