<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
$search      = ($_REQUEST['search']);
//error_reporting(0); 
?>


<div class="row">
  <div class="col-12 col-md-12 col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4>Shipping</h4>
      </div>


      <div class="card-body">


        <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

          <thead>

            <tr>
              <th>sl</th>
              <th>Sender Name</th>
              <th>Phone</th>
              <th>Pickup From</th>
              <th>Date</th>
              <th>Payment Status</th>
              <th>Status</th>
              <th>Shipping Status</th>
              <!-- <th>Details</th> -->
              <th>Action</th>

            </tr>

          </thead>


          <?php
          $count = 0;
          $sql = "SELECT * FROM courier_package where ((branch_name='$search')&&(shipping_status =1)) ORDER BY id ASC";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
              $count++;
              $s_S = $row['shipping_status'];
              if ($s_S == 1) {
                $shipping_status = "Booked";
              }
          ?>
              <tr>
                <td><?php echo $count ?></td>
                <td><?php echo $row['sender_name'] ?></td>
                <td><?php echo $row['s_phone'] ?></td>
                <td><?php echo $row['pickup_type'] ?></td>
                <td><?php echo $row['date'] ?></td>
                <td><?php echo $row['paid_amount'] ?></td>
                <td>
                  <div class="badge badge-success"><?php echo $row['status'] ?></div>
                </td>
                <td>
                  <div class="badge badge-success"><?php echo $row['shipping_status'] ?></div>
                </td>



                <td style="display: inline-flex;">
                  <style>
                    .custom_btn_info:hover {
                      color: white !important;
                    }
                  </style>
                  <a href="courier_send_details.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info" style="margin-right: 5px">Details</a>
                  <a href="courier_list_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-icon btn-info custom_btn_info">Edit</a>
                  <form action="courier_list_delete.php?id=<?php echo $row['id'] ?>" method="post">
                    <button type="submit" class="btn btn-icon btn-danger" style="margin-left: 5px">Delete</button>
                  </form>
                </td>

              </tr>
          <?php }
          } ?>

          </tbody>
        </table>


        <section>
          <form action="delivaryman_shipping_update.php?search=<?php echo $search?>" method="POST">
            <div class="form-group row">
              <label class="col-sm-2 col-form-label"><strong>Assigned To</strong></label>
              <div class="col-sm-3">
                <select name="driver_name" onchange="showUser(this.value)" class="form-control selectric" id="fetch">
                  <option value="">Select a person:</option>
                  <?php
                  $sql = "SELECT * FROM vehicle_list ORDER BY id ASC";
                  $result = $conn->query($sql);
                  if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {

                  ?>
                      <option value="<?php echo $row['id'] ?>"><?php echo $row['driver_name'] ?></option>
                  <?php }
                  } ?>
                </select>
              </div>
              <label class="col-sm-2 col-form-label"><strong>Vehicle Number</strong></label>

              
              <div class="col-sm-3">
              <!-- <input type="text" class="form-control" value=" " name="vehicle_number" id="fetch"> -->
                <select class="form-control" name="vehicle_number" id="fetch">
                  <option id="txtHint"></option>
                </select>
              </div>
              <div class="col-sm-2">
                <button type="submit" class="btn btn-primary" name="uploadfile">Submit</button>
              </div>
            </div>
          </form>
        </section>
      </div>

    </div>
  </div>
</div>



<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>

<script>
  function showUser(str) {
    if (str == "") {
      document.getElementById("txtHint").innerHTML = "";
      return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "getuser.php?q=" + str, true);
    xmlhttp.send();
  }
</script>