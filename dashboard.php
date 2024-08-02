<head>
    <meta charset="UTF-8" />
    <title>Panel de Usuario</title>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
</head>
<header>
    <?php include 'components/header.php'; ?>
</header>
<i>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <div id="content" class="d-flex col-12 m-2 p-2 justify-content-center ">
        <div class="row text-center col-6 justify-content-center">
            <?php
            include 'config/conexion.php';
            if (isset($_SESSION['email'])) {
                echo "<h1 class='text-center'>Bienvenido $_SESSION[nombre]</h1>";
                echo "<h2 class='text-center'>Tu correo es: $_SESSION[email]</h2>";
            } else {
                echo "<script>alert('Inicia sesión para acceder a tu perfil');</script>";
                echo "<script>window.location.href = 'login.php';</script>";
                exit();
            }
            ?>
            <form action='config/cerrarconexion.php'>
                <input class="btn btn-warning" type="submit" name="sesionDestroy" value="Cerrar sesion" />
            </form>
        </div>
    </div>
    <footer>
        <?php include 'components/footer.php'; ?>
    </footer>