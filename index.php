<?php
        if (session_status() == PHP_SESSION_NONE)  session_start();

        require_once('functions/functions.php');

        $errors = [];

    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visit - Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
    <?php
    // print_r($_POST);
    $_SESSION['errors'] = @$username;
    @$username = $_POST['name'];
    @$password = $_POST['password'];

    require_once("functions/connect.php");

    $select = " SELECT * FROM admin WHERE username= '$username' && password='$password' ";

    $reslut = $connect->query($select);
    $num = $reslut->num_rows;

    if ($num > 0) {
        $_SESSION['login'] = $username;
        dd('dashboard.php');
    }
    ?>
    <div class="row">
        <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">Log in</div>
                <div class="panel-body">
                    <form role="form" action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="UserName" type="text" autofocus="" name="name">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" type="password" value="" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><!-- /.col-->
    </div><!-- /.row -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>