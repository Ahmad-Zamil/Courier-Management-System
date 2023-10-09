<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 

$id = $_GET['id'];
$sql = "SELECT * FROM vehicle_list where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image      = $row['vehicle_number'];
        $title      = $row['driver_name'];
        $paragraph  = $row['stuff_name'];
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
                        <h4>Edit: Slider</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="assign_vehicle_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Vehicle_number</strong></label>
                                <?php
                                $sql = "SELECT * FROM 	vehicle_list where id=$id  order by id desc";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {

                                ?>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['vehicle_number'] ?>" name="vehicle_number" required>
                                        </div>
                                <?php }
                                } ?>
                            </div>



                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Driver Name</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" name="driver_name">
                                        <option value="">Select Driver Name</option>
                                        <?php

                                        $sql = "SELECT * FROM employee_list where designation='driver' ORDER BY id ASC";
                                        $result = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                        ?>
                                                <option> <?php echo $row['name'] . "-" . $row['username'] ?></option>
                                        <?php }
                                        } ?>

                                    </select>
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