<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $category_name      = ($_REQUEST['category_name']);
echo  $branch_name  = ($_REQUEST['branch_name']);
echo  $status  = ($_REQUEST['status']);
// echo  $date  = ($_REQUEST['date']);
// echo  $date  = ($_REQUEST['rec_address']);
echo  $pickup_type  = ($_REQUEST['pickup_type']);
echo  $sender_name  = ($_REQUEST['sender_name']);
echo  $s_phone  = ($_REQUEST['s_phone']);
echo  $s_address  = ($_REQUEST['s_address']);
echo  $r_name  = ($_REQUEST['r_name']);
echo  $r_phone  = ($_REQUEST['r_phone']);
echo  $r_address  = ($_REQUEST['r_address']);
echo  $paid_amount  = ($_REQUEST['paid_amount']);
echo  $thana  = ($_REQUEST['thana']);
echo  $district  = ($_REQUEST['district']);
echo  $division  = ($_REQUEST['division']);
echo  $currier_charge  = ($_REQUEST['currier_charge']);


$msg = "";

$sql = "UPDATE  courier_package SET category_name='$category_name', branch_name='$branch_name', status='$status', pickup_type='$pickup_type', sender_name='$sender_name', sender_name='$sender_name', s_phone='$s_phone', s_address='$s_address', r_name='$r_name', r_phone='$r_phone', r_address='$r_address', paid_amount='$paid_amount', thana='$thana', district='$district', division='$division', currier_charge='$currier_charge' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: courier_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
