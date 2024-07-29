<head>
    <meta charset="UTF-8" />
    <title>CLOUDMEX</title>
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
    <div id="content" class="d-flex col-12 my-2 p-2 justify-content-center">
        <div class="card" style="width: 18rem;">
            <?php
            $query = "SELECT * FROM productos";
            $result = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="card-body">
                    <img src="assets/images/productos/iconos/<?php echo $row['urlimage']; ?> "class="card-img-top" alt="...">
                    <h5 class="card-title"><?php echo $row['shortname']; ?></h5>
                    <p class="card-text"><?php echo $row['descripcion']; ?></p>
                    <p class="card-text">$<?php echo $row['precio']; ?></p>
                </div>
            <?php
            }
            ?>
        </div>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>