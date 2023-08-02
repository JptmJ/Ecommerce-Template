<!-- Connection File -->
<?php include("../include/connect.php");

// Insert Data Into Database
if (isset($_POST['insert_product'])) {

    $product_title = $_POST['product_title'];
    $product_description = $_POST['product_description'];
    $product_keyword = $_POST['product_keyword'];
    $product_catagories = $_POST['product_catagories'];
    $product_brands = $_POST['product_brands'];
    $product_price = $_POST['product_price'];
    $product_status = 'true';

    // Access or Store The Images 
    $product_image1 = $_FILES['product_image1']['name'];
    $product_image2 = $_FILES['product_image2']['name'];
    $product_image3 = $_FILES['product_image3']['name'];

    // Access or Store The Images' Temp Name 
    $temp_image1 = $_FILES['product_image1']['tmp_name'];
    $temp_image2 = $_FILES['product_image2']['tmp_name'];
    $temp_image3 = $_FILES['product_image3']['tmp_name'];

    // Check The Empty Field Condition
    if ($product_title == '' or $product_description == '' or $product_keyword == '' or $product_catagories == '' or $product_brands == '' or $product_price == '' or $product_image1 == '' or $product_image2 == '' or $product_image3 == '') {
        echo "<script>alert('Please Fill The All Available Fields')</script>";
        exit();
    } else {
        move_uploaded_file($temp_image1, "product_images/$product_image1");
        move_uploaded_file($temp_image2, "product_images/$product_image2");
        move_uploaded_file($temp_image3, "product_images/$product_image3");

        // Insert Query
        $in_product = "INSERT INTO `products`(product_title, product_description, product_keyword, catagory_id, brand_id, product_image1, product_image2, product_image3, product_price, date, status) VALUES ('$product_title','$product_description','$product_keyword','$product_catagories','$product_brands','$product_image1','$product_image2','$product_image3','$product_price',NOW(),'$product_status')";
        $result_query = mysqli_query($con, $in_product);
        if ($result_query) {
            echo "<script>alert('Product Inserted Successfully !')</script>";
        }else{
            echo "<script>alert('Error Please Try Again Later !')</script>";
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include CSS -->
    <?php include("include/importcss.php") ?>
    <!-- Include head files -->
    <?php include("include/importhead.php") ?>
</head>

<body class="bg-light" style="overflow-x: hidden;">

    <!-- Include Header -->
    <?php include("include/importheader.php") ?>

    <!-- Make Heading -->
    <div class="border-dark pt-5">
        <h4 class="text-center">Insert Product</h4>
        <p class="text-center">You can fill the form given below regarding product and can add it !</p>
    </div>

    <!-- Form For Product Details -->
    <div class="container mt-5">
        <form class="" action="" method="post" enctype="multipart/form-data">

            <!-- Title -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_title" class="form-lable">Product Title</label>
                <input type="text" name="product_title" id="product_title" class="form-control"
                    placeholder="Enter Product Title" autocomplete="off" required>
            </div>

            <!-- Description -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_description" class="form-lable">Product Description</label>
                <input type="text" name="product_description" id="product_description" class="form-control"
                    placeholder="Enter Product Description" autocomplete="off" required>
            </div>

            <!-- Keyword -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_keyword" class="form-lable">Product Keyword</label>
                <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                    placeholder="Enter Product Keyword" autocomplete="off" required>
            </div>

            <!-- Catagory -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_catagories" class="form-select" id="product_catagories">
                    <option value="">Select Catagory</option>

                    <!-- Print catories Dynamic -->
                    <?php

                    $select_catagory = "SELECT * FROM `catagories`";
                    $result_catagory = mysqli_query($con, $select_catagory);
                    while ($row_data = mysqli_fetch_assoc($result_catagory)) {
                        $catagory_title = $row_data['catagory_title'];
                        $catagory_id = $row_data['catagory_id'];
                        echo "<option value='$catagory_id'>$catagory_title</option>";
                    }

                    ?>
                </select>
            </div>

            <!-- Brands -->
            <div class="form-outline mb-4 w-50 m-auto">
                <select name="product_brands" class="form-select" id="product_brands">
                    <option value="">Select Brand</option>

                    <!-- Print Brand Names Dynamic -->
                    <?php

                    $select_brand = "SELECT * FROM `brands`";
                    $result_brand = mysqli_query($con, $select_brand);
                    while ($row_data = mysqli_fetch_assoc($result_brand)) {
                        $brand_title = $row_data['brand_title'];
                        $brand_id = $row_data['brand_id'];
                        echo "<option value='$brand_id'>$brand_title</option>";
                    }

                    ?>

                </select>
            </div>

            <!-- Image 1 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image1" class="form-lable">Product Image 1</label>
                <input type="file" name="product_image1" id="product_image1" class="form-control" required>
            </div>

            <!-- Image 2 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image2" class="form-lable">Product Image 2</label>
                <input type="file" name="product_image2" id="product_image2" class="form-control">
            </div>

            <!-- Image 3 -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_image3" class="form-lable">Product Image 3</label>
                <input type="file" name="product_image3" id="product_image3" class="form-control">
            </div>

            <!-- Price -->
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_price" class="form-lable">Product Price</label>
                <input type="number" name="product_price" id="product_price" class="form-control"
                    placeholder="Enter Product Price" autocomplete="off" required>
            </div>

            <!-- Submit Button -->
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info px-5 mb-5" value="Insert Products">
            </div>
        </form>
    </div>

    <!-- Include Footer -->
    <?php include("include/importfooter.php") ?>

    <!-- Include JavaScript -->
    <?php include("include/importjs.php") ?>

</body>

</html>