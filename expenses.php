<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Expenses</title>
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
                <th>TYPE OF EXPENSE</th>
                <th>COST</th>
                <th>DATE OF EXPENDITURE</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </tr>
            <?php
            require 'conn.php';
            //Prepare the select query
            $select_query = "SELECT * FROM `expenditure` WHERE id";

            //Execute the select query
            $expenses = mysqli_query($conn , $select_query);

            //Loop the data to appear row by row
            while ($row = mysqli_fetch_assoc($expenses)){
                extract($row);
                echo "  <tr>
                            <td>$type</td>
                            <td>$amount</td>
                            <td>$date</td>
                            <td><a href='#' class='btn btn-danger'>DELETE</a></td>
                            <td><a href='#' class='btn btn-primary'>UPDATE</a></td>
                        </tr>";
            }
            ?>
        </table>
    </div>

Total Expenses Cost = <br>
<button>Filter by date to get total cost per day</button>
</body>
</html>