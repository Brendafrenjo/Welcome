<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Including</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Include Statement</h1>
    <h2>Include HTML</h2>
    <?php include "headers.html" ?>
    <h3>Content of the website</h3>
    <?php include "footer.html" ?>

    <h2>Include PHP</h2>
    <?php 
    $title = "My First Post";
    $author =  "Brenda Frenjo";
    $wordCount = 400;
    include "article-header.php";
    
    
    ?>
    
    <?php 
    echo "<br />";
    echo "<br />";
    include "usefultools.php";
    sayHello("Brenda");
    echo "<br />";
    echo $feetInMiles;

    ?>
</body>
</html>