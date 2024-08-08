<head>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
    <title>Carrito</title>
</head>
<header>
    <?php include 'components/header.php';

    ?>
</header>


<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="d-flex col-12 my-2 p-2 justify-content-center" style="font-size: 14px;">
        <?php
        if (isset($_SESSION['nombre'])) {
        ?>
            <div class="row">
                <section name=title>
                    <h2 class="text-center">Carrito de Compras</h2>
                </section>
                <section name="list">
                    <?php
                    include 'config/conexion.php';
                    $cart = "SELECT * FROM carrito WHERE idcliente = $_SESSION[id]"; ;
                    $result = mysqli_query($connection, $cart);
                    $total = 0.00;
                    $quantity = 0;
                    $_SESSION['quantity'] = 0;
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>image</th> 
                                <th>Producto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th>Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result)) {
                                $_total = 0;
                                $_total += $row['precio'] * $row['cantidad'];
                                $quantity += $row['cantidad'];
                                $_SESSION['quantity'] += $row['cantidad'];
                            ?>
                            <tr>
                                <td><?php echo $row['idcliente']; ?></td>
                                <td><img src="assets/images/productos/Iconos/<?php echo $row['urlimage']; ?>" alt="imagen" width="40px"></td>
                                <td><?php echo $row['nombreproducto']; ?></td>
                                <td><?php echo $row['cantidad']; ?></td>
                                <td>$<?php echo $row['precio']; ?></td>
                                <td>$<?php echo $row['precio'] * $row['cantidad']; ?></td>
                            </tr>
                            <?php
                            }
                            ?>
                            <tr>
                                <td>Total</td>
                                <td><?php echo $quantity; ?></td>
                                <td></td>
                                <td>$<?php echo $_total; ?></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <?php
                    } else {
                        echo "<script>alert('No hay productos en el carrito');</script>";
                        echo "<script>window.location.href = 'productos.php';</script>";
                    }
                    ?>
                </section>
                <section name="actions">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Proceder al Pago
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Datos de envio</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <?php include 'envio.php'; ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        <?php
        } else {
        ?>
            <div class="row text-center">
                <h3>Debes iniciar sesión para ver tu carrito</h3>
                <a href="login.php" class="btn btn-primary">Iniciar Sesión</a>
            </div>
        <?php
        }
        ?>
    </div>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>