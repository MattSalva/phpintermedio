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
<header>

</header>
<nav class="navbar bg-dark border-bottom border-bottom-dark" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="mostrar_contenido.php"><img src="assets/img/favicon/android-chrome-192x192.png" id="logo-img" alt="logo hamburguesa"/><span id="logo-text">Food Fast!</span></a>
        <a href="logout.php"> <button class="btn btn-outline-danger" type="submit">Logout</button></a>
    </div>
</nav>
<main class="m-3">
    <section>
        <div class="p-5 bg-warning border border-2 rounded-5">
            <table class="table table-hover">
                <tr>
                    <th>#</th>
                    <th>Codigo</th>
                    <th>Combo/Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Cantidad</th>
                    <th>Recibo</th>
                    <th>Total</th>
                </tr>
                <?php
                include('conexion.php');

                $query = "SELECT * FROM pedidos";
                $res = mysqli_query($db, $query);
                $pedidos = mysqli_fetch_all($res);

                foreach ($pedidos as $p){
                    if ($p[3] != "En Progreso"){
                        echo "<tr>";
                        echo "<td>$p[0]</td>";
                        echo "<td>$p[1]</td>";
                        switch ($p[1]) {
                            case "BUR1":
                                echo "<td>Hamburguesa Cheddar con Papas Fritas y Bebida</td>";
                                break;
                            case "BUR2":
                                echo "<td>Hamburguesa Completa con Papas Fritas y Bebida</td>";
                                break;
                            case "BUR3":
                                echo "<td>Hamburguesa Bacon con Papas Fritas y Bebida</td>";
                                break;
                            case "BUR4":
                                echo "<td>Hamburguesa Crisp con Papas Fritas y Bebida</td>";
                                break;
                            case "CRP":
                                echo "<td>Crispy Chicken con dos salsas, Papas Fritas y Bebida</td>";
                                break;
                            case "HEL1":
                                echo "<td>Helado de Vainilla</td>";
                                break;
                            case "HEL2":
                                echo "<td>Helado de Dulce de Leche</td>";
                                break;
                            case "HEL3":
                                echo "<td>Helado Combinado</td>";
                                break;
                            default:
                                echo "N/A";
                        }
                        echo "<td>$p[2]</td>";
                        echo "<td>$p[3]</td>";
                        echo "<td>$p[5]</td>";
                        echo "<td><img src='$p[7]' alt='recibo' class='img-fluid'/></td>";
                        echo "<td>$$p[4]</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
            <a href="mostrar_contenido.php"><button type="button" class="btn btn-light">Volver</button></a>
        </div>

    </section>
</main>
<article></article>
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
<script src="assets/scripts/finalizar.js" type="application/javascript"></script>
</body>
</html>