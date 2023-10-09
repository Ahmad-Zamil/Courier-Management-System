<?php
include("config.php");
?>

<!DOCTYPE html>
<html>

<body>

    <div class="col-sm-3">

        <?php
        $q = intval($_GET['q']);
        mysqli_select_db($conn, "cms");
        $sql = "SELECT * FROM vehicle_list WHERE id = '" . $q . "'";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($result)) {

            echo "<lable>" . $row['vehicle_number'] . "</lable>";
        }
        echo "</table>";
        mysqli_close($conn);
        ?>

    </div>
</body>

</html>