<!-- Insert Form -->
<?php include('../include/connect.php');

if (isset($_POST['brand_title'])) {
    $brand_title = $_POST['brand_title'];

    // Duplicate Entries Solution
    $sel_query = "SELECT * FROM `brands` WHERE brand_title = '$brand_title'";
    $result_select = mysqli_query($con, $sel_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>
                alert('Brand Name $brand_title Already Exists');
            </script>";
    } else {
        $in_query = "INSERT INTO `brands` (brand_title) VALUES ('$brand_title')";
        $result = mysqli_query($con, $in_query);
        if ($result) {
            echo "<script>
                alert('Brand Name $brand_title Inserted Successfully');
            </script>";
        }
    }
}

?>

<form action="" method="post" class="mb-2">
    <div class="input-group mb-2">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-receipt"></i></span>
        <input type="text" class="form-control" name="brand_title" placeholder="Insert Brand Name" aria-label="Brand"
            aria-describedby="basic-addon1">
        <input type="submit" class="form-control text-light bg-dark" value="Insert Brand">
    </div>
</form>