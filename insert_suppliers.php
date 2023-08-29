<?php
include('../includes/connect.php');
if (isset($_POST['insert_suppliers'])) {
    $supplier_id = $_POST['supplier_id'];
    $supplier_name = $_POST['supplier_name'];
    $contact_person = $_POST['contact_person'];
    $ph_no = $_POST['ph_no'];
    $email= $_POST['email'];
    $address = $_POST['address'];
    $product_id = $_POST['product_id'];
    

    //check for the empty condition
    if ($supplier_id == '' or $supplier_name == '' or $contact_person == '' or $ph_no = '' or $email == '' or $address == '' or $product_id == '') {
        echo "<script>
            alert('Please fill all the available fields')
            </script>";
        exit();
    } else {
        //insert query
        $insert_suppliers = " insert into `suppliers` (supplier_id,supplier_name,contact_person,ph_no,email,address,product_id) values ('$supplier_id','$supplier_name','$contact_person','$ph_no','$email','$address','$product_id')";
        $result_query=mysqli_query($con,$insert_suppliers);
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
    <title>Suppliers Products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Suppliers Products</h1>
        <form action="" method="post">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="supplier_id" class="form-label">Supplier ID</label>
                <input type="text" name="supplier_id" id="supplier_id" class="form-control" placeholder="Enter Supplier ID"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="supplier_name" class="form-label">Supplier Name</label>
                <input type="text" name="supplier_name" id="supplier_name" class="form-control"
                    placeholder="Enter Supplier Name" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="contact_person" class="form-label">Contact Person</label>
                <input type="text" name="contact_person" id="contact_person" class="form-control" placeholder="Enter Contact person"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="ph_no" class="form-label">Phone_number</label>
                <input type="text" name="ph_no" id="ph_no" class="form-control" placeholder="Enter phone number"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="address" class="form-label">Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="Address"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="product_id" class="form-label">Product_id</label>
                <input type="text" name="product_id" id="product_id" class="form-control" placeholder="Product_id"
                    autocomplete="off" required="required">
            </div>

            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_supplier" class="btn btn-info mb-3 px-3" value="Insert Suppliers">
            </div>









        </form>
    </div>

</body>

</html>