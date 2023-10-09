<?php include("config.php");

echo  $branch_name      = ($_REQUEST['branch_name']);
echo  $branch_phone  = ($_REQUEST['branch_phone']); 
echo  $branch_address  = ($_REQUEST['branch_address']); 
echo  $branch_manager_name  = ($_REQUEST['branch_manager_name']); 
echo  $branch_manager_phone  = ($_REQUEST['branch_manager_phone']); 

$msg = "";


$sql = "INSERT INTO branch (branch_name, branch_phone, branch_address, branch_manager_name, branch_manager_phone) VALUES ('$branch_name', '$branch_phone', '$branch_address', '$branch_manager_name', '$branch_manager_phone')";

if (mysqli_query($conn, $sql)) {
    header("Location: branch_details.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
