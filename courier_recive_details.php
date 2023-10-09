<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");

$id = $_GET['id'];
//error_reporting(0); 
?>



<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Courier Shipping Details</h4>
      </div>


      <div class="card-body">

        <div class="form-group row">
          <label class="col-sm-5"><strong>Delivary-Man Name:</strong></label>
          <div class="col-sm-7">
            <label><strong>Hugagaaaa</strong></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-5"><strong>Delivary-Man Phone Number:</strong></label>
          <div class="col-sm-7">
            <label><strong>01*********</strong></label>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-5"><strong>Shipping Code:</strong></label>
          <div class="col-sm-7">
            <label><strong>#34553</strong></label>
          </div>
        </div>
        <div class="form-group row">
          <label class="col-sm-5"><strong>Due Amount:</strong></label>
          <div class="col-sm-7">
            <label><strong>300 BDT</strong></label>
          </div>
        </div>


        <?php

        $sql = "SELECT * FROM courier_package where id=$id ORDER BY id ASC";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {

        ?>

            <div>
              <a href="#" class="btn btn-primary">Confirm Delivary</a>
            </div>

        <?php }
        } ?>


      </div>
    </div>
  </div>
</div>






<?php

$sql = "SELECT * FROM courier_package where id=$id ORDER BY id ASC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while ($row = $result->fetch_assoc()) {

?>

    <div class="row">
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Sender Details</h4>
          </div>


          <div class="card-body">

            <div class="form-group row">
              <label class="col-sm-3"><strong>Sender Name:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['sender_name'] ?></strong></label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3"><strong>Sender Phone Number:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['s_phone'] ?></strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Sender Address:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['s_address'] ?></strong></label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3"><strong>Sending Date:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['date'] ?></strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Sending Status:</strong></label>
              <div class="col-sm-9">
                <label><strong>
                    <div class="badge badge-success"><?php echo $row['status'] ?></div>
                  </strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Pick-Up Type:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['pickup_type'] ?></strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Shipping Code:</strong></label>
              <div class="col-sm-9">
                <label><strong>#34553</strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Courier Charge:</strong></label>
              <div class="col-sm-9">
                <label><strong>600 BDT</strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Due Amount by Sender:</strong></label>
              <div class="col-sm-9">
                <label><strong>300 BDT</strong></label>
              </div>
            </div>

          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-6">
        <div class="card">
          <div class="card-header">
            <h4>Reciver Details</h4>
          </div>


          <div class="card-body">

            <div class="form-group row">
              <label class="col-sm-3"><strong>Reciver Name:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['r_name'] ?></strong></label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3"><strong>Reciver Phone Number:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['r_phone'] ?></strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Reciver Address:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['r_address'] ?></strong></label>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-3"><strong>Reciving Date:</strong></label>
              <div class="col-sm-9">
                <label><strong></strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Reciving Status:</strong></label>
              <div class="col-sm-9">
                <label><strong>
                    <div class="badge badge-success"><?php echo $row['status'] ?></div>
                  </strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Pick-Up Type:</strong></label>
              <div class="col-sm-9">
                <label><strong><?php echo $row['pickup_type'] ?></strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Shipping Code:</strong></label>
              <div class="col-sm-9">
                <label><strong>#34553</strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Courier Charge:</strong></label>
              <div class="col-sm-9">
                <label><strong>600 BDT</strong></label>
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-3"><strong>Due Amount by Sender:</strong></label>
              <div class="col-sm-9">
                <label><strong>300 BDT</strong></label>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>

<?php }
} ?>


<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>