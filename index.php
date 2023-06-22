<?php
session_start();

if (isset($_SESSION['user'])){
    header('Location: mostrar_contenido.php');
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Fast!</title>
    <link href="assets/img/favicon/favicon.ico" rel="icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body><section class="vh-100 bg-secondary">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card shadow-2-strong rounded-5">
                    <div class="card-body p-5 text-center">

                        <h3 class="mb-5">Food Fast Access</h3>
                        <form action="login.php" method="post">
                            <div class="form-outline mb-4">
                                <input type="text" id="usuario" class="form-control form-control-lg " name="usuario" required/>
                                <label class="form-label" for="usuario" >Usuario</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input type="password" id="password" class="form-control form-control-lg" name="password" required pattern="[A-Za-z0-9!?-]{8,12}"/>
                                <label class="form-label" for="password">Password</label>
                            </div>
                            <?php
                            if(isset($_GET['error'])){
                                echo "<p class='text-danger'>Datos incorrectos</p>";
                            }
                            ?>
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
