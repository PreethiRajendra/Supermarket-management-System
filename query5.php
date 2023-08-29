<?php
require_once('db.php'); // Make sure you have included the correct database connection file

// Assertion SQL
$sql = "
    CREATE ASSERTION NoNegativeStock
    CHECK (
        SELECT COUNT(*)
        FROM sales S
        JOIN sroducts P ON S.prod_id = P.product_id
        WHERE S.quantity > P.quantity
    ) = 0;
";

// Execute the assertion SQL
$query_run = mysqli_query($con, $sql);

if ($query_run) {
    // Query to retrieve sales data
    $sales_data_sql = "
        SELECT 
            DATE_FORMAT(sale_date, '%Y-%m') AS Month,
            SUM(quantity) AS TotalSales
        FROM 
            sales
        WHERE 
            prod_id = 'product_id'
        GROUP BY 
            Month;
    ";

    $query_sales_data = mysqli_query($con, $sales_data_sql);

    if (mysqli_num_rows($query_sales_data) > 0) {
        ?>
        <table class="table table-bordered" style="border:1px solid black;margin-left:auto;margin-right:auto;text-align:center" cellspacing="10">
            <thead>
                <tr>
                    <th>Month</th>
                    <th>Total Sales</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($query_sales_data as $items) {
                    ?>
                    <tr>
                        <td><?= $items['Month']; ?></td>
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
} else {
    echo "Error creating assertion: " . mysqli_error($con);
}

$con->close(); // Close the database connection
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Query and Result</title>
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