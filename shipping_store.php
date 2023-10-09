<?php include("config.php");
$status="Shipping";

echo  $delivaryman_name      = ($_REQUEST['delivaryman_name']);
echo  $delivaryman_phone  = ($_REQUEST['delivaryman_phone']);
echo  $vehicle_number  = ($_REQUEST['vehicle_number']);
echo  $courier_code  = ($_REQUEST['courier_code']);
$shipping_status=2;
$msg = "";

$sql = "INSERT INTO shipping_details (delivaryman_name, delivaryman_phone, vehicle_number, courier_code) VALUES ('$delivaryman_name', '$delivaryman_phone', '$vehicle_number', '$courier_code')";

if (mysqli_query($conn, $sql)) {
    header("Location: courier_list.php");
} else {    
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
