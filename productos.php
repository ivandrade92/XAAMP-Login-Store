<head>
    <meta charset="UTF-8" />
    <title>CLOUDMEX</title>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
</head>
<header>
    <?php include 'components/header.php'; ?>
</header>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <div id="content" class="d-flex col-12 m-2 p-2">
        <div id="container-list" class="flex-column col-2">
            <div id="group-menu" class="btn-group-vertical p-2 gap-2 category-list">
                <button id="btn-list" class="btn btn-primary category-item" category="todo">Todos</button>
                <button id="btn-list" class="btn btn-primary category-item"
                    category="administracion">Administración</button>
                <button id="btn-list" class="btn btn-primary category-item" category="instalacion">Instalación</button>
                <button id="btn-list" class="btn btn-primary category-item" category="desarrollo">Desarrollo</button>
            </div>
        </div>
        <div id="container cards" class="col-9 m-2 d-flex row justify-content-center gap-2 product-list">
            <div class="card col-2 product-item" style="width: 12rem;" category="administracion">
                <img src="assets/images/productos/Iconos/domainico.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Dominio</h5>
                    <p class="card-text">Registro de dominios</p>
                </div>
            </div>
            <div class="card col-2 product-item" style="width: 12rem;" category="administracion">
                <img src="assets/images/productos/Iconos/awsico.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Amazon Web Services</h5>
                    <p class="card-text">Administracion e implementación</p>
                </div>
            </div>
            <div class="card col-2 product-item" style="width: 12rem;" category="administracion">
                <img src="assets/images/productos/Iconos/gcloud.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Google Cloud</h5>
                    <p class="card-text">Administracion e implementación</p>
                </div>
            </div>
            <div class="card col-2 product-item" style="width: 12rem;" category="instalacion">
                <img src="assets/images/productos/Iconos/serveico.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Cloud Server</h5>
                    <p class="card-text">Hosting</p>
                </div>
            </div>
            <div class="card col-2 product-item" style="width: 12rem;" category="desarrollo">
                <img src="assets/images/productos/Iconos/codeico.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Aplicaciones Web</h5>
                    <p class="card-text">Aplicaciones a medida</p>
                </div>
            </div>
            <div class="card col-2 product-item" style="width: 12rem;" category="instalacion">
                <img src="assets/images/productos/Iconos/lserveico.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Servidores internos</h5>
                    <p class="card-text">Linux Servers
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>