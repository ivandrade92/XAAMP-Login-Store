<head>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
    <title>Contacto</title>
</head>
<header>
    <?php include 'components/header.php';

    ?>
</header>
<?php
include 'config/conexion.php';
?>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="d-flex col-12 my-2 p-2 justify-content-center" style="font-size: 14px;">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Carrito</h1>
            </div>
            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Producto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $total = 0;
                        if (isset($_SESSION['email'])) {
                            $email = $_SESSION['email'];
                            $query = "SELECT * FROM carrito WHERE email = '$email'";
                            $result = mysqli_query($connection, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                $query2 = "SELECT * FROM productos WHERE id = $row[idproducto]";
                                $result2 = mysqli_query($connection, $query2);
                                $row2 = mysqli_fetch_array($result2);
                                $total += $row2['precio'] * $row['cantidad'];
                        ?>
                                <tr>
                                    <td><?php echo $row2['shortname']; ?></td>
                                    <td>$<?php echo $row2['precio']; ?></td>
                                    <td><?php echo $row['cantidad']; ?></td>
                                    <td>$<?php echo $row2['precio'] * $row['cantidad']; ?></td>
                                </tr>
                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <h3 class="text-center">Total: $<?php echo $total; ?></h3>
                <div class="d-grid gap-2">
                    <a href="pagar.php" class="btn btn-primary">Pagar</a>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>