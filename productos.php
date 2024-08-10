<head>
    <meta charset="UTF-8" />
    <title>Servicios</title>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
</head>
<header>
    <?php include 'components/header.php';
    ?>
</header>
<?php
include 'config/conexion.php';
?>

<body class="">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="col-12 my-2 d-flex justify-content-center" style="font-size: 14px;">
        <div class="d-flex row col-10 justify-content-center">
            <div class="col-12  ">
                <h1 class="text-center">Productos</h1>
            </div>
            <div class="col-12 d-flex row justify-content-center">
                <div>
                    <form action='productos.php' method='post'>
                        <input class="search" type="text" name="search" placeholder="Buscar producto" />
                        <input class="btn btn-primary" type="submit" name="buscar" value="Buscar" />
                    </form>
                </div>
                <?php
                if (isset($_POST['buscar'])) {
                    $search = $_POST['search'];
                    $query = "SELECT * FROM productos WHERE nombreproducto LIKE '%$search%' OR descripcion LIKE '%$search%' OR precio LIKE '%$search%'";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                        <div class="card m-2 col-3 d-flex" style="width: 18rem;">
                            <div class="card-body align-middle align-items-center text-center m-0">
                                <img src="assets/images/productos/Iconos/<?php echo $row['urlimage'] ?>" width="80px" class="" />
                                <h5 class="card-title
                                "><?php echo $row['nombreproducto']; ?></h5>
                                <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                <p class="card-text">$<?php echo $row['precio']; ?></p>
                                <p class="card-text">Cantidad: <?php echo $row['existencias']; ?></p>
                                <form action='productos.php' method='post'>
                                    <input type="hidden" name="idproducto" value="<?php echo $row['idproducto']; ?>" />
                                    <input type="hidden" name="nombreproducto" value="<?php echo $row['nombreproducto']; ?>" />
                                    <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>" />
                                    <input type="number" name="cantidad" value="1" style="margin: 5px" min="0" max="<?php echo $row['existencias']; ?>" required />
                                    <input class="btn btn-primary" type="submit" name="agregar" value="Agregar al carrito" />
                                </form>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    $query = "SELECT * FROM productos";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="card m-2 col-3 d-flex" style="width: 18rem;">
                            <div class="card-body align-middle align-items-center text-center m-0">
                                <img src="assets/images/productos/Iconos/<?php echo $row['urlimage'] ?>" width="80px" class="" />
                                <h5 class="card-title
                                "><?php echo $row['nombreproducto']; ?></h5>
                                <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                <p class="card-text">$<?php echo $row['precio']; ?></p>
                                <p class="card-text">Cantidad: <?php echo $row['existencias']; ?></p>
                                <form action='productos.php' method='post'>
                                    <input type="hidden" name="iconproduct" value="<?php echo $row['urlimage'] ?>" />
                                    <input type="hidden" name="idproducto" value="<?php echo $row['idproducto']; ?>" />
                                    <input type="hidden" name="nombreproducto" value="<?php echo $row['nombreproducto']; ?>" />
                                    <input type="hidden" name="precio" value="<?php echo $row['precio']; ?>" />
                                    <input type="number" name="cantidad" value="1" style="margin: 10px;" min="0" max="<?php echo $row['existencias']; ?>" required />
                                   <?php if(isset($_SESSION['id'])){ ?>
                                    <input class="btn btn-primary" type="submit" name="agregar" value="Agregar al carrito" />
                                    <?php }else{ ?>
                                    <a href="login.php" class="btn btn-primary">Inicia sesión para comprar</a>
                                    <?php } ?>
                                </form>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
                <?php
                if (isset($_POST['agregar'])) {
                    $linkimage = $_POST['iconproduct'];
                    $idproducto = $_POST['idproducto'];
                    $nombreproducto = $_POST['nombreproducto'];
                    $precio = $_POST['precio'];
                    $cantidad = $_POST['cantidad'];
                    $query = "INSERT INTO carrito (idcliente, idproducto, nombreproducto, precio,cantidad,urlimage) VALUES ('$_SESSION[id]', '$idproducto', '$nombreproducto', '$precio','$cantidad','$linkimage')";
                    $result = mysqli_query($connection, $query);
                    echo "<script>alert('Producto agregado al carrito');</script>";
                    echo "<script>window.location.href = 'productos.php';</script>";
                }
                ?>
            </div>
            <div class="col-12 d-flex row justify-content-center">
            </div>
        </div>
    </div>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>