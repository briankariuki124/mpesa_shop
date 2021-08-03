<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>switchboard</title>

    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{
            background: rgb(180, 180, 180);
        }
        .a{
            height: 27vh;
            background-color: yellow;
            margin-top: 15px;
            text-align: center;
            border-radius: 15px;
        }
        .link{
            font-family: "Manjari Bold";
            font-size: 60px;
            color: black;
            padding-top: 12vh;
            display: block;
            font-size: 30px;
            text-decoration: none;
        }
        .link:hover{
            text-decoration: none;
            color: #6970fb;
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
            background-color: yellow;
            color: white;
            padding: 14px 20px;
            margin-left: 150px;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        /* Extra styles for the cancel button */

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
            background-color: #fdfe8b;
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
    </style>
</head>
<body>
<div class="row" style="margin-left: 20px;">
    <div class="col-8 col-sm-8 col-lg-8 col-md-8">
        <h2 style="color:white;">Welcome <?php echo $_SESSION['username']; ?> </h2>
    </div>
    <div class="col-4 col-sm-4 col-lg-4 col-md-4">
        <a href="logout.php" style="font-family: 'Manjari Bold'; margin-left: 100px; color: white;">LOGOUT</a>
    </div>
</div>
    <div class="row">
        <div class="col-4 col-sm-4 col-lg-4 col-md-4"></div>
        <div class="col-4 col-sm-4 col-lg-4 col-md-4 a">
            <a href="mpesa.php" class="link">M-PESA</a>
        </div>
        <div class="col-4 col-sm-4 col-lg-4 col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-4 col-sm-4 col-lg-4 col-md-4"></div>
        <div class="col-4 col-sm-4 col-lg-4 col-md-4 a">
            <a href="cereal.php" class="link">CEREALS</a>
        </div>
        <div class="col-4 col-sm-4 col-lg-4 col-md-4"></div>
    </div>
    <div class="row">
        <div class="col-4 col-sm-4 col-lg-4 col-md-4"></div>
        <div class="col-4 col-sm-4 col-lg-4 col-md-4 a">
            <button onclick="document.getElementById('id01').style.display='block'" class="link" style="width:auto;">ADMIN</button>

            <div id="id01" class="modal">

                <form class="modal-content animate" action="/action_page.php">
                    <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="resources/camcat2.png" alt="Avatar" class="avatar">
                    </div>

                    <div class="container">
                        <label><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname" required>

                        <label><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <button type="submit">Login</button>
                        <label>
                            <input type="checkbox" checked="checked"> Remember me
                        </label>
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
        <div class="col-4 col-sm-4 col-lg-4 col-md-4"></div>
    </div>

</body>
</html>