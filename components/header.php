<?php
include 'config/conexion.php';
session_start();
?>
<nav class="navbar menu">
  <div class="container-fluid">
    <div id="home-btn">
      <a class="navbar-brand" href="index.php">CLOUDMEX</a>
    </div>

    <div id="menu-btn p-1">
      <?php
      if (isset($_SESSION['email'])) {
        echo "<a class='btn btn-success btn-sm' href='dashboard.php'>$_SESSION[nombre]</a>";        
      } else {
        echo "<a class='btn btn-dark btn-sm' href='login.php'>Iniciar Sesión</a>";
      }
      ?>
      <a class="btn btn-primary btn-sm" href="components/store/cart.php">Carrito</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
        aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>Menú
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menú</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contacto.html">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="productos.php">Productos</a>
            </li>
          </ul>

        </div>
      </div>
    </div>
  </div>
</nav>