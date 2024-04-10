<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classess and Objects</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Classes and Objects</h2>
    <?php 
    //custom data types using classes
    class Book{
      var $title;
      var $author;  
      var $pages;
    }

    $book1 = new Book;
    $book1->title = "The Book of Form and Emptiness";
    $book1->author = "Ruth Ozeki";
    $book1->pages = 524;

    $book2 = new Book;
    $book2->title = "Switch on Your Brain";
    $book2->author = "Dr. Caroline Leaf";
    $book2->pages = 423;

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