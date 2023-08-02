<!-- Connection File -->
<?php include("./include/connect.php"); ?>

<?php

// Getting Products
function getproducts()
{
    global $con;

    // Condition For Data Filter
    if (!isset($_GET['catagory'])) {
        if (!isset($_GET['brand'])) {
            $select_products = "SELECT * FROM `products` ORDER BY rand() LIMIT 0,6";
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
                            <img src='admin/product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                                <a href='#' class='btn btn-dark'>Add To Cart</a>
                                <a href='product_details.php?product_id=$product_id' class='btn btn-dark'>View More</a>
                            </div>
                        </div>
                    </div>";
            }
        }
    }
}

// Getting All Products
function get_all_products()
{
    global $con;

    // Condition For Data Filter
    if (!isset($_GET['catagory'])) {
        if (!isset($_GET['brand'])) {
            $select_products = "SELECT * FROM `products` ORDER BY rand()";
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
                            <img src='admin/product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                                <a href='#' class='btn btn-dark'>Add To Cart</a>
                                <a href='#' class='btn btn-dark'>View More</a>
                            </div>
                        </div>
                    </div>";
            }
        }
    }
}

// Getting Filtered Unique Products
function get_unique_category()
{
    global $con;

    // Condition For Data Filter
    if (isset($_GET['catagory'])) {
        $category_id = $_GET['catagory'];
        $select_products = "SELECT * FROM `products` WHERE catagory_id = '$category_id'";
        $product_result_query = mysqli_query($con, $select_products);

        // Logic For No Data Available
        $num_of_rows = mysqli_num_rows($product_result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>Sorry No Products Available For This Category :( </h2>";
        } else {
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
                            <img src='admin/product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                                <a href='#' class='btn btn-dark'>Add To Cart</a>
                                <a href='#' class='btn btn-dark'>View More</a>
                            </div>
                        </div>
                    </div>";
            }
        }
    }
}
function get_unique_brand()
{
    global $con;

    // Condition For Data Filter
    if (isset($_GET['brand'])) {
        $brand_id = $_GET['brand'];
        $select_products = "SELECT * FROM `products` WHERE catagory_id = '$brand_id'";
        $product_result_query = mysqli_query($con, $select_products);

        // Logic For No Data Available
        $num_of_rows = mysqli_num_rows($product_result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>Sorry No Products Available For This Brand :( </h2>";
        } else {
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
                            <img src='admin/product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                            <div class='card-body'>
                                <h5 class='card-title'>$product_title</h5>
                                <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                                <a href='#' class='btn btn-dark'>Add To Cart</a>
                                <a href='#' class='btn btn-dark'>View More</a>
                            </div>
                        </div>
                    </div>";
            }
        }
    }
}

// Getting Brands

function getbrands()
{
    global $con;
    $select_brand = "SELECT * FROM `brands`";
    $result_brand = mysqli_query($con, $select_brand);
    while ($row_data = mysqli_fetch_assoc($result_brand)) {
        $brand_title = $row_data['brand_title'];
        $brand_id = $row_data['brand_id'];
        echo "<li class='nav-item bg-light'>
                <a class='nav-link' href='index.php?brand=$brand_id'>$brand_title</a>
            </li>";
    }
}

// Getting Catagories

function getcatagories()
{
    global $con;
    $select_catagory = "SELECT * FROM `catagories`";
    $result_catagory = mysqli_query($con, $select_catagory);
    while ($row_data = mysqli_fetch_assoc($result_catagory)) {
        $catagory_title = $row_data['catagory_title'];
        $catagory_id = $row_data['catagory_id'];
        echo "<li class='nav-item bg-light'>
                <a class='nav-link' href='index.php?catagory=$catagory_id'>$catagory_title</a>
            </li>";
    }
}

// Getting Products
function search()
{
    global $con;
    if (isset($_GET['do_search'])) {
        $search_data_value = $_GET['search'];
        $search_query = "SELECT * FROM `products` WHERE `product_keyword` LIKE '%$search_data_value%'";
        $product_result_query = mysqli_query($con, $search_query);

        // Logic For No Data Available
        $num_of_rows = mysqli_num_rows($product_result_query);
        if ($num_of_rows == 0) {
            echo "<h2 class='text-center text-danger'>Sorry No Products Available :(</h2>";
        } else {
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
                        <img src='admin/product_images/$product_image1' height='250' class='card-img-top object-fit-contain p-4' alt='$product_title Image'>
                        <div class='card-body'>
                            <h5 class='card-title'>$product_title</h5>
                            <p style='height:100px; overflow:overlay; align-items:center; display:flex;' class='card-text m-2'>$product_description</p>
                            <a href='#' class='btn btn-dark'>Add To Cart</a>
                            <a href='#' class='btn btn-dark'>View More</a>
                        </div>
                    </div>
                </div>";
            }
        }
    }
}

?>