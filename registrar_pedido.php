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
    <link href="assets/img/favicon/favicon.ico" rel="icon"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
<header>

</header>
<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand">Food Fast!</a>
        <a href="logout.php"> <button class="btn btn-outline-danger" type="submit">Logout</button></a>
    </div>
</nav>
<main>
    <section>
        <div class="p-5 bg-secondary">

        </div>
    </section>

    <section>
        <div class="container mb-3 bg-warning my-3 p-3 rounded">
            <form action="cargar_pedido.php" method="post" enctype="multipart/form-data">
                <!--Código -->
                <label for="codigo">Comida/Combo</label>
                <div>
                    <select class="form-select" aria-label="Comida" id="codigo" name="codigo">
                        <option selected>Seleccionar opción</option>
                        <option value="BUR1">Hamburguesa Cheddar con Papas Fritas y Bebida</option>
                        <option value="BUR2">Hamburguesa Completa con Papas Fritas y Bebida</option>
                        <option value="BUR3">Hamburguesa Bacon con Papas Fritas y Bebida</option>
                        <option value="BUR4">Hamburguesa Crisp con Papas Fritas y Bebida</option>
                        <option value="CRP">Crispy Chicken con dos salsas, Papas Fritas y Bebida</option>
                        <option value="HEL1">Helado de Vainilla</option>
                        <option value="HEL2">Helado de Dulce de Leche</option>
                        <option value="HEL3">Helado Combinado</option>
                    </select>
                </div>
                <!--Descripcion -->
                <div class="mb-3">
                    <label for="Descripcion" class="form-label">Descripcion</label>
                    <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
                </div>
                <!-- Cantidad -->
                <label for="cantidad">Cantidad</label>
                <div class="mb-3">
                    <input type="number" class="form-control" aria-label="Cantidad" id="cantidad" name="cantidad">
                </div>

                <!-- Archivo -->
                <div class="mb-3">
                    <label for="reciboimagen" class="form-label">Recibo Imagen</label>
                    <input class="form-control" type="file" id="reciboimagen" name="reciboimagen">
                </div>

                <!-- Total -->
                <label for="total">Total</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Total" id="total" name="total">
                    <span class="input-group-text">.00</span>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <br>
            <a href="http://localhost:8080/foodfast/mostrar_contenido.php"><button type="button" class="btn btn-light">Volver</button></a>

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
    <!-- Copyright -->
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

<?php
//TODO: Agregar logs con file management
//TODO: Agregar imagen (manejo de imagen o envio de imagen)
?>