<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM slider WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: slider.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
