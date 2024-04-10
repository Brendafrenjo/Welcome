<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Creatives</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Creatives</h2>
    <?php
    class Album{
        var $singer;
        var $title;
        var $topSong;
        var $songs;
    }

    $album1 = new Album;
    $album1->singer = "Rihanna";
    $album1->title = "Anti";
    $album1->topSong = "Work";
    $album1->songs = 14;

    echo $album1->singer;
    echo "<br />";
    echo $album1->title;
    echo "<br />";
    echo $album1->topSong;
    echo "<br />";
    echo $album1->songs;

    echo "<br />";
    echo "<br />";

    class Book{
        var $title;
        var $author;
        var $pages;
    }

    $book1 = new Book;
    $book1->title = "Book of Form and Emptiness";
    $book1->author = "Ruth Ozeki";
    $book1->pages = 524;
    
    echo $book1->title;
    echo "<br />";
    echo $book1->author;
    echo "<br />";
    echo $book1->pages;
    ?>
</body>
</html>