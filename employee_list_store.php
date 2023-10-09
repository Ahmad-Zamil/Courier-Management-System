<?php include("config.php");

echo  $name      = ($_REQUEST['name']);
echo  $username  = ($_REQUEST['username']); 
echo  $nid  = ($_REQUEST['nid']); 
echo  $designation  = ($_REQUEST['designation']); 
echo  $salary  = ($_REQUEST['salary']); 
echo  $vehicle_number  = ($_REQUEST['vehicle_number']); 
echo  $branch  = ($_REQUEST['branch']); 
echo  $password  = ($_REQUEST['password']); 

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


$sql = "INSERT INTO employee_list (image, name, username, nid, designation, salary, vehicle_number, branch, password) VALUES ('$filename', '$name', '$username', '$nid', '$designation', '$salary', '$vehicle_number', '$branch', '$password')";

if (mysqli_query($conn, $sql)) {
    header("Location: employee_list.php");
} else {
    $error = mysqli_error($conn);
    echo "ERROR: Could not able to execute  $error";
}
