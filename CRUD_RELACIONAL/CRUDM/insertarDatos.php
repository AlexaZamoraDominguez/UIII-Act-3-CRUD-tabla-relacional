<?php
include "../config/conexion.php";

$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $_POST['total'];
$id_cajero = $_POST['id_cajero'];
$id_cliente = $_POST['id_cliente'];
$no_factura = $_POST['no_factura'];

$sql = "INSERT INTO ventas (fecha, hora, producto, precio, cantidad, total, id_cajero, id_cliente, no_factura)
    VALUES ('$fecha', '$hora', '$producto', $precio, $cantidad, $total, $id_cajero, $id_cliente, $no_factura)";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/marcas/index.php");
} else {
    echo "Datos no insertados";
}
?>
