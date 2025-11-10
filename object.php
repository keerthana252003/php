<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
</head>
<body>

<?php
class Student {
    public $name = "Keerthana";
    public $age = "22";
    public $class = "B.Sc";
    public $rollNo = "20MA28";
    public $department = "Maths";
    public $address = "Theni";
    public $phone = "9876543210";
    public $email = "keerthana@gmail.com";
    public $gender = "Female";
    public $marks = "95";
}

$student_details = new Student();

echo "<h2>Student Details</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Field</th><th>Value</th></tr>";
echo "<tr><td>Name</td><td>{$student_details->name}</td></tr>";
echo "<tr><td>Age</td><td>{$student_details->age}</td></tr>";
echo "<tr><td>Class</td><td>{$student_details->class}</td></tr>";
echo "<tr><td>Roll No</td><td>{$student_details->rollNo}</td></tr>";
echo "<tr><td>Department</td><td>{$student_details->department}</td></tr>";
echo "<tr><td>Address</td><td>{$student_details->address}</td></tr>";
echo "<tr><td>Phone</td><td>{$student_details->phone}</td></tr>";
echo "<tr><td>Email</td><td>{$student_details->email}</td></tr>";
echo "<tr><td>Gender</td><td>{$student_details->gender}</td></tr>";
echo "<tr><td>Marks</td><td>{$student_details->marks}</td></tr>";
echo "</table>";
?>

</body>
</html>
