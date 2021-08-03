<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Transactions</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container">
    <table class="table table-dark table-hover">
        <tr>
            <th>DATE</th>
            <th>CUSTOMER NAME</th>
            <th>AMOUNT</th>
            <th>DELETE</th>
            <th>UPDATE</th>
        </tr>
        <?php
        require 'conn.php';
        //Prepare the select query
        $select_query = "SELECT * FROM `undeposited` WHERE id";

        //Execute the select query
        $undeposited = mysqli_query($conn , $select_query);

        //Loop the data to appear row by row
        while ($row = mysqli_fetch_assoc($undeposited)){
            extract($row);
            echo "  <tr>
                            <td>$date</td>
                            <td>$customer_name</td>
                            <td>$amount</td>
                            <td><a href='#' class='btn btn-danger'>DELETE</a></td>
                            <td><a href='#' class='btn btn-primary'>UPDATE</a></td>
                        </tr>";
        }
        ?>
    </table>
</div>

</body>
</html>
