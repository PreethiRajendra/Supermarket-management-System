<?php
include('../includes/connect.php');
if (isset($_POST['insert_customer'])) {
    $cust_id = $_POST['cust_id'];
    $fname= $_POST['fname'];
    $lname = $_POST['lname'];
    $phn_number = $_POST['phn_number'];
    $email= $_POST['email'];
    $address = $_POST['address'];
    
    

    //check for the empty condition
    if ($cust_id == '' or $fname == '' or $lname == '' or $phn_numbers = '' or $email == '' or $address == '' ) {
        echo "<script>
            alert('Please fill all the available fields')
            </script>";
        exit();
    } else {
        //insert query
        $insert_customer = " insert into `customer` (cust_id,fname,lname,phn_number,email,address) values ('$cust_id','$fname','$lname','$phn_number','$email','$address')";
        $result_query=mysqli_query($con,$insert_customer);
        if($result_query)
        {
            echo "<script>
            alert('Successfully inserted the customer details')
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
    <title>Insert Customer</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Customers</h1>
        <form action="" method="post">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="customer_id" class="form-label">Customer ID</label>
                <input type="text" name="cust_id" id="customer_id" class="form-control" placeholder="Enter Customer ID"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" name="fname" id="first_name" class="form-control"
                    placeholder="Enter first Name" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="last_name" class="form-label">Last Name </label>
                <input type="text" name="lname" id="last_name" class="form-control" placeholder="Enter Last Name"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Phn_number" class="form-label">Phone number</label>
                <input type="text" name="phn_number" id="phn_number" class="form-control" placeholder="Enter Phone_number"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email "
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="address" class="form-label"> Address</label>
                <input type="text" name="address" id="address" class="form-control" placeholder="enter address "
                    autocomplete="off" required="required">
            </div>


            
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_customer" class="btn btn-info mb-3 px-3" value="Insert Customer">
            </div>









        </form>
    </div>

</body>

</html>