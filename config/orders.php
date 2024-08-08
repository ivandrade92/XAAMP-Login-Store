<?php
include 'conexion.php';
$id = $_SESSION['id'];
$order = "SELECT * FROM detallepedido WHERE idcliente = '$id'";
$ordenes = mysqli_query($connection, $order);
?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col">pedidoNum</th>
            <th scope="col">cantidad</th>
            <th scope="col">precio</th>
        </tr>
    </thead>
    <?php
    while ($row = mysqli_fetch_array($ordenes)) {
    ?>
        <tbody>
            <tr>
                <td><?php echo $row['idpedido']; ?></td>
                <td><?php echo $row['cantidad']; ?></td>
                <td><?php echo $row['precio']; ?></td>
            </tr>
        </tbody>
    <?php
    }
    ?>
</table>