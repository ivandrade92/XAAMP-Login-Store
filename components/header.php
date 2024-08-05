 <link rel="stylesheet" href="estilos/style.css" />
 <?php
  session_start();
  ?>
 <nav class="navbar menu">
   <div class="container-fluid">
     <div id="home-btn">
       <a class="navbar-brand" href="index.php"><img src="assets/images/cloudmexlogo.png" width="70px"></a>
     </div>

     <div id="menu-btn p-1" class="d-flex align-items-center">
       <div class="group">
         <?php
          if (isset($_SESSION['email'])) {
            echo "<a class='btn btn-success btn-sm' href='dashboard.php'>$_SESSION[nombre]</a>";
          } else {
            echo "<a class='btn btn-dark btn-sm' href='login.php'>Iniciar Sesión</a>";
          }
          ?>
         <a class="btn btn-primary btn-sm" href="productos.php">Tienda</a>
         <a class="btn btn-primary btn-sm" href="carrito.php">Carrito<span class="badge text-bg-secondary"></span></a>
       </div>
       <button class="navbar-toggler btn-sm mx-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
         <span class="">
           <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-menu-up" viewBox="0 0 16 16">
             <path d="M7.646 15.854a.5.5 0 0 0 .708 0L10.207 14H14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.793zM1 9V6h14v3zm14 1v2a1 1 0 0 1-1 1h-3.793a1 1 0 0 0-.707.293l-1.5 1.5-1.5-1.5A1 1 0 0 0 5.793 13H2a1 1 0 0 1-1-1v-2zm0-5H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zM2 11.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 0-1h-8a.5.5 0 0 0-.5.5m0-4a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11a.5.5 0 0 0-.5.5m0-4a.5.5 0 0 0 .5.5h6a.5.5 0 0 0 0-1h-6a.5.5 0 0 0-.5.5" />
           </svg>
           <i class="bi bi-menu-button-wide"></i> </span>
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
               <a class="nav-link" href="contacto.php  ">Contacto</a>
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