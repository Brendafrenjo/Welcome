<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Url Parameters</title>
</head>
<body>
    <h2>Url Parameters</h2>
   <form action="urlparameters.php" method="get">
    Name: <input type="text" name="name"> <br />
    <input type="submit">
   </form> 
   <br />
   <h2>Post vs Get</h2>
    <p>Post is more secure than get because it does not show the data in the url. Get is less secure because it shows the data in the url.</p>
 <form action="urlparameters.php" method="post">
    Password: <input type="password" name="password"> <br />
    <input type="submit">
   </form> 
    <br />
    <?php echo $_POST["password"] ?>
</body>
</html>