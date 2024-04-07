<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to PHP!</title>
</head>
<body>
<?php
echo"<h1>Brenda's Site!</h1>";
echo"<hr />";
echo "<p>Brenda is a frontend developer and this is her site. She is attempting to start gaining skills in reading, which prove challenging, but existing at the same time</p>";
echo "Welcome to the world of PHP!";
echo "<br />";
echo "This is a PHP program running on the server!";
echo "<br />";
echo "Date is: ".date("d/m/Y <br />");
echo("Hello World <br /> <br />");

echo "<h2>Working with Variables</h2>";

$characterName = "Tom";
$characterAge = 35;
echo("There once was a man name $characterName <br />");
echo("He was $characterAge years old <br />");
$characterName = "Mike";
$characterAge = 40;
echo("He really liked the name $characterName <br />");
echo("But didn't like being $characterAge");

echo "<h2>Data Types</h2>";

$phrase = "To be or not to be";
$age = 30;
$gpa = 3.7;
$isMale = true;
null;
echo $age;
echo $gpa;
echo "$phrase <br /> <br />";

echo "<h2>Working with Strings</h2>";

echo "Giraffe Academy <br />";
$phrase = "Giraffe Academy";

echo strtolower($phrase);
echo "<br />";
echo strtoupper($phrase);
echo "<br />";
echo strtoupper(("dog" . " and cat"));
echo "<br />";
echo strlen($phrase);
echo "<br />";
echo $phrase[5];
echo "<br />";
echo "Brenda"[3];
echo "<br />";
$phrase[0] = "B";
echo $phrase;
echo "<br />";
echo str_replace("Brenda", "Giraffe", "Brenda is a frontend developer"); 
echo "<br />";
echo str_replace("Frontend development", "Backend development", "Frontend development is incredible"); 
echo "<br />";
echo str_replace("Biraffe", "Panda", $phrase);
echo "<br />";
echo substr($phrase, 8, 5);

echo "<h2>Working with Numbers</h2>";

echo 55;
echo "<br />";
echo -55.67;
echo "<br />";
echo 5 + 9;
echo "<br />";
echo 5 - 9;
echo "<br />";
echo 5 * 9;
echo "<br />";
echo 5 / 9;
echo "<br />";

echo 5 % 9;
echo "<br />";
echo 10 % 3;
echo "<br />";
echo 4 + 5 * 10;
echo "<br />";
$num = 10;
echo $num;
echo "<br />";
$num++;
echo $num;
echo "<br />";
$num--;
echo $num;
echo "<br />";
$num = $num + 25;
echo $num;
echo "<br />";
$num += 35;
echo $num;
echo "<br />";
$num -= 6;
echo $num;
echo "<br />";
$num *= 2;
echo $num;
echo "<br />";
$num /= 2;
echo $num;

echo "<h2>Functions for Complex Math Operations</h2>";

echo abs(-100);
echo "<br />";
echo pow(2, 6);
echo "<br />";
echo sqrt(144);
echo "<br />";
echo max(12, 78);
echo "<br />";
echo min(4, 7);
echo "<br />";
echo round(3.5);
echo "<br />";
echo ceil(3.3);
echo "<br />";
echo floor(3.9);
echo "<br />";
echo round(3.5);
echo "<br />";
echo ceil(3.3);
echo "<br />";
echo floor(3.9);

echo "<h2>Getting User Input</h2>";
?>
<br />
<form action="welcome.php" method="get">
  Username: <input type="text" name="username" placeholder="Enter your name..." />
  <br />
  Age: <input type="number" name="age" />
  <br />
  <input type="submit" value="Submit" />
</form>
<br />
You username is <?php echo $_GET["username"] ?>
 and
your age is: <?php echo $_GET["age"] ?>
</body>
</html>