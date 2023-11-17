<?php
include_once("../config/conexion.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_proveedor = $_POST['id_proveedor'];
    $nombre = $_POST['nombre'];
    $origen = $_POST['origen'];
    $transporte = $_POST['transporte'];
    $ubicacion = $_POST['ubicacion'];
    $categoria = $_POST['categoria'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE proveedor SET 
                nombre = '$nombre',
                origen = '$origen',
                transporte = '$transporte',
                ubicacion = '$ubicacion',
                categoria_p = '$categoria',
                correo = '$correo',
                telefono = '$telefono'
                WHERE id_proveedor = $id_proveedor";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("Location: ../Formularios/productos/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
} else {
    // Redireccionar a alguna página si la solicitud no es POST
    header("Location: ../Formularios/proveedores/index.php");
    exit();
}

mysqli_close($conexion);
?>
