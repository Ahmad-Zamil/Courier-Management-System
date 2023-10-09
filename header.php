<?php
include 'session.php';
include 'config.php';
include('login.php'); // Includes Login Script

$search=$_GET['search'];
if (!isset($_SESSION['login_user'])) {
    header("location: index.php"); // Redirecting To Profile Page
}
// include 'session.php';  
$sql = "SELECT * FROM employee_list where username='$login_session' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $branch = $row['branch'];
    }
}
// echo  $search      = ($_REQUEST['search']);
?>
<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">


    <title>CMS - Admin</title>


    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">


    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/css/app.min.css">
    <link rel="stylesheet" href="assets/bundles/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="assets/bundles/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="assets/bundles/jquery-selectric/selectric.css">


    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/components.css">


    <!-- Custom style CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">
    <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>



<body>

    <!-- <div class="loader"></div> -->


    <div id="app">

        <div class="main-wrapper main-wrapper-1">

            <div class="navbar-bg"></div>


            <nav class="navbar navbar-expand-lg main-navbar sticky">

                <div class="form-inline mr-auto">

                    <ul class="navbar-nav mr-3">

                        <li>
                            <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn">
                                <i data-feather="align-justify"></i>
                            </a>
                        </li>


                        <li>
                            <a href="#" class="nav-link nav-link-lg fullscreen-btn">
                                <i data-feather="maximize"></i>
                            </a>
                        </li>

                        <li>
                            <form class="form-inline mr-auto" method="Post" action="delivaryman_shipping.php">
                                <div class="search-element">
                                    <input class="form-control" type="search" placeholder="Search" name="search" value="<?php echo $search ?>" aria-label="Search" data-width="200">
                                    <button class="btn" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                </div>
                            </form>
                        </li>

                    </ul>

                </div>

            </nav>


            <div class="main-sidebar sidebar-style-2">

                <aside id="sidebar-wrapper">

                    <!-- ############################## LOGO ############################## -->
                    <div class="sidebar-brand">
                        <a href="index.php">
                            <img alt="image" src="assets/img/logo.png" class="header-logo" />
                            <span class="logo-name">Admin</span>
                        </a>
                    </div>


                    <!-- ############################## SIDEBAR ############################## -->
                    <ul class="sidebar-menu">

                        <li class="dropdown active">
                            <a href="index.php" class="nav-link">
                                <i data-feather="monitor"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>


                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Courier Package Details</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="package_input.php">Add New Courier</a></li>
                                <li><a class="nav-link" href="courier_list.php">New Courier List</a></li>
                                <li><a class="nav-link" href="courier_arrived.php">Courier Arrived</a></li>
                                <li><a class="nav-link" href="courier_delivered.php">Courier Delivered</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Shipping Details</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="shipping_list.php">Courier Package</a></li>
                                <li><a class="nav-link" href="branch_delivary_list.php">Branch Delivary List</a></li>
                                <li><a class="nav-link" href="home_delivary_list.php">Home Delivary List</a></li>
                                <li><a class="nav-link" href="shipping_details.php">Shipping Details</a></li>
                                <li><a class="nav-link" href="shipping_stuff_list.php">Shipping Stuffs</a></li>
                                <li><a class="nav-link" href="shipping_vehicle_list.php">Shipping Vehicle</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>HR Management</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="employee_list.php">Employees List</a></li>
                                <li><a class="nav-link" href="employee_branch_list.php">Employees List By Branch</a></li>
                                <li><a class="nav-link" href="branch_details.php">Branch Details</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="home"></i><span>Accounts</span></a>
                            <ul class="dropdown-menu">
                                <li><a class="nav-link" href="package_input.php">Daily Statement</a></li>
                                <li><a class="nav-link" href="courier_list.php">Monthly Statement</a></li>
                                <li><a class="nav-link" href="courier_arrived.php">Yearly Statement</a></li>
                                <li><a class="nav-link" href="courier_arrived.php">Branch Statement</a></li>
                            </ul>
                        </li>

                    </ul>

                </aside>

            </div>



            <!-- ############################## Main Content ############################## -->
            <div class="main-content">