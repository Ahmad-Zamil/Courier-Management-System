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

                    <!-- ############################## Form Name ############################## -->
                    <div class="card-header">
                        <h4>Form: Slider</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="vehicle_store.php" method="post" enctype="multipart/form-data">

                        <div class="card-body">


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vehicle_number</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="vehicle_number" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Driver Name</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="driver_name">
                                        <?php
                                        $count = 0;
                                        $sql = "SELECT * FROM employee_list ORDER BY id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                $count++;
                                        ?>
                                                <option><?php echo $row['name'] ?></option>

                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Stuff Name</strong></label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" value="" name="stuff_name" required>
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