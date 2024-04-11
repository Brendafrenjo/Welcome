<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructors</title>
    <link rel="stylesheet" href="styles.css">
</head>
<h2>Constructors</h2>
<body>
    <?php 
    class Book{
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $book1 = new Book("The Book of Form and Emptiness", "Ruth Ozeki", 526);
    $book2 = new Book("Harry Porter", "JK Rowling", 400);
    $book2->title = "Hunger Games";

    echo $book1->title;
    echo "<br />";
    echo $book1->author;
    echo "<br />";
    echo $book1->pages;
    echo "<br />";
    echo "<br />";
     echo $book2->title;
    echo "<br />";
    echo $book2->author;
    echo "<br />";
    echo $book2->pages;
    ?>
</body>
</html>