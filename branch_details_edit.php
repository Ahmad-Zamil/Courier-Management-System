<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 

$id = $_GET['id'];
$sql = "SELECT * FROM branch where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image      = $row['branch_name'];
        $title      = $row['branch_phone'];
        $paragraph  = $row['branch_address'];
        $paragraph  = $row['branch_manager_name'];
        $paragraph  = $row['branch_manager_phone'];
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
                    <form action="branch_details_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">


                        <?php
                        $count = 0;
                        $sql = "SELECT * FROM branch ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                $count++;
                        ?>
                                <div class="card-body">

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Branch Name</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['branch_name'] ?>" name="branch_name" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Branch Phone</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['branch_phone'] ?>" name="branch_phone" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Branch Address</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['branch_address'] ?>" name="branch_address" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Branch Manager</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['branch_manager_name'] ?>" name="branch_manager_name" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Manager Phone</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['branch_manager_phone'] ?>" name="branch_manager_phone" required>
                                        </div>
                                    </div>


                                </div>

                        <?php }
                        } ?>



                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="uploadfile">Update</button>
                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</section>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>