<!-- ############################## Header Section ############################## -->
<?php include("header.php");
include("config.php");
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <!-- ############################## Table Name ############################## -->
                    <div class="card-header">
                        <h4>Branch Details</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <!-- ############################## Add New ############################## -->
                            <div class="text-right">
                                <a href="branch_create.php" class="btn btn-icon icon-left btn-primary"><i class="fa-solid fa-plus"></i> Add New</a>
                            </div>


                            <!-- ############################## Table ############################## -->
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>

                                        <th>SL</th>
                                        <th>Branch Name</th>
                                        <th>Branch Phone</th>
                                        <th>Address</th>
                                        <th>Branch Manager Name</th>
                                        <th>Branch Manager Phone</th>
                                        <th>Manager Details</th>
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php
                                    $count = 0;
                                    $sql = "SELECT * FROM branch ORDER BY id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $count++;
                                    ?>

                                            <tr>

                                                <td><?php echo $count?></td>
                                                <td><?php echo $row['branch_name'] ?></td>
                                                <td><?php echo $row['branch_phone'] ?></td>
                                                <td><?php echo $row['branch_address'] ?></td>
                                                <td><?php echo $row['branch_manager_name'] ?></td>
                                                <td><?php echo $row['branch_manager_phone'] ?></td>
                                                <td>
                                                    <style>
                                                        .custom_btn_info:hover {
                                                            color: white !important;
                                                        }
                                                    </style>
                                                    <a href="courier_send_details.php" class="btn btn-icon btn-info custom_btn_info">Details</a>
                                                </td>


                                                <td style="display: inline-flex;">
                                                    <style>
                                                        .custom_btn_info:hover {
                                                            color: white !important;
                                                        }
                                                    </style>
                                                    <a href="branch_details_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <form action="branch_details_delete.php?id=<?php echo $row['id'] ?>" method="post">
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