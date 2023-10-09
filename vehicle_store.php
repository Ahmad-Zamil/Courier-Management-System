<?php include("config.php");

echo  $vehicle_number      = ($_REQUEST['vehicle_number']);
echo  $driver_name  = ($_REQUEST['driver_name']); 
echo  $stuff_name  = ($_REQUEST['stuff_name']); 

$msg = "";


$sql = "INSERT INTO vehicle_list (vehicle_number, driver_name, stuff_name) VALUES ('$vehicle_number', '$driver_name', '$stuff_name')";

if (mysqli_query($conn, $sql)) {
    header("Location: shipping_vehicle_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
