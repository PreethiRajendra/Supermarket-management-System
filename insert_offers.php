<?php
if (isset($_POST['insert_offers'])) {
    $offer_id = $_POST['offer_id'];
    $offer_name = $_POST['offer_name'];
    $dis_perc = $_POST['dis_perc'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];

    //check for the empty condition
    if ($offer_id == '' or $offer_name == '' or $dis_perc == '' or $start_date == '' or $end_date == '') {
        echo "<script>
            alert('Please fill all the available fields')
            </script>";
        exit();
    } else {
        //insert query
        $insert_offers = "INSERT INTO `offers` (offer_id, offer_name, dis_perc,start_date, end_date) 
                          VALUES ('$offer_id', '$offer_name', '$dis_perc', '$start_date', '$end_date')";
        
        $result_query = mysqli_query($con, $insert_offers);
        
        if ($result_query) {
            echo "<script>
            alert('Successfully inserted the offers')
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
    <title>Insert Offers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-light">
    <div class="container mt-3">
        <h1 class="text-center">Insert Offers</h1>
        <form action="" method="post">
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="offer_id" class="form-label">Offers ID</label>
                <input type="text" name="offer_id" id="offer_id" class="form-control" placeholder="Enter Offers ID"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="offer_name" class="form-label">Offer Name</label>
                <input type="text" name="offer_name" id="offer_name" class="form-control"
                    placeholder="Enter offer name " autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="dis_perc" class="form-label">Discount Percent </label>
                <input type="text" name="dis_perc" id="dis_perc" class="form-control" placeholder="Enter discount percent"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="start_date" class="form-label">Start Date</label>
                <input type="text" name="start_date" id="start_sate" class="form-control" placeholder="Enter Start Date"
                    autocomplete="off" required="required">
            </div>
            <div class="form-outline mb-4 w-50 m-auto">
                <label for="end_date" class="form-label">End Date</label>
                <input type="text" name="end_date" id="end_date" class="form-control" placeholder="Enter End Date "
                    autocomplete="off" required="required">
            </div>

            
             
            <div class="form-outline mb-4 w-50 m-auto">
                <input type="submit" name="insert_offers" class="btn btn-info mb-3 px-3" value="Insert Offers">
            </div>









        </form>
    </div>

</body>

</html>