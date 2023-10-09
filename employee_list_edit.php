<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 

$id = $_GET['id'];
$sql = "SELECT * FROM employee_list where id=$id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        $image      = $row['image'];
        $name      = $row['name'];
        $username      = $row['username'];
        $nid  = $row['nid'];
        $designation  = $row['designation'];
        $salary  = $row['salary'];
        $vehicle_number  = $row['vehicle_number'];
        $branch  = $row['branch'];
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
                        <h4>Edit: Employee</h4>
                    </div>


                    <!-- ############################## Form ############################## -->
                    <form action="employee_list_update.php?id=<?php echo $id ?>" method="post" enctype="multipart/form-data">

                        <?php
                        $count = 0;
                        $sql = "SELECT * FROM employee_list where id=$id ORDER BY id ASC";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row<?php echo $row['name']
                            while ($row = $result->fetch_assoc()) {
                                $count++;
                        ?>
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
                                            <input type="text" class="form-control" value="<?php echo $row['name'] ?>" name="name" required>
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Phone</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" value="<?php echo $row['username'] ?>" name="username" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>NID</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" value="<?php echo $row['nid'] ?>" name="nid" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Salary</strong></label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" value="<?php echo $row['salary'] ?>" name="salary" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Designation</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['designation'] ?>" name="designation" required>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label"><strong>Vehicle Number</strong></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" value="<?php echo $row['vehicle_number'] ?>" name="vehicle_number">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                <label class="col-sm-3 col-form-label"><strong>Branch</strong></label>
                                <div class="col-sm-9">
                                    <select class="form-control selectric" value="<?php echo $row['branch'] ?>" name="branch">
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



                                </div>
                        <?php }} ?>


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