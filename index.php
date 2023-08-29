<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- bootstrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- google fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=GFS+Didot&family=Montserrat:wght@900&family=Poppins:wght@400;500&display=swap" rel="stylesheet">
<style>
.navbar-brand
{
    font-family: 'GFS Didot', serif;
    font-family: 'Montserrat', sans-serif;
    font-family: 'Poppins', sans-serif;
    font-size: 2.75rem;
}
</style>

</head>

<body>
<div class="background-image"></div>
<header>
    <div class="content-area">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
    <a class="navbar-brand mx-auto" href="#">SwiftShopManager</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</div>

        </nav>
    </div>
</header>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 bg-dark p-0">
                <ul class="navbar-nav me-auto text-center">
                    <!-- <li class="nav-item ">
                        <a href="index.php?insert_category" class="nav-link text-light">
                            <h4>CATEGORIES</h4>
                        </a>

                    </li> -->
                    <li class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle text-light" role="button" id="productsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <h4>PRODUCTS</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="insert_products.php">Insert Products</a></li>
                            <li><a class="dropdown-item" href="displayproducts.php">View Product Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown ">
                    <a href="#" class="nav-link dropdown-toggle text-light" role="button" id="productsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <h4>SUPPLIERS</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="insert_suppliers.php">Insert Supplier Details</a></li>
                            <li><a class="dropdown-item" href="displaysuppliers.php">View  Details</a></li>
                        </ul>
                    </li>
                        
                    
                    
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle text-light" role="button" id="productsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <h4>CUSTOMERS</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="insert_customer.php">Insert Customer Details</a></li>
                            <li><a class="dropdown-item" href="displaycustomerdetails.php">View Customer Details</a></li>
                        </ul>
                        
                    </li>
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle text-light" role="button" id="productsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <h4>SALES</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="insert_sales.php">Insert Sale Details</a></li>
                            <li><a class="dropdown-item" href="displaysales.php">View Sale Details</a></li>
                        </ul>
                        
                    </li>
                    <li class="nav-item dropdown ">
                        <a href="#" class="nav-link dropdown-toggle text-light" role="button" id="productsDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <h4>OFFERS</h4>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="insert_offers.php">Insert Offer Details</a></li>
                            <li><a class="dropdown-item" href="displayoffers.php">View Offer Details</a></li>
                        </ul>
                    
                    </li>
                    <li class="nav-item ">
                        <a href="queries.php" class="nav-link text-light">
                            <h4>QUERIES</h4>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="login.php" class="nav-link text-light">
                            <h4>LOGOUT</h4>
                        </a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
    <footer>
        <div class="bg-dark p-3 text-center text-light">
            <p>All rights reserved ©️-SwiftShopManager</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>


   
    
    
      
