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
        $vehicle_number      = $row['vehicle_number'];
        $stuff_name  = $row['stuff_name'];
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
                    <form action="vehicle_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <?php
                        $sql = "SELECT * FROM 	vehicle_list where id=$id  order by id desc";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {

                        ?>
                                <div class="card-body">


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Vehicle_number</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['vehicle_number'] ?>" name="vehicle_number" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Stuff Name</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['stuff_name'] ?>" name="stuff_name" required>
                                        </div>
                                    </div>
                            <?php }
                        } ?>

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