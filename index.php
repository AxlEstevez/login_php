<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS Files-->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./sweetalert2/sweetalert2.min.css">
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white display-4">Login</h3>

        <div class="container">
            <div id="login-row" class="row justify-content-center aling-items-center">
                <div id="login-col" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light text-dark">
                        <form id="formlogin" class="form" method="POST" action="">
                            <h3 class="text-center text-dark">Iniciar Sesi&oacute;n</h3>
                            <div class="form-group">
                                <label for="Usuario" class="text-dark">Usuario</label>
                                <input type="text" name="usuario" id="usuario" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>

                            <div class="form-group text-center">
                                <input class="btn btn-dark btn-lg btn-block" type="submit" value="Enviar">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./jquery/jquery-3.6.0.min.js"></script>
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./popper/popper.min.js"></script>

    <script src="./sweetalert2/sweetalert2.all.min.js"></script>
    <script src="./main.js"></script>
</body>
</html>