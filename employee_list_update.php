<?php include("config.php");

echo  $id          = $_GET['id'];
echo  $name      = ($_REQUEST['name']);
echo  $username  = ($_REQUEST['username']); 
echo  $nid  = ($_REQUEST['nid']); 
echo  $designation  = ($_REQUEST['designation']); 
echo  $salary  = ($_REQUEST['salary']); 
echo  $vehicle_number  = ($_REQUEST['vehicle_number']); 
echo  $branch  = ($_REQUEST['branch']); 


$msg = "";

// check if the user has clicked the button "UPLOAD" 
if (isset($_POST['uploadfile'])) {

    $filename = $_FILES["choosefile"]["name"];

    $tempname = $_FILES["choosefile"]["tmp_name"];

    $folder = "assets/image/" . $filename;

    // Add the image to the "image" folder"
    if (move_uploaded_file($tempname, $folder)) {

        $msg = "Image uploaded successfully";
    } else {

        $msg = "Failed to upload image";
    }
}

echo $filename;


$sql = "UPDATE  employee_list SET image='$filename', name='$name', username='$username', nid='$nid', designation='$designation', salary='$salary', vehicle_number='$vehicle_number', branch='$branch' WHERE id=$id";

if (mysqli_query($conn, $sql)) {
    header("Location: employee_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
