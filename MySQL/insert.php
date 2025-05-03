<?php
$conn = new mysqli("localhost", "root", "archa@2003", "library");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Safely get form data
$acc_no   = $_POST['accession_no'] ?? '';
$title    = $_POST['title'] ?? '';
$authors  = $_POST['authors'] ?? '';
$edition  = $_POST['edition'] ?? '';
$publisher= $_POST['publisher'] ?? '';

// Prepare and bind (avoid SQL injection)
$stmt = $conn->prepare("INSERT INTO books (accession_no, title, authors, edition, publisher) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("issss", $acc_no, $title, $authors, $edition, $publisher);

if ($stmt->execute()) {
    echo "Book inserted successfully.<br>"; 
    echo "<a href='index.html'>Go back</a>";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
