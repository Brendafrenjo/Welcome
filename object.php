<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objects and Functions Practice</title>
</head>
<body>
    <h3>Objects and Functions Practice</h3>
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

        function hasHonors(){
        if ($this->gpa >= 4.0) {
            return "<h4>Has Honors</h4>";
        }
        return "<h4>Has no Honors</h4>";
        }

       
    }

    $student1 = new Student("Grace", "History", 4.8);
    $student2 = new Student("Mark", "Maths", 2.6);

    echo $student1->hasHonors();
    echo "<br />";
    echo $student1->name;
    echo "<br />";
    echo $student2->gpa;
    echo "<br />";

   
    ?>
</body>
</html>