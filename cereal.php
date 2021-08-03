<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CEREALS</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        body{
            background: rgb(180, 180, 180);
        }
        .l{
            height: 20vh;
            background-color: #e8fb42;
            border-radius: 5px;
            text-align: center;
            padding-top: 4vh;
        }
        .cereal{
            padding-top: 8vh;
            display: block;
        }
        .k{
            margin-top: 18vh;
            margin-left: 25px;
        }
        .j{
            margin-left: 25px;
        }

        /* Full-width input fields */
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        /* Set a style for all buttons */
        button {
            background-color: unset;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Center the image and position the close button */
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* The Modal (background) */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
            padding-top: 60px;
        }

        /* Modal Content/Box */
        .modal-content {
            background-color:#95999c ;
            margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button (x) */
        .close {
            position: absolute;
            right: 25px;
            top: 0;
            color: #000;
            font-size: 35px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: red;
            cursor: pointer;
        }

        /* Add Zoom Animation */
        .animate {
            -webkit-animation: animatezoom 0.6s;
            animation: animatezoom 0.6s
        }

        @-webkit-keyframes animatezoom {
            from {-webkit-transform: scale(0)}
            to {-webkit-transform: scale(1)}
        }

        @keyframes animatezoom {
            from {transform: scale(0)}
            to {transform: scale(1)}
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
        }
        .date{
            width: 100%;
            height:7vh;
        }
        .lbl{
            float: left;
        }
    </style>
</head>
<body>
    <div class="row k">
        <div class="col-1 col-sm-1 col-lg- col-md-1"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 l">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto; color: black;font-size: xx-large; font-family: 'Manjari Bold'">Sales</button>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="sales_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>Sales Form</h3>
                    </div>

                    <div class="container">
                        <input type="text" placeholder="Enter Item" name="name" required>
                        <input type="text" placeholder="Enter Quantity" name="qty" required>
                        <input type="text" placeholder="Total Price" name="prc" required>
                        <h6 class="lbl">Date Sold:</h6>
                        <input type="date"  name="dt" class="date" required>
                    </div>

                    <div class="container">
                        <button class="btn btn-primary" name="btn_sales">Save</button>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id01');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 l">
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;color: black;font-size: xx-large; font-family: 'Manjari Bold'">Stock In</button>

            <div id="id02" class="modal">

                <form class="modal-content animate" action="stock_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>New Stock Record</h3>
                    </div>

                    <div class="container">
                        <input type="text" placeholder= "Item Name" name="iname" required>
                        <input type="text" placeholder="Quantity Brought In" name="qbi" required>
                        <input type="text" placeholder="Purchasing Price" name="pp" required>
                        <h6 class="lbl">Date of Purchase:</h6>
                        <input type="date" name="dop" class="date" required>
                    </div>
                    <div class="container">
                        <button class="btn btn-primary" name="btn_stock">Save</button>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id02');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div>
        <div class="col-1 col-sm-1 col-lg- col-md-1"></div>
    </div>
    <div class="row j">
        <div class="col-1 col-sm-1 col-lg- col-md-1"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 l">
            <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;color: black;font-size: xx-large; font-family: 'Manjari Bold'">Expenses</button>

            <div id="id03" class="modal">

                <form class="modal-content animate" action="expense_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>Expenses Form</h3>
                    </div>

                    <div class="container">
                        <input type="text" placeholder="Type of Expense" name="toe" required>
                        <input type="text" placeholder="Enter Amount" name="ea" required>
                        <h6 class="lbl">Date of Expenditure:</h6>
                        <input type="date" class="date"  name="doe" required>
                    </div>

                    <div class="container" >
                        <button class="btn btn-primary" name="btn_expenses">Save</button>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id03');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-1 col-sm-1 col-lg- col-md-1"></div>
    </div>
    <div class="row j">
        <div class="col-1 col-sm-1 col-lg- col-md-1"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 l">
            <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;color: black;font-size: xx-large; font-family: 'Manjari Bold'">Debtors</button>

            <div id="id04" class="modal">

                <form class="modal-content animate" action="debt_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>Debtors Form</h3>
                    </div>

                    <div class="container">
                        <input type="text" placeholder="Name of Creditor" name="cred" required>
                        <input type="text" placeholder="Item Lended" name="item" required>
                        <input type="text" placeholder="Quantity of Item" name="quantity" required>
                        <input type="text" placeholder="Total Cost" name="cost" required>
                        <h6 class="lbl">Date of Lending:</h6>
                        <input type="date" class="date" name="d" required><br><br>
                        <h6 class="lbl">Date of Payment:</h6>
                        <input type="date" class="date" name="dop" required>
                    </div>

                    <div class="container">
                        <button class="btn btn-primary" name="btn_debt">Save</button>
                    </div>
                </form>
            </div>

            <script>
                // Get the modal
                var modal = document.getElementById('id04');

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none";
                    }
                }
            </script>
        </div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 l">
            <a href="reports.php" class="cereal">Reports</a>
        </div>
        <div class="col-1 col-sm-1 col-lg- col-md-1"></div>
    </div>

</body>
</html>