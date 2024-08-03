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

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="col-12 my-2 p-2" style="font-size: 14px;">
        <div class="row">
            <div id="title" class="col-12">
                <h1 class="text-center">Productos</h1>
            </div>
            <div id="filter" class="">
                <form action="productos.php" method="post" class="d-flex col-12 justify-content-center">
                    <div class="row">
                        <div class="form-group gap-3 col-12">
                            <label for="search">Buscar producto</label>
                            <input type="text" class="form-control" id="search" name="search" placeholder="Buscar producto">
                        </div>
                        <div id="actions" class="d-flex justify-content-center m-2">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                    </div>
            </div>
            <div class="col-12 border d-flex">
                <?php
                if (isset($_POST['search'])) {
                    $search = $_POST['search'];
                    $query = "SELECT * FROM productos WHERE nombreproducto LIKE '%$search%' OR descripcion LIKE '%$search%' OR precio LIKE '%$search%' ";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                        <div class="card m-1" style="width: 18rem;">
                            <div class="card-body text-center">
                                <img src="assets/images/productos/iconos/<?php echo $row['urlimage']; ?> " class="card-img-top" alt="..." style="width: 80px;">
                                <h5 class="card-title"><?php echo $row['nombreproducto']; ?></h5>
                                <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                <p class="card-text">$<?php echo $row['precio']; ?></p>
                                <p class="card-text"><?php echo $row['cantidad']; ?></p>
                                <div class="d-flex justify-content-center">
                                    <?php
                                    if (isset($_SESSION['nombre'])) {
                                    ?>
                                        <a href="config/addtocart.php?id=<?php echo $row['idproducto']; ?>" class="btn btn-primary">Agregar al carrito</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    $query = "SELECT * FROM productos";
                    $result = mysqli_query($connection, $query);
                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="card m-1" style="width: 18rem;">
                            <div class="card-body text-center">
                                <img src="assets/images/productos/iconos/<?php echo $row['urlimage']; ?> " class="card-img-top" alt="..." style="width: 80px;">
                                <h5 class="card-title
                        "><?php echo $row['nombreproducto']; ?></h5>
                                <p class="card-text"><?php echo $row['descripcion']; ?></p>
                                <p class="card-text">$<?php echo $row['precio']; ?></p>
                                <p class="card-text"><?php echo $row['cantidad']; ?></p>
                                <div class="d-flex justify-content-center">
                                    <?php
                                    if (isset($_SESSION['nombre'])) {
                                    ?>
                                        <a href="config/addtocart.php?id=<?php echo $row['idproducto']; ?>" class="btn btn-primary">Agregar al carrito</a>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>

            </div>
        </div>
        </form>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>