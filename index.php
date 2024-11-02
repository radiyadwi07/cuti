<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Template, tutorial, PHP, HTML, CSS">
    <meta name="author" content="Author">
    <meta name="keyword" content="Template, tutorial, PHP, HTML, CSS">
    <!-- <link rel="shortcut icon" href="assets/ico/favicon.png"> -->

    <title>Aplikasi Cuti Pegawai </title>

    <!-- Icons -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/simple-line-icons.css" rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card-group mb-0">
                    <div class="card p-4">
                        <div class="card-body">
                            <h1>Login Pegawai</h1>
                            <p class="text-muted">Aplikasi Cuti Pegawai</p>
                            <form action="loginkaryawan.php" method="post">
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i>
                                </span>
                                <input type="email" class="form-control" placeholder="Email anda" autocomplete="off" name="email" id="email">
                            </div>
                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" id="password">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <input type="submit" class="btn btn-primary px-4" value="Login" name="login" id="login"/>
                                </div>
                                 <div class="col-6 text-right">
                                    <a href="login.php" class="btn btn-link px-0">Login Admin</a>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                <!--    <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div>
                                <h2>Sign up</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a type="button" class="btn btn-primary active mt-3">Register Now!</a>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap and necessary plugins -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/tether/dist/js/tether.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



</body>

</html>


