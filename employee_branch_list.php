<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
// include("config.php");
//error_reporting(0); 
// $branch=$_GET['branch'];
?>


<section class="section">
    <div class="section-body">
        <div class="row">
            <?php
            $sql = "SELECT * FROM branch ORDER BY id ASC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    $branch = $row['branch_name'];
            ?>
                    <div class="col-6 col-sm-3 col-md-3 col-lg-2">
                        <article class="article">
                            <a class="nav-link" href="employee_branch_list.php?branch=<?php echo $row['branch_name'] ?>"><?php echo $row['branch_name'] ?></a>
                        </article>
                    </div>
            <?php continue;
                }
            } ?>
        </div>

    </div>
</section>


<div class="tab-pane fade show active" id="branch_name" role="tabpanel" aria-labelledby="home-tab4">
    <div class="col-12 col-sm-12 col-lg-12">
        <div class="card-body">
            <div class="row">
                <section class="section">

                    <div class="section-body">

                        <div class="row">

                            <div class="col-12">

                                <div class="card">

                                    <!-- ############################## Table Name ############################## -->
                                    <div class="card-header">
                                        <h4>Employee List</h4>
                                    </div>


                                    <div class="card-body">

                                        <div class="table-responsive">

                                            <!-- ############################## Add New ############################## -->
                                            <!-- <div class="text-right">
                                                <a href="package_input.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                                            </div> -->


                                            <!-- ############################## Table ############################## -->
                                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

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
                                                    $sql = "SELECT * FROM employee_list  ORDER BY id ASC";
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
                                                                    <a href="employee_list_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                                    <form action="employee_list_delete.php?id=<?php echo $row['id'] ?>" method="post">
                                                                        <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                                                                    </form>
                                                                </td>
                                                            </tr>

                                                    <?php }
                                                    } ?>


                                                </tbody>

                                            </table>
                                            <p></p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </section>

            </div>
        </div>
    </div>
</div>





<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>