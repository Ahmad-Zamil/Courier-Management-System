<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $vehicle_number      = ($_REQUEST['vehicle_number']);
echo  $stuff_name  = ($_REQUEST['stuff_name']); 

$msg = "";

$sql = "UPDATE  vehicle_list SET vehicle_number='$vehicle_number', stuff_name='$stuff_name' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: shipping_vehicle_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
