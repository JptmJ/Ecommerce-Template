<!-- Connection File -->
<?php include("../include/connect.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include CSS -->
    <?php include("include/importcss.php") ?>
    <!-- Include head files -->
    <?php include("include/importhead.php") ?>
</head>

<body style="overflow-x: hidden;">

    <!-- Include Header -->
    <?php include("include/importheader.php") ?>

    <!-- Make Heading -->
    <div class="bg-light border-dark pt-5 pb-5">
        <h4 class="text-center">View Product</h4>
        <p class="text-center">You can view and review the product that you've added it !</p>
    </div>

    <!-- Product Cards -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-12">
                <div class="row pt-5">

                    <!-- Showing Products Dynamic -->
                    <?php

                    $select_products = "SELECT * FROM `products` ORDER BY product_id;";
                    $product_result_query = mysqli_query($con, $select_products);
                    while ($row = mysqli_fetch_assoc($product_result_query)) {
                        $product_id = $row['product_id'];
                        $product_title = $row['product_title'];
                        $product_description = $row['product_description'];
                        $catagory_id = $row['catagory_id'];
                        $brand_id = $row['brand_id'];
                        $product_image1 = $row['product_image1'];
                        $product_price = $row['product_price'];
                        echo "<div class='col-md-4 pb-5'>
                                <div class='card' style='height: 500px !important;'>
                                    <img src='product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                                    <div class='card-body'>
                                        <h5 class='card-title'>$product_title</h5>
                                        <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                                        <a href='update_product.php?product_id=$product_id' class='btn btn-dark'>Update Product</a>
                                        <a href='#' class='btn btn-dark'>View More</a>
                                    </div>
                                </div>
                            </div>";
                    }

                    ?>

                </div>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <?php
        if (isset($_GET['insert_catagory'])) {
            include('insert_catagory.php');
        }
        if (isset($_GET['insert_brand'])) {
            include('insert_brand.php');
        }
        ?>
    </div>

    <!-- Include Footer -->
    <?php include("include/importfooter.php") ?>

    <!-- Include JavaScript -->
    <?php include("include/importjs.php") ?>

</body>

</html>