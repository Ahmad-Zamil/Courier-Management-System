<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM employee_list WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: employee_list.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
