<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id = $_POST['id_venta'];
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];
    $total = $_POST['total'];
    $id_cajero = $_POST['id_cajero'];
    $id_cliente = $_POST['id_cliente'];
    $no_factura = $_POST['no_factura'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE ventas SET 
                fecha = '$fecha',
                hora = '$hora',
                producto = '$producto',
                precio = '$precio',
                cantidad = '$cantidad',
                total = '$total',
                id_cajero = '$id_cajero',
                id_cliente = '$id_cliente',
                no_factura = '$no_factura'
                WHERE id_venta = $id";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/marcas/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
