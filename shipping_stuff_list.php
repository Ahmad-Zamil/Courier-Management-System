<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 
?>

<section class="section">
    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Courier Arrived</h4>
                        <div class="card-header-action">
                            <form>
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <div class="input-group-btn">
                                        <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table class="table table-striped" id="sortable-table">
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                        <th>Image</th>
                                        <th>Phone</th>
                                        <th>NID</th>
                                        <th>Salary</th>
                                        <th>Branch</th>
                                        <th>Designation</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $count = 0;
                                    $sql = "SELECT * FROM employee_list where designation='Driver' ORDER BY id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $count++;
                                    ?>

                                            <tr>
                                                <td><?php echo $row['name'] ?></td>
                                                <td><img src="assets/image/<?php echo $row['image'] ?>" alt="Slider Image" width="80" height="80"></td>
                                                <td><?php echo $row['username'] ?></td>
                                                <td><?php echo $row['nid'] ?></td>
                                                <td><?php echo $row['salary'] ?></td>
                                                <td><?php echo $row['branch'] ?></td>
                                                <td><?php echo $row['designation'] ?></td>
                                                <td style="display: inline-flex;">
                                                    <style>
                                                        .custom_btn_info:hover {
                                                            color: white !important;
                                                        }
                                                    </style>
                                                    <a href="" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <form action="" method="post">
                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>

                                    <?php }
                                    } ?>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>