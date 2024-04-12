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
        var $author;
        var $title;
        var $pages;

        function __construct($aAuthor, $aTitle, $aPages)
        {
            $this->author = $aAuthor; 
            $this->title = $aTitle; 
            $this->pages = $aPages; 
        }

        function bookAuthor() {
            if ($this->author == "Ruth Ozeki") {
                return "Author is Ruth Ozeki";
    } 
    return "Author is JK Rowling";
    }
}

    $book1 = new Book("The Book of Form and Emptiness", "Ruth Ozeki", 544);
    $book2 = new Book ("Harry Potter", "JK Rowling", 400);  

    echo $book2->bookAuthor();
    echo "<br>";
    echo $book1->title;
    echo "<br>";
    ?>
</body>
</html>