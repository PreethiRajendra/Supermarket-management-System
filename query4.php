<?php
require_once('db.php'); // Make sure you have included the correct database connection file

$product_id = '101'; // Replace 'product_id' with the actual product ID you're analyzing

$sql = "SELECT
prod_id AS ProductID,
p_name AS ProductName,
SUM(quantity) AS TotalSales
FROM 
Sales
JOIN 
Product ON sales.prod_id = product.product_id
GROUP BY 
prod_id, p_name
ORDER BY 
TotalSales DESC;"; // Use the alias 'Month' for consistency

$query_run = mysqli_query($con, $sql);

if (mysqli_num_rows($query_run) > 0) {
    ?>
    <table class="table table-bordered" style="border:1px solid black;margin-left:auto;margin-right:auto;text-align:center" cellspacing="10">
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Total Sales</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($query_run as $items) {
                ?>
                <tr>
                    <td><?= $items['ProductID']; ?></td> 
                    <td><?= $items['ProductName']; ?></td>
                    <td><?= $items['TotalSales']; ?></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
<?php
} else {
    ?>
    <p>No records found</p>
<?php
}

$con->close(); // Close the database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query 4</title>
    <link rel="stylesheet" href="displaystyling.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-4">
                    <div class="card-body">
                        <!-- Table will be inserted here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
