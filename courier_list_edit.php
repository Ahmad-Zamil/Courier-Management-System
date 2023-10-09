<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 

$id = $_GET['id'];
$sql = "SELECT * FROM courier_package where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $category_name      = $row['category_name'];
        $branch_name      = $row['branch_name'];
        $status  = $row['status'];
        $pickup_type  = $row['pickup_type'];
        $sender_name  = $row['sender_name'];
        $s_phone  = $row['s_phone'];
        $s_address  = $row['s_address'];
        $r_name  = $row['r_name'];
        $r_phone  = $row['r_phone'];
        $r_address  = $row['r_address'];
        $paid_amount  = $row['paid_amount'];
        $thana  = $row['thana'];
        $district  = $row['district'];
        $division  = $row['division'];
        $currier_charge  = $row['currier_charge'];
    }
}
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Edit: Courier</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="courier_list_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">
                        <?php
                        $count = 0;
                        $sql = "SELECT * FROM courier_package where ((id='$id')&&(sender_branch='$branch')) ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $count++;
                        ?>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Product Category</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['category_name'] ?>" name="category_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Branch Name</strong></label>
                                        <div class="col-sm-9">
                                            <select class="form-control selectric" name="branch_name">
                                                <option value=""><?php echo $row['branch_name'] ?></option>
                                                <option> <?php echo $row['branch_name'] ?></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Status</strong></label>
                                        <div class="col-sm-9">
                                            <select class="form-control selectric" value="<?php echo $row['status'] ?>" name="status">
                                                <option>Normal</option>
                                                <option>Conditional</option>
                                            </select>
                                        </div>
                                    </div>

                                    <form action="package_input_store.php" method="post" enctype="multipart/form-data">

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><strong>Sender Name</strong></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $row['sender_name'] ?>" name="sender_name" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><strong>Phone Number</strong></label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" value="<?php echo $row['s_phone'] ?>" name="s_phone" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><strong>Sender Address</strong></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $row['s_address'] ?>" name="s_address">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><strong>Reciver Name</strong></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" value="<?php echo $row['r_name'] ?>" name="r_name" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><strong>Phone Number</strong></label>
                                            <div class="col-sm-9">
                                                <input type="number" class="form-control" value="<?php echo $row['r_phone'] ?>" name="r_phone" required>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label"><strong>Pick-Up Status</strong></label>
                                            <div class="col-sm-4">
                                                <label>
                                                    <input type="radio" id="yes" name="pickup_type" value="yes" onchange="displayQuestion(this.value)" />Branch
                                                </label>
                                            </div>
                                            <div class="col-sm-5">
                                                <label>
                                                    <input type="radio" id="no" name="pickup_type" value="no" onchange="displayQuestion(this.value)" />Home
                                                </label>
                                            </div>
                                        </div>



                                        <div id="yesQuestion" style="display:none;"><br />

                                        </div>

                                        <div id="noQuestion" style="display:none;"><br />
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label"><strong>Reciver Address</strong></label>
                                                <div class="col-sm-9">
                                                    <input type="text" class="form-control" value="<?php echo $row['r_address'] ?>" name="r_address">
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-2 col-form-label"><strong>Thana</strong></label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" value="<?php echo $row['thana'] ?>" name="thana">
                                                </div>
                                                <label class="col-sm-2 col-form-label"><strong>District</strong></label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" value="<?php echo $row['district'] ?>" name="district">
                                                </div>
                                                <label class="col-sm-2 col-form-label"><strong>Division</strong></label>
                                                <div class="col-sm-2">
                                                    <input type="text" class="form-control" value="<?php echo $row['division'] ?>" name="division">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label"><strong></strong></label>
                                            <div class="col-sm-3">
                                                <h6>Currier Charge: </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="number" class="form-control" value="<?php echo $row['currier_charge'] ?>" name="currier_charge">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-6 col-form-label"><strong></strong></label>
                                            <div class="col-sm-3">
                                                <h6>Payment: </h6>
                                            </div>
                                            <div class="col-sm-3">
                                                <input type="number" class="form-control" value="<?php echo $row['paid_amount'] ?>" name="paid_amount">
                                            </div>
                                        </div>
                                </div>

                        <?php }
                        } ?>



                        <div class="card-footer">
                            <button href="recipt.php" type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>