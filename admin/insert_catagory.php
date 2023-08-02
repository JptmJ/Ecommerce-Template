<!-- Insert Form -->
<?php include('../include/connect.php');

if (isset($_POST['cat_title'])) {
    $catagory_title = $_POST['cat_title'];

    // Duplicate Entries Solution
    $sel_query = "SELECT * FROM `catagories` WHERE catagory_title = '$catagory_title'";
    $result_select = mysqli_query($con, $sel_query);
    $number = mysqli_num_rows($result_select);
    if ($number > 0) {
        echo "<script>
                alert('Catagory Name $catagory_title Already Exists');
            </script>";
    } else {
        $in_query = "INSERT INTO `catagories` (catagory_title) VALUES ('$catagory_title')";
        $result = mysqli_query($con, $in_query);
        if ($result) {
            echo "<script>
                alert('Catagory Name $catagory_title Inserted Successfully');
            </script>";
        }
    }
}

?>

<form action="" method="post" class="mb-2">
    <div class="input-group mb-2">
        <span class="input-group-text" id="basic-addon1"><i class="fa fa-receipt"></i></span>
        <input type="text" class="form-control" name="cat_title" placeholder="Insert Catagory Name"
            aria-label="Catagory" aria-describedby="basic-addon1">
        <input type="submit" class="form-control text-light bg-dark" value="Insert Catagory">
    </div>
</form>