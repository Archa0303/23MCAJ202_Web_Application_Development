<?php
$conn = new mysqli("localhost", "root", "archa@2003", "library"); 

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$title = $_POST['title'] ?? '';
$authors = $_POST['authors'] ?? '';
$edition = $_POST['edition'] ?? '';
$publisher = $_POST['publisher'] ?? '';

$stmt = $conn->prepare("INSERT INTO books (title, authors, edition, publisher) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $title, $authors, $edition, $publisher);

if ($stmt->execute()) {
    echo "Book added successfully!";
    echo "<a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

