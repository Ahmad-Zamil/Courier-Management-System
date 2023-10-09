<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
// include("config.php");
//error_reporting(0); 
?>



<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Slider</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="employee_list_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Upload an image</strong></label>
                                <div class="col-sm-9">
                                    <input type="file" class="default" value="" name="choosefile" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="name" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" value="" name="username" required>
                                        </div>
                                    </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>NID</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" value="" name="nid" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Salary</strong></label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" value="" name="salary" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="branch">
                                        <?php
                                        $count = 0;
                                        $sql = "SELECT * FROM branch ORDER BY id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $count++;
                                        ?>
                                                <option><?php echo $row['branch_name'] ?></option>

                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Designation</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="designation" required>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vehicle Number</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="vehicle_number">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Password</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="password">
                                </div>
                            </div>

                        </div>


                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>