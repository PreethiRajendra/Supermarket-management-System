<?php
require_once('db.php');
$query = "select * from suppliers";
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
                        <h2 class="display-6 text-center">SUPPLIERS DETAILS</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered text-center">
                            <tr class="bg-dark text-white">
                                <th>Supplier ID</th>
                                <th>Supplier Name</th>
                                <th>Contact Person</th>
                                <th>Phone Numbers</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Product ID</th>
                        
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['supplier_id'] ?></td>
                                    <td><?php echo $row['supplier_name'] ?></td>
                                    <td><?php echo $row['contact_person'] ?></td>
                                    <td><?php echo $row['ph_no'] ?></td>
                                    <td><?php echo $row['email'] ?></td>
                                    <td><?php echo $row['address'] ?></td>
                                    <td><?php echo $row['product_id'] ?></td>
                                    
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
