<!-- Connection File -->
<?php include("../include/connect.php");

// Insert Data Into Database
if (isset($_POST['update_product'])) {

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
        $update_product = "UPDATE `products` SET `product_title`='" . $_POST['product_title'] . "',`product_description`='" . $_POST['product_description'] . "',`product_keyword`='" . $_POST['product_keyword'] . "',`catagory_id`='" . $_POST['product_catagories'] . "',`brand_id`='" . $_POST['product_brands'] . "' ,`product_image1`='" . $_FILES['product_image1']['name'] . "',`product_image2`='" . $_FILES['product_image2']['name'] . "',`product_image3`='" . $_FILES['product_image3']['name'] . "',`product_price`='" . $_POST['product_price'] . "',`date`= NOW(),`status`='$product_status' WHERE 'product_id'='" . $_GET['product_id'] . "'";
        $result_query = mysqli_query($con, $update_product);
        if ($result_query) {
            echo "<script>alert('Product Updated Successfully !')</script>";
        } else {
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
        <div class="row">
            <div class="text-center col-md-4">

                <!-- Showing Products Dynamic -->
                <?php

                $select_products = "SELECT * FROM `products` WHERE product_id='" . $_GET['product_id'] . "'";
                $product_result_query = mysqli_query($con, $select_products);
                $row = mysqli_fetch_assoc($product_result_query);
                $product_id = $row['product_id'];
                $product_title = $row['product_title'];
                $product_description = $row['product_description'];
                $catagory_id = $row['catagory_id'];
                $brand_id = $row['brand_id'];
                $product_image1 = $row['product_image1'];
                $product_price = $row['product_price'];
                echo "<div class='col-md-12'>
                            <div class='card' height: 500px !important;'>
                                <img src='product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                                <div class='card-body'>
                                    <h5 class='card-title'>$product_title</h5>
                                    <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                                    <a href='update_product.php?product_id=$product_id' class='btn btn-dark'>Update Product</a>
                                    <a href='#' class='btn btn-dark'>View More</a>
                                </div>
                            </div>
                    </div>";
                ?>

            </div>
            <div class="col-md-8">
                <form class="" action="" method="post" enctype="multipart/form-data">

                    <!-- Title -->
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_title" class="form-lable">Product Title</label>
                        <input type="text" name="product_title" id="product_title" class="form-control"
                            placeholder="Update Product Title" autocomplete="off" required>
                    </div>

                    <!-- Description -->
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_description" class="form-lable">Product Description</label>
                        <input type="text" name="product_description" id="product_description" class="form-control"
                            placeholder="Update Product Description" autocomplete="off" required>
                    </div>

                    <!-- Keyword -->
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_keyword" class="form-lable">Product Keyword</label>
                        <input type="text" name="product_keyword" id="product_keyword" class="form-control"
                            placeholder="Update Product Keyword" autocomplete="off" required>
                    </div>

                    <!-- Catagory -->
                    <div class="form-outline mb-4 m-auto">
                        <select name="product_catagories" class="form-select" id="product_catagories">
                            <option value="">Update Catagory</option>

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
                    <div class="form-outline mb-4 m-auto">
                        <select name="product_brands" class="form-select" id="product_brands">
                            <option value="">Update Brand</option>

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
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_image1" class="form-lable">Update Product Image 1</label>
                        <input type="file" name="product_image1" id="product_image1" class="form-control" required>
                    </div>

                    <!-- Image 2 -->
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_image2" class="form-lable">Update Product Image 2</label>
                        <input type="file" name="product_image2" id="product_image2" class="form-control">
                    </div>

                    <!-- Image 3 -->
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_image3" class="form-lable">Update Product Image 3</label>
                        <input type="file" name="product_image3" id="product_image3" class="form-control">
                    </div>

                    <!-- Price -->
                    <div class="form-outline mb-4 m-auto">
                        <label for="product_price" class="form-lable">Product Price</label>
                        <input type="number" name="product_price" id="product_price" class="form-control"
                            placeholder="Update Product Price" autocomplete="off" required>
                    </div>

                    <!-- Submit Button -->
                    <div class="form-outline mb-4 m-auto">
                        <input type="submit" name="update_product" class="btn btn-info px-5 mb-5"
                            value="Update Products">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Include Footer -->
    <?php include("include/importfooter.php") ?>

    <!-- Include JavaScript -->
    <?php include("include/importjs.php") ?>

</body>

</html>