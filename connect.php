<?php
    // Enter your host name, database username, password, and database name.
    // If you have not set database password on localhost then set empty.
    $con = mysqli_connect('localhost','root','','supermarket',3308);
    // Check connection
    if (!$con){
        die(mysqli_error($con));
    }

?>
