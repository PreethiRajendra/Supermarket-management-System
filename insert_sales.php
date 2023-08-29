<?php
include('../includes/connect.php');
if (isset($_POST['insert_sales'])) {
    $sales_id = $_POST['sales_id'];
    $prod_id = $_POST['prod_id'];
    $sale_date= $_POST['sale_date'];
    $quantity = $_POST['quantity'];
    $total_amt = $_POST['total_amt'];
    

    //check for the empty condition
    if ($sales_id == '' or $prod_id == '' or $sale_date == '' or $quantity == '' or $total_amt == '' ) {
        echo "<script>
            alert('Please fill all the available fields')
            </script>";
        exit();
    } else {
        //insert query
        $insert_sales = " insert into `sales` (sales_id,prod_id,sale_date,quantity,total_amt) values ('$sales_id','$prod_id','$sale_date','$quantity','$total_amt')";
        $result_query=mysqli_query($con,$insert_sales);
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
    <title>Insert Sales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Sales</h1>
        <form action="" method="post">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="sales_id" class="form-label">Sales ID</label>
                <input type="text" name="sales_id" id="sales_id" class="form-control" placeholder="Enter Sales ID"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Prod_id" class="form-label">Product ID</label>
                <input type="text" name="prod_id" id="prod_id" class="form-control"
                    placeholder="Enter Product Id" autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="Sale_Date" class="form-label">Sale Date </label>
                <input type="text" name="sale_date" id="sale_date" class="form-control" placeholder="Enter Sales Date "
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="quantity" class="form-label">Quantity</label>
                <input type="text" name="quantity" id="quantity" class="form-control" placeholder="Enter quantity"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="total_amt" class="form-label">Total Amount</label>
                <input type="text" name="total_amt" id="total_amt" class="form-control" placeholder="Enter Total amount "
                    autocomplete="off" required="required">
            </div>

            
             
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_sales" class="btn btn-info mb-3 px-3" value="Insert Sales">
            </div>









        </form>
    </div>

</body>

</html>