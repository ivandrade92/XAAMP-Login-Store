<head>
    <meta charset="UTF-8" />
    <title>Registro</title>
    <link rel="stylesheet" href="estilos/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <script src="js/jquery-3.7.1.js"></script>
    <script src="js/script.js"></script>
</head>
<header>
    <?php include 'components/header.php';
    ?>
</header>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
    <?php
    include 'config/conexion.php';
    ?>
    <div id="content" class="d-flex col-12 my-2 p-2 justify-content-center align-items-center">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <form name="register" id="register" class="container-fluid col-12 d-grid gap-3" method="post">
                    <div class="justify-content-center text-center">
                        <h2 class="card-title">Registro</h2>

                        <svg xmlns="http://www.w3.org/2000/svg" width="70" height="150" fill="rgb(124, 163, 235)"
                            class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                            <path
                                d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5M.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5m15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5">
                            </path>
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0"></path>
                        </svg>
                    </div>
                    <input type="text" name="usuario" id="usuario" class="form-control input-sm" placeholder="Usuario" required>
                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Correo electrónico"
                        required>
                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Contraseña"
                        required>
                    <input type="submit" value="Registrar" class="btn btn-primary" name="registro">
                    <?php
                    if (isset($_POST['registro'])) {
                        $usuario = $_POST['usuario'];
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                        $password = password_hash($password, PASSWORD_DEFAULT);
                        $query = "INSERT INTO clientes (nombre, email, password) VALUES ('$usuario', '$email', '$password')";
                        $result = mysqli_query($connection, $query);
                        if ($result) {
                            echo "<script>alert('Usuario registrado correctamente');</script>";
                            echo "<script>window.location.href = 'login.php';</script>";
                            exit();

                        } else {
                            echo "<script>alert('Error al registrar usuario');</script>";
                            echo "<script>window.location.href = 'registro.php';</script>";
                            exit();
                        }
                    }
                    ?>
                </form>
            </div>
        </div>
</body>
<footer>
    <?php include 'components/footer.php'; ?>
</footer>