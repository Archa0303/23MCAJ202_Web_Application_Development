<!DOCTYPE html>
<html>
<head>
    <title>Student Array</title>
</head>
<body>

<?php
// Step 1: Create an array of student names
$students = array("John", "Bob", "Zara", "Alice", "Jacob");

// Step 2: Display the original array
echo "<h3>Original Array:</h3>";
print_r($students  );

// Step 3: Sort in ascending order using asort()
asort($students);
echo "<h3>Sorted in Ascending Order :</h3>";
print_r($students);

// Step 4: Sort in descending order using arsort()
arsort($students);
echo "<h3>Sorted in Descending Order :</h3>";
print_r($students);
?>

</body>
</html>
