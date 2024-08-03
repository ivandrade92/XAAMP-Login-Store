<?php
session_start();
include('connection.php');
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM productos WHERE idproducto = $id";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
    $nombreproducto = $row['nombreproducto'];
    $precio = $row['precio'];
    $cantidad = $row['cantidad'];
    $query = "INSERT INTO carrito (nombreproducto, precio, cantidad) VALUES ('$nombreproducto', $precio, $cantidad)";
    mysqli_query($connection, $query);
    header('Location: ../productos.php');
}
?>