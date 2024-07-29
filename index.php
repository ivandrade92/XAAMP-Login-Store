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

<body class="position-relative">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <div id="content" class="d-flex col-12 my-3 p-2 justify-content-center text-center row g-4">
        <div>
            <img src="assets/images/logo.png" width="390px">
        </div>
        <div>
            <audio src="assets/sounds/sonido.mp3" controls="controls"></audio>
        </div>
        <div>
            <img src="assets/images/image1.png" width="190px">
        </div>

    </div>



</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>