<?php
include('../includes/connect.php');
if (isset($_POST['insert_product'])) {
    $product_name = $_POST['product_name'];
    $category= $_POST['category'];
    $brand = $_POST['brand'];
    $price= $_POST['price'];
    $mfg_date= $_POST['mfg_date'];
    $exp_date= $_POST['exp_date'];
    $supplier_id= $_POST['supplier_id'];
    $offer_id= $_POST['offer_id'];

    
    

    //check for the empty condition
    if ($product_name== '' or $category == '' or $brand == '' or $price == '' or $mfg_date == '' or $exp_date == '' or $supplier_id == '' or $offer_id == '' ) {
        echo "<script>
            alert('Please fill all the available fields')
            </script>";
        exit();
    } else {
        //insert query
        $insert_products = " insert into `product` (p_name,brand,category,price,mfg_date,exp_date,supplier_id,offer_id) values ('$product_name','$category','$brand','$price','$mfg_date','$exp_date',$supplier_id,$offer_id)";
        $result_query=mysqli_query($con,$insert_products);
        if($result_query)
        {
            echo "<script>
            alert('Successfully inserted the products')
            </script>";
        }

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
         crossorigin="anonymous">
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Products</h1>
        <form action="" method="post">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_name" class="form-label">Product Name</label>
                <input type="text" name="product_name" id="product_name" class="form-control"
                    placeholder="Enter Product Name" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="category" class="form-label">Product category</label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Enter Category"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="brand" class="form-label">Brand</label>
                <input type="text" name="brand" id="brand" class="form-control" placeholder="Enter brand"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" placeholder="Enter Product price"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="mfg_date" class="form-label">Manufacture date</label>
                <input type="text" name="mfg_date" id="mfg_date" class="form-control" placeholder="Manufacture date"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="exp_date" class="form-label">Expiry date</label>
                <input type="text" name="exp_date" id="exp_date" class="form-control" placeholder="Expiry date"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="supplier_id" class="form-label">Enter supplier id</label>
                <input type="text" name="supplier_id" id="supplier_date" class="form-control"
                    placeholder="Enter supplier id" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="offer_id" class="form-label">Enter offer id</label>
                <input type="text" name="offer_id" id="offer_id" class="form-control" placeholder="Enter offer id"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_product" class="btn btn-info mb-3 px-3" value="Insert Products">
            </div>
        </form>
    </div>
</body>

</html>