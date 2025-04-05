<!DOCTYPE html>
<html>
<head>
    <title>Student Data</title>
    <style>
        table {
            border-collapse: collapse;
            width: 60%;
            margin: 20px auto;
            font-family: Arial;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Student List</h2>

<?php
// Step 1: Connect to database
$servername = "localhost";
$username = "root";     
$password = "";          
$dbname = "webdb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Step 2: Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Step 3: Run query
$sql = "SELECT * FROM student";
$result = mysqli_query($conn, $sql);

// Step 4: Display data
if (mysqli_num_rows($result) > 0) {
    echo "<table>
            <tr><th>ID</th><th>Name</th><th>Email</th></tr>";
    
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>".$row["rno"]."</td>
                <td>".$row["name"]."</td>
                <td>".$row["email"]."</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No data found</p>";
}

// Step 5: Close connection
mysqli_close($conn);
?>

</body>
</html>
