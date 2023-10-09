<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
// include("config.php");
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
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        <th>sl</th>
                                        <th>Sender Name</th>
                                        <th>Phone</th>
                                        <th>Pickup From</th>
                                        <th>Date</th>
                                        <th>Payment Status</th>
                                        <th>Status</th>
                                        <th>Shipping Status</th>
                                        <!-- <th>Details</th> -->
                                        <th>Action</th>

                                    </tr>

                                </thead>


                                <tbody>

                                    <?php
                                    $count = 0;
                                    $sql = "SELECT * FROM courier_package where shipping_status='2' ORDER BY id ASC";
                                    $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        // output data of each row
                                        while ($row = $result->fetch_assoc()) {
                                            $count++;
                                            $s_S = $row['shipping_status'];
                                            if ($s_S == 1) {
                                                $shipping_status = "Booked";
                                            }
                                            if ($s_S == 2) {
                                                $shipping_status = "Shipping";
                                            }
                                    ?>
                                            <tr>
                                                <td><?php echo $count ?></td>
                                                <td><?php echo $row['sender_name'] ?></td>
                                                <td><?php echo $row['s_phone'] ?></td>
                                                <td><?php echo $row['pickup_type'] ?></td>
                                                <td><?php echo $row['date'] ?></td>
                                                <td><?php echo $row['paid_amount'] ?></td>
                                                <td>
                                                    <div class="badge badge-success"><?php echo $row['status'] ?></div>
                                                </td>
                                                <td>
                                                    <div class="badge badge-success"><?php echo $shipping_status ?></div>
                                                </td>



                                                <td style="display: inline-flex;">
                                                    <style>
                                                        .custom_btn_info:hover {
                                                            color: white !important;
                                                        }
                                                    </style>
                                                    <a href="courier_send_details.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info" style="margin-right: 5px">Details</a>
                                                    <a href="courier_list_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                                                    <form action="courier_list_delete.php?id=<?php echo $row['id'] ?>" method="post">
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