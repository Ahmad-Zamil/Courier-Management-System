<?php include("config.php");

echo $id = $_GET['id'];

// sql to delete a record
$sql = "DELETE FROM vehicle_list WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("Location: shipping_vehicle_list.php");
} else {
    echo "Error deleting record: " . $conn->error;
}
