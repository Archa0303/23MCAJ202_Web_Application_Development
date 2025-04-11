<?php
$conn = new mysqli("localhost", "root", "", "libraby");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$acc_no = $_POST['accession_no'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

$sql = "INSERT INTO books (accession_no, title, authors, edition, publisher)
        VALUES ('$acc_no', '$title', '$authors', '$edition', '$publisher')";

if ($conn->query($sql) === TRUE) {
    echo "Book inserted successfully."; 
    echo"<a href='index.html'>Go back</a>";
}
 else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
