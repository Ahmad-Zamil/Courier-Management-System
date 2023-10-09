<!-- ############################## Header Section ############################## -->
<?php
include("header.php");
include("config.php");
//error_reporting(0); 
?>

<section class="section">
    <div class="section-body">


        <div class="row">
            <?php
            $count = 0;
            $sql = "SELECT * FROM courier_package ORDER BY id ASC";
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
                    <div class="col-12 col-sm-6 col-md-6 col-lg-3">

                        <article class="article">
                            <div class="article-details">
                                <h4><?php echo $row['r_name'] ?></h4>
                                <p><?php echo $row['r_phone'] ?></p>
                                <p>Type: <?php echo $row['status'] ?></p>
                                <p class="badge badge-success"><?php echo $row['pickup_type'] ?></p>
                                <p>Address: <?php echo $row['r_address'] ?></p>
                                <p><?php echo $row['date'] ?></p>
                                <div class="article-cta">
                                    <a href="shipping_order_details.php" class="btn btn-primary">Detail</a>
                                </div>
                            </div>
                        </article>

                    </div>
            <?php }
            } ?>
        </div>


    </div>
</section>

<!-- ############################## Footer Section ############################## -->
<?php include("footer.php"); ?>