<?php
require_once('db.php'); // Make sure you have included the correct database connection file

$sql = "SELECT
            product_id,
            p_name,
            SUM(quantity) AS totalsales
        FROM 
            sales
        JOIN
            product ON product_id = prod_id
        GROUP BY 
            product_id
        ORDER BY 
            totalsales DESC;";

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
                    <td><?= $items['product_id']; ?></td>
                    <td><?= $items['p_name']; ?></td>
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
    <title>QUERY 2</title>
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