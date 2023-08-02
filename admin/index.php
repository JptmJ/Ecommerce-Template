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
        <h4 class="text-center">Welcome to Anytime Store Admin Panel !</h4>
        <p class="text-center">Hello Admin You'll Have to Manage These Details.</p>
    </div>

    <!-- Function Buttons -->
    <div class="row pt-4 text-center">
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="insert_product.php" class="nav-link text-light my-3 mx-5">Insert
                    Product</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="view_product.php" class="nav-link text-light my-3 mx-5">View
                    Product</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="index.php?insert_catagory"
                    class="nav-link text-light my-3 mx-5">Insert
                    Catagory</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="" class="nav-link text-light my-3 mx-5">View Catagory</a></button>
        </div>
    </div>
    <div class="row pt-4 text-center">
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="index.php?insert_brand" class="nav-link text-light my-3 mx-5">Insert
                    Brand</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="" class="nav-link text-light my-3 mx-5">View Brand</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="" class="nav-link text-light my-3 mx-5">All Orders</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="" class="nav-link text-light my-3 mx-5">All Payments</a></button>
        </div>
    </div>
    <div class="row pt-4 text-center">
        <div class="col-md-3">
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="" class="nav-link text-light my-3 mx-5">List Users</a></button>
        </div>
        <div class="col-md-3">
            <button class="w-100 bg-dark"><a href="" class="nav-link text-light my-3 mx-5">Edit Admin</a></button>
        </div>
        <div class="col-md-3">
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