<?php
session_start();

if (!isset($_SESSION['user'])){
    header('Location: index.php');
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Food Fast!</title>
    <link rel="stylesheet" href="assets/styles/styles.css"/>
    <link href="assets/img/favicon/favicon.ico" rel="icon"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

        <nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="mostrar_contenido.php"><img src="assets/img/favicon/android-chrome-192x192.png" id="logo-img" alt="logo hamburguesa"/><span id="logo-text">Food Fast!</span></a>
                     <a href="logout.php"> <button class="btn btn-outline-danger" type="submit">Logout</button></a>
            </div>
        </nav>
    <main>
        <section>
            <div class="p-1 bg-secondary">
                <div class="container d-flex flex justify-content-evenly align-items-center my-5">
                    <a href="mostrar_pedidos.php"><button type="button" class="btn btn-lg btn-primary">Ver Pedidos</button></a>
                    <a href="registrar_pedido.php"><button type="button" class="btn btn-lg btn-success">Registrar Pedido</button></a>
                    <a href="finalizar_pedido.php"><button type="button" class="btn btn-lg btn-danger">Pedidos Finalizados</button></a>
                </div>
            </div>
        </section>

        <section>
            <div class="container mb-3 mt-3">
                <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide border border-5 border-dark-subtle" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/menu/hamburguesa_cheddar.png" class="d-block w-100" alt="Burger" width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Hamburguesa con Cheddar</h5>
                                <p class="fw-bold">Combo con Papas Fritas y Bebida</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/menu/hamburguesa_bacon.jpg" class="d-block w-100" alt="..." width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Hamburguesa con Bacon</h5>
                                <p class="text-white fw-bold">Combo con Papas Fritas y Bebida</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/menu/hamburguesa_completa.jpg" class="d-block w-100" alt="..." width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Hamburguesa Completa</h5>
                                <p class="fw-bold">Combo con Papas Fritas y Bebida</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/menu/hamburguesa_crispy.jpg" class="d-block w-100" alt="..." width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Hamburguesa Crispy</h5>
                                <p class="fw-bold">Combo con Papas Fritas y Bebida</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/menu/crispy_chicken.jpg" class="d-block w-100" alt="..." width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5 class="text-white">Crispy Chicken</h5>
                                <p class="text-white fw-bold">Combo con Salsa, Papas Fritas y Bebida</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/menu/cono_helado.png" class="d-block w-100" alt="..." width="600" height="600">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Helados</h5>
                                <p class="fw-bold">Vainilla, Dulce de Leche y Combinado</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>


        </section>
    </main>

    <footer class="bg-secondary">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <h5 class="mb-3" style="letter-spacing: 2px; color: #e5e5e5;">Nosotros</h5>
                    <p>
                        Food Fast es una cadena de comida rápida fundada en 1985. La empresa se expandió rápidamente a nivel nacional e internacional y se convirtió en una de las más populares del mundo. La empresa ofrece una variedad de productos, incluyendo opciones vegetarianas y veganas, y sigue siendo propiedad y está dirigida por sus fundadores.
                    </p>
                </div>

                <div class="col-lg-3 col-md-6 mb-4">
                    <h5 class="mb-1" style="letter-spacing: 2px; color: #e5e5e5;">Horarios</h5>
                    <table class="table" style="color: #4f4f4f; border-color: #666;">
                        <tbody>
                        <tr>
                            <td>Lunes - Viernes:</td>
                            <td>19 PM - 23 PM</td>
                        </tr>
                        <tr>
                            <td>Sabado - Domingo:</td>
                            <td>19 PM - 1 AM</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Copyright:
            Mathias Alejandro Salva
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>