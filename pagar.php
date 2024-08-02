<head>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
    <title>Datos de pago</title>
</head>
</header>
<?php
include 'config/conexion.php';
?>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="d-flex col-12 my-2 p-2 justify-content-center" style="font-size: 14px;">
        <?php
        if (isset($_SESSION['email'])) {

        ?>
            <h2 class="text-center">Datos de pago</h2>
        <?php
        } else {
        ?>
            <h2 class="text-center">Inicia sesión para continuar</h2>
        <?php
        }
        ?>
    </div>
</body>