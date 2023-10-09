<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");

//error_reporting(0); 
?>

<div class="col-12 col-sm-12 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4>Currier Arrived</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-2">
                    <ul class="nav nav-pills flex-column" id="myTab4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab4" data-toggle="tab" href="#all" role="tab" aria-controls="home" aria-selected="true">All Received</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " id="home-tab4" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home Delivery</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" id="home-tab4" data-toggle="tab" href="#home4" role="tab" aria-controls="home" aria-selected="true">Normal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab4" data-toggle="tab" href="#profile4" role="tab" aria-controls="profile" aria-selected="false">Conditional</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab4" data-toggle="tab" href="#contact4" role="tab" aria-controls="contact" aria-selected="false">Due</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-sm-12 col-md-10">
                    <div class="tab-content no-padding" id="myTab2Content">

                        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="home-tab4">
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Curriers</h4>
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
                                                        <table class="table table-striped" id="sortable-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL No</th>
                                                                    <th>Category</th>
                                                                    <th>Sender Name</th>
                                                                    <th>Sender Phone</th>
                                                                    <th>Receiver Name</th>
                                                                    <th>Receiver Phone</th>
                                                                    <th>Status</th>
                                                                    <th>Due</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $count = 0;
                                                                $sql = "SELECT * FROM courier_package where branch_name='$branch' ORDER BY id ASC";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        $count++;
                                                                       
                                                                ?>
                                                                        <tr>

                                                                            <td><?php echo $count?></td>
                                                                            <td><?php echo $row['category_name'];?></td>
                                                                            <td><?php echo $row['sender_name'];?></td>
                                                                            <td><?php echo $row['s_phone'];?></td>
                                                                            <td><?php echo $row['r_name'];?></td>
                                                                            <td><?php echo $row['r_phone'];?></td>
                                                                            <td><?php echo $row['status'];?></td>
                                                                            <td><?php echo $row['due_amount'];?></td>
                                                                            <!-- <td>
                                                                                <div class="badge badge-success">Completed</div>
                                                                            </td> -->
                                                                            <td><a href="courier_recive_details.php" class="btn btn-primary">Detail</a></td>
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

                        </div>



                        <div class="tab-pane fade show" id="home" role="tabpanel" aria-labelledby="home-tab4">
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Curriers</h4>
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
                                                    <table class="table table-striped" id="sortable-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL No</th>
                                                                    <th>Category</th>
                                                                    <th>Sender Name</th>
                                                                    <th>Sender Phone</th>
                                                                    <th>Receiver Name</th>
                                                                    <th>Receiver Phone</th>
                                                                    <th>Status</th>
                                                                    <th>Due</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $count = 0;
                                                                $sql = "SELECT * FROM courier_package where ((branch_name='$branch')&&(status='home delivery')) ORDER BY id ASC";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        $count++;
                                                                       
                                                                ?>
                                                                        <tr>

                                                                            <td><?php echo $count?></td>
                                                                            <td><?php echo $row['category_name'];?></td>
                                                                            <td><?php echo $row['sender_name'];?></td>
                                                                            <td><?php echo $row['s_phone'];?></td>
                                                                            <td><?php echo $row['r_name'];?></td>
                                                                            <td><?php echo $row['r_phone'];?></td>
                                                                            <td><?php echo $row['status'];?></td>
                                                                            <td><?php echo $row['due_amount'];?></td>
                                                                            <!-- <td>
                                                                                <div class="badge badge-success">Completed</div>
                                                                            </td> -->
                                                                            <td><a href="courier_recive_details.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Detail</a></td>
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

                        </div>


                        <div class="tab-pane fade show" id="home4" role="tabpanel" aria-labelledby="home-tab4">
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Curriers</h4>
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
                                                    <table class="table table-striped" id="sortable-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL No</th>
                                                                    <th>Category</th>
                                                                    <th>Sender Name</th>
                                                                    <th>Sender Phone</th>
                                                                    <th>Receiver Name</th>
                                                                    <th>Receiver Phone</th>
                                                                    <th>Status</th>
                                                                    <th>Due</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $count = 0;
                                                                $sql = "SELECT * FROM courier_package where ((branch_name='$branch')&&(status='Normal')) ORDER BY id ASC";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        $count++;
                                                                       
                                                                ?>
                                                                        <tr>

                                                                            <td><?php echo $count?></td>
                                                                            <td><?php echo $row['category_name'];?></td>
                                                                            <td><?php echo $row['sender_name'];?></td>
                                                                            <td><?php echo $row['s_phone'];?></td>
                                                                            <td><?php echo $row['r_name'];?></td>
                                                                            <td><?php echo $row['r_phone'];?></td>
                                                                            <td><?php echo $row['status'];?></td>
                                                                            <td><?php echo $row['due_amount'];?></td>
                                                                            <!-- <td>
                                                                                <div class="badge badge-success">Completed</div>
                                                                            </td> -->
                                                                            <td><a href="courier_recive_details.php" class="btn btn-primary">Detail</a></td>
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

                        </div>





                        <div class="tab-pane fade" id="profile4" role="tabpanel" aria-labelledby="profile-tab4">
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Curriers</h4>
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
                                                    <table class="table table-striped" id="sortable-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL No</th>
                                                                    <th>Category</th>
                                                                    <th>Sender Name</th>
                                                                    <th>Sender Phone</th>
                                                                    <th>Receiver Name</th>
                                                                    <th>Receiver Phone</th>
                                                                    <th>Status</th>
                                                                    <th>Due</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $count = 0;
                                                                $sql = "SELECT * FROM courier_package where ((branch_name='$branch')&&(status='Conditional')) ORDER BY id ASC";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        $count++;
                                                                       
                                                                ?>
                                                                        <tr>

                                                                            <td><?php echo $count?></td>
                                                                            <td><?php echo $row['category_name'];?></td>
                                                                            <td><?php echo $row['sender_name'];?></td>
                                                                            <td><?php echo $row['s_phone'];?></td>
                                                                            <td><?php echo $row['r_name'];?></td>
                                                                            <td><?php echo $row['r_phone'];?></td>
                                                                            <td><?php echo $row['status'];?></td>
                                                                            <td><?php echo $row['due_amount'];?></td>
                                                                            <!-- <td>
                                                                                <div class="badge badge-success">Completed</div>
                                                                            </td> -->
                                                                            <td><a href="courier_recive_details.php" class="btn btn-primary">Detail</a></td>
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

                        </div>
                        <div class="tab-pane fade" id="contact4" role="tabpanel" aria-labelledby="contact-tab4">
                            <section class="section">
                                <div class="section-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4>Curriers</h4>
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
                                                    <table class="table table-striped" id="sortable-table">
                                                            <thead>
                                                                <tr>
                                                                    <th>SL No</th>
                                                                    <th>Category</th>
                                                                    <th>Sender Name</th>
                                                                    <th>Sender Phone</th>
                                                                    <th>Receiver Name</th>
                                                                    <th>Receiver Phone</th>
                                                                    <th>Status</th>
                                                                    <th>Due</th>

                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                                                $count = 0;
                                                                $sql = "SELECT * FROM courier_package where ((branch_name='$branch')&&(due_amount>0)) ORDER BY id ASC";
                                                                $result = $conn->query($sql);
                                                                if ($result->num_rows > 0) {
                                                                    // output data of each row
                                                                    while ($row = $result->fetch_assoc()) {
                                                                        $count++;
                                                                       
                                                                ?>
                                                                        <tr>

                                                                            <td><?php echo $count?></td>
                                                                            <td><?php echo $row['category_name'];?></td>
                                                                            <td><?php echo $row['sender_name'];?></td>
                                                                            <td><?php echo $row['s_phone'];?></td>
                                                                            <td><?php echo $row['r_name'];?></td>
                                                                            <td><?php echo $row['r_phone'];?></td>
                                                                            <td><?php echo $row['status'];?></td>
                                                                            <td><?php echo $row['due_amount'];?></td>
                                                                            <!-- <td>
                                                                                <div class="badge badge-success">Completed</div>
                                                                            </td> -->
                                                                            <td><a href="courier_recive_details.php" class="btn btn-primary">Detail</a></td>
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

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>