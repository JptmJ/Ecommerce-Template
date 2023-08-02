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
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Company</a>
            <!-- <img src="./images/cafe.jpg" alt="LOGO" height="100"> -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="display_all.php">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fa-solid fa-cart-shopping"><sup>1</sup></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Total Cart Value : 100/-</a>
                    </li>
                </ul>
                <form class="d-flex" method="get" action="">
                    <input class="form-control me-2" type="search" placeholder="Search" name="search"
                        aria-label="Search">
                    <input type="submit" value="Search" class="btn btn-outline-dark" name="do_search">

                </form>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php">Welcome user</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="product.php">Login</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

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
                    <?php search(); ?>

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