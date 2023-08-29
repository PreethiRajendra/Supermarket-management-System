<?php
require_once('db.php'); // Make sure you have included the correct database connection file

$product_id = '101'; // Replace 'product_id' with the actual product ID you're analyzing

$sql = "SELECT 
            DATE_FORMAT(sale_date, '%Y-%m') AS Month,
            SUM(quantity) AS totalsales
        FROM 
            sales
        WHERE 
            prod_id = '$product_id'
        GROUP BY 
            Month;"; // Use the alias 'Month' for consistency

$query_run = mysqli_query($con, $sql);

if (mysqli_num_rows($query_run) > 0) {
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
            foreach ($query_run as $items) {
                ?>
                <tr>
                    <td><?= $items['Month']; ?></td> <!-- Use 'Month' here -->
                    <td><?= $items['totalsales']; ?></td>
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
