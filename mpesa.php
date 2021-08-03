<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MPESA</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        body{
            background: rgb(180, 180, 180);
        }
        .d{
            height: 20vh;
            background-color: #defd6b;
            border-radius: 5px;
            text-align: center;
            padding-top: 4vh;
            margin-top: 10px;
        }
        .ssf{
            width:auto;
            color: black;
            font-size: xx-large;
            font-family: 'Manjari Bold'
            display: block;
            background-color: unset;
        }
        .ssf:hover{
            text-decoration: none;
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

        .container {
            padding: 16px;
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
            background-color: #fecf76;
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
        }

        .tops{
            height: 10vh;
        }
    </style>
</head>
<body>
    <div class="row tops"></div>
    <div class="row">
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-6 col-sm-6 col-lg-6 col-md-6 d">
            <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;color: black;font-size: xx-large; font-family: 'Manjari Bold'">Transactions Computations</button>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="transaction_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>Transactions Form</h3>
                    </div>

                    <div class="container">
                        <input type="date" class="form-control" placeholder="Date" name="tdt" required>
                        <input type="text" class="form-control" placeholder="Opening Cash" name="oc" required>
                        <input type="text" class="form-control" placeholder="Opening Float" name="of" required>
                        <input type="text" class="form-control" placeholder="Sum of Deposits" name="dep" required>
                        <input type="text" class="form-control" placeholder="Sum of Withdrawals" name="ws" required>
                    </div>

                    <div class="container">
                        <button class="btn btn-primary" name="transactions">Save</button>
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
    </div>
    <div class="row">
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
            <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;color: black;font-size: xx-large; font-family: 'Manjari Bold'">Uncashed</button>

            <div id="id02" class="modal">

                <form class="modal-content animate" action="uncashed_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>Uncashed</h3>
                    </div>

                    <div class="container">
                        <input type="date" class="form-control" placeholder="Date" name="date" required>
                        <input type="text" class="form-control" placeholder="Customer Name" name="cname" required>
                        <input type="text" class="form-control" placeholder="Amount Uncashed" name="umount" required>

                    </div>

                    <div class="container">
                        <button class="btn btn-primary" name="btn_uncashed">Save</button>
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
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3 d">
            <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;color: black;font-size: xx-large; font-family: 'Manjari Bold'">Uncollected</button>

            <div id="id03" class="modal">

                <form class="modal-content animate" action="uncoll_handler.php" method="post">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <h3>Undeposited/Uncollected</h3>
                    </div>

                    <div class="container">
                        <input type="date" class="form-control" placeholder="Date" name="dt" required>
                        <input type="text" class="form-control" placeholder="Customer Name" name="namec" required>
                        <input type="text" class="form-control" placeholder="Amount Un-deposited" name="undepo" required>
                    </div>

                    <div class="container">
                        <button class="btn btn-primary" name="btn_undepo">Save</button>
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
    </div>
    <div class="row">
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
        <div class="col-6 col-sm-6 col-lg-6 col-md-6 d">
            <a href="reports.php" class="ssf btn-primary">Reports</a>
        </div>
        <div class="col-3 col-sm-3 col-lg-3 col-md-3"></div>
    </div>
</body>
</html>
