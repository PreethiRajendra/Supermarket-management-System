<?php
require_once('db.php');
$query = "select * from product";
$result = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="displaystyling.css">
    <title>Fatech Data From Database in Php</title>
</head>
<body class="bg-dark">

    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <div class="card mt-5">
                    <div class="card-header">
                        <h2 class="display-6 text-center">PRODUCT DETAILS</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Brand</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Manufacture Date</th>
                                <th>Expiry Date</th>
                                <th>Supplier Id</th>
                                <th>Offer Id</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['product_id'] ?></td>
                                    <td><?php echo $row['p_name'] ?></td>
                                    <td><?php echo $row['brand'] ?></td>
                                    <td><?php echo $row['category'] ?></td>
                                    <td><?php echo $row['price'] ?></td>
                                    <td><?php echo $row['mfg_date'] ?></td>
                                    <td><?php echo $row['exp_date'] ?></td>
                                    <td><?php echo $row['supplier_id'] ?></td>
                                    <td><?php echo $row['offer_id'] ?></td>
                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                </tr>
                                <?php
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
