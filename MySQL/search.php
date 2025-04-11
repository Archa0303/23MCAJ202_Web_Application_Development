<?php
$conn = new mysqli("localhost", "root", "", "library");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_GET['search_title'];

$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Search Results</h2>";
    echo "<table border='1'>
            <tr>
                <th>Accession No</th>
                <th>Title</th>
                <th>Authors</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['accession_no']}</td>
                <td>{$row['title']}</td>
                <td>{$row['authors']}</td>
                <td>{$row['edition']}</td>
                <td>{$row['publisher']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No books found with that title.";
}

$conn->close();
?>
