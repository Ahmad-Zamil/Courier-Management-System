<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">



                    <div class="card-header">
                        <h6>Product Details</h6>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="package_input_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Product Category</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="category_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch Name</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="branch_name">
                                        <option value="">Select your Branch</option>
                                        <?php

                                        $sql = "SELECT * FROM branch where branch_name!='$branch' ORDER BY id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <option> <?php echo $row['branch_name'] ?></option>
                                        <?php }
                                        } ?>

                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Status</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="status">
                                        <option>Normal</option>
                                        <option>Conditional</option>
                                    </select>
                                </div>
                            </div>


                            <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Date</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control datemask" placeholder="YYYY/MM/DD" name="date">
                                </div>
                            </div> -->

                            <!-- <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Reciving Address</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control datemask" name="rec_address">
                                </div>
                            </div> -->




                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Sender Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="sender_name" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone Number</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="s_phone" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Sender Address</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="s_address">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Reciver Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="r_name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Phone Number</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="r_phone" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Payment Status</strong></label>
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
                                        <input type="text" class="form-control" name="r_address">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label"><strong>Thana</strong></label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="thana">
                                    </div>
                                    <label class="col-sm-2 col-form-label"><strong>District</strong></label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="district">
                                    </div>
                                    <label class="col-sm-2 col-form-label"><strong>Division</strong></label>
                                    <div class="col-sm-2">
                                        <input type="text" class="form-control" name="division">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label"><strong></strong></label>
                                <div class="col-sm-3">
                                    <h6>Currier Charge: </h6>
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control"  name="currier_charge">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-6 col-form-label"><strong></strong></label>
                                <div class="col-sm-3">
                                    <h6>Payment: </h6>
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" class="form-control" value="paid_amount" name="paid_amount">
                                </div>
                            </div>

                        </div>





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