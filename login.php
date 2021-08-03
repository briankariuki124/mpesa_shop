<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="bootstrap/js/jquery-3.4.0.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">

    <style>
        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
            position: relative;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }'
        .m{
            width: 60%;
        }
        .lg{
            background-color: #fdf8ad;
            padding-left: 20px;
            padding-right: 20px;
            height: 70vh;
            border-radius: 5px;
        }
        .azx{
            float: right;
        }
        body{
            background: rgb(180, 180, 180);
        }
    </style>
</head>
<body>
    <div class="row">
        <div class="col-2 col-md-2 col-lg-2 col-sm-2"></div>
        <div class="col-8 col-md-8 col-lg-8 col-sm-8" style="margin-top: 10vh;">
            <form action="login_handler.php" method="post" class="lg">
                <div class="imgcontainer">
                    <img src="resources/camcat2.png" alt="Avatar" class="avatar">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control m" placeholder="Enter Username" name="usr" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control m" placeholder="Enter Password" name="pass" required>
                </div>
                <button class="btn btn-primary" value="submit" name="btn_login">Login</button>
                <br>
                <p class="azx">Don't have an account yet? <a href="sign_up.php">Sign Up</a></p>
            </form>
        </div>
        <div class="col-2 col-md-2 col-lg-2 col-sm-2"></div>
    </div>

</body>
</html>