<?php
include_once("../config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id_proveedor'])) {
    $id_proveedor = $_GET['id_proveedor'];

    // Consulta para eliminar el registro de la base de datos
    $consulta = "DELETE FROM proveedor WHERE id_proveedor = $id_proveedor";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la eliminación exitosa
        header("Location: ../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la eliminación falla
        echo "Error al eliminar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si el ID no está definido o la solicitud no es GET
    header("Location: ../Formularios/proveedores/index.php");
    exit();
}

mysqli_close($conexion);
?>
