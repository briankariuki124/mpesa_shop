<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        body{
            background-size: cover;
            background-image: url("resources/nature.jpg");
        }
        .d{
            height: 20vh;
            border-radius: 5px;
            text-align: center;
            padding-top: 4vh;
            margin-top: 10px;
        }
        .ssf{
            display: block;
            text-decoration: none;
            width: 60%;
            height: 15vh;
            padding-top: 30px;
            margin-left: 25px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
<h4 style="color: white;text-align: center;text-decoration: underline;font-family: 'Manjari Bold'">Cereal Reports</h4>
    <div class="row">
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
            <a href="sales.php" class="ssf btn-primary">Sales Reports</a>
        </div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
            <a href="stock.php" class="ssf btn-primary">Stock Reports</a>
        </div>
    </div>

    <div class="row">
            <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
                <a href="expenses.php" class="ssf btn-primary">List of Expenses</a>
            </div>
            <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
            <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
            <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
                <a href="debtors.php" class="ssf btn-primary">Debtors Reports</a>
            </div>
    </div>
    <br>
<h4 style="color: white;text-align: center;text-decoration: underline;font-family: 'Manjari Bold'">Mpesa Reports</h4>
    <div class="row">
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
            <a href="uncashed.php" class="ssf btn-primary">Uncashed Money</a>
        </div>
        <div class="col-1 col-sm-1 col-lg-1 col-md-1"></div>
        <div class="col-4 col-sm-4 col-lg-4 col-md-4 d">
            <a href="transaction.php" class="ssf btn-primary">Transaction Reports</a>
        </div>
        <div class="col-1 col-sm-1 col-lg-1 col-md-1"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
            <a href="uncollected.php" class="ssf btn-primary">Undeposited</a>
        </div>
    </div>

</body>
</html>