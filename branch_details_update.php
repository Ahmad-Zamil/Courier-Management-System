<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $branch_name      = ($_REQUEST['branch_name']);
echo  $branch_phone  = ($_REQUEST['branch_phone']); 
echo  $branch_address  = ($_REQUEST['branch_address']); 
echo  $branch_manager_name  = ($_REQUEST['branch_manager_name']); 
echo  $branch_manager_phone  = ($_REQUEST['branch_manager_phone']); 


$msg = "";

$sql = "UPDATE  branch SET branch_name='$branch_name', branch_phone='$branch_phone', branch_address='$branch_address', branch_manager_name='$branch_manager_name', branch_manager_phone='$branch_manager_phone' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: branch_details.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
