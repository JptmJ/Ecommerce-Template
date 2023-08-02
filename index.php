<!-- Connection File -->
<?php include("include/connect.php") ?>

<!-- Function File -->
<?php include("functions/common_function.php") ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include CSS -->
    <?php include("include/importcss.php") ?>
    <!-- Include head files -->
    <?php include("include/importhead.php") ?>
</head>

<body>
    <!-- Include Header -->
    <?php include("include/importheader.php") ?>

    <!-- Make Heading -->
    <div class="bg-light border-dark pt-5 pb-5">
        <h4 class="text-center">Welcome to Anytime Store</h4>
        <p class="text-center">We're always here to here about you & Always here for your service</p>
    </div>

    <!-- Product Cards -->
    <div class="container text-center">
        <div class="row">
            <div class="col-md-10">
                <div class="row pt-5">

                    <!-- Showing Products Dynamic Using Function -->
                    <?php getproducts(); ?>

                    <!-- Showing Specific Product Categories Wise Using Function -->
                    <?php get_unique_category(); ?>

                    <!-- Showing Specific Product Brands Wise Using Function -->
                    <?php get_unique_brand(); ?>

                </div>
            </div>
            <div style="height: max-content;" class="col-md-2 bg-light p-0">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link" aria-current="page" href="">
                            <h4>Brands</h4>
                        </a>
                    </li>

                    <!-- Print Brand Names Dynamic Using Function -->
                    <?php getbrands(); ?>

                </ul>
                <ul class="navbar-nav me-auto">
                    <li class="nav-item text-light bg-dark">
                        <a class="nav-link" aria-current="page" href="">
                            <h4>Categories</h4>
                        </a>
                    </li>

                    <!-- Print catories Dynamic Using Function -->
                    <?php getcatagories(); ?>

                </ul>
            </div>
        </div>
    </div>



    <!-- Include Footer -->
    <?php include("include/importfooter.php") ?>

    <!-- Include JavaScript -->
    <?php include("include/importjs.php") ?>

</body>

</html>