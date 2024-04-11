<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Functions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Object Functions</h2>
    <?php
    class Student{
        var $name;
        var $major;
        var $gpa;

        function __construct($aName, $aMajor, $aGpa)
        {
            $this->name = $aName;
            $this->major = $aMajor;
            $this->gpa = $aGpa;
        }

        function hasHonors() {
            if ($this->gpa >= 3.5) {
               return "true";
            }
            return "false";
        }

        function studentMajor() {
            if ($this->major == "Business") {
                return "Does Business";
            } 
            return "Does Art";
        }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo $student1->hasHonors();
    echo "<br />";
    echo $student1->name;
    echo "<br />";
    echo $student2->gpa;
    echo "<br />";

   
    echo $student1->studentMajor();
    echo "<br />";
    echo $student2->hasHonors();
    ?>
</body>
</html>