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
                $email = $_SESSION['email'];
                $query = "SELECT * FROM carrito WHERE email = '$email'";
                $result = mysqli_query($connection, $query);
                $total = 0;
                while ($row = mysqli_fetch_array($result)) {
                    $query2 = "SELECT * FROM productos WHERE id = $row[idproducto]";
                    $result2 = mysqli_query($connection, $query2);
                    $row2 = mysqli_fetch_array($result2);
                    $total += $row2['precio'] * $row['cantidad'];
            ?>
                    <div class="card m-1" style="width: 18rem;">
                        <div class="card-body text-center">
                            <img src="assets/images/productos/iconos/<?php echo $row2['urlimage']; ?> " class="card-img-top" alt="..." style="width: 80px;">
                            <h5 class="card-title
                            "><?php echo $row2['shortname']; ?></h5>
                            <p class="card-text"><?php echo $row2['descripcion']; ?></p>
                            <p class="card-text">$<?php echo $row2['precio']; ?></p>
                            <p class="card-text">Cantidad: <?php echo $row['cantidad']; ?></p>
                            <p class="card-text">Total: $<?php echo $row2['precio'] * $row['cantidad']; ?></p>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
            <div class="card m-1" style="width: 18rem;">
                <div class="card-body text-center">
                    <h5 class="card-title
                    ">Total: $<?php echo $total; ?></h5>
                    <form action="pagar.php" method="post">
                        <div class="form-group
                        ">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
                        </div>

        </div>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="d-flex col-12 my-2 p-2 justify-content-center" style="font-size: 14px;">

    </div>
</body>
