<div class="container">
    <div class="row">
        <div class="col-md-12">
            <form " method="post">
                <div class="form-group d-grid gap-3">
                    <input type="name" class="form-control" id="name" name="name" placeholder="Nombre" required>
                    <input type="text" class="form-control" id="text" name="calle" placeholder="Calle" required>
                    <input type="text" class="form-control" id="text" name="colonia" placeholder="Colonia" required>
                    <input type="text" class="form-control" id="text" name="ciudad" placeholder="Ciudad" required>
                    <input type="text" class="form-control" id="text" name="edo" placeholder="Estado" required>
                    <input type="number" class="form-control" id="text" name="cp" placeholder="Codigo Postal" max="99999" required>
                    <input type="tel" class="form-control" id="text" name="telefono" placeholder="Telefono" required>
                </div>
                <div class="">
                    <input type="submit" class="btn btn-primary my-2 " value="Comprar">
                </div>
            </form>
        </div>
    </div>
</div>
<?php
include 'config/conexion.php';
if(isset($_POST['name']) && isset($_POST['calle']) && isset($_POST['colonia']) && isset($_POST['edo']) && isset($_POST['cp']) && isset($_POST['telefono']) && isset($_POST['ciudad'])){
$post= "INSERT INTO pedido (recibe, calle, colonia, estado, cp, telefono,idcliente,municipio) VALUES ('$_POST[name]', '$_POST[calle]', '$_POST[colonia]', '$_POST[edo]', '$_POST[cp]', '$_POST[telefono]', '$_SESSION[id]', '$_POST[ciudad]')"; 
mysqli_query($connection, $post);
$payment = "INSERT INTO detallepedido (cantidad, precio, idcliente) VALUES ('$_SESSION[quantity]','$_total', '$_SESSION[id]')";
mysqli_query($connection, $payment);
$querydelete = "SELECT * FROM carrito WHERE idcliente = $_SESSION[id]";
$result = mysqli_query($connection, $querydelete);
while ($row = mysqli_fetch_array($result)) {
    $update = "UPDATE productos SET existencias= existencias - $row[cantidad] WHERE idproducto = $row[idproducto]";
    mysqli_query($connection, $update);
}
$delete = "DELETE FROM carrito WHERE idcliente = $_SESSION[id]";
mysqli_query($connection, $delete);

echo "<script>alert('Datos enviados correctamente');</script>";
echo "<script>window.location.replace('productos.php');</script>";
}
?>