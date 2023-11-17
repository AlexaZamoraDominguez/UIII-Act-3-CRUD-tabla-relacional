<?php
include "../config/conexion.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recibir los datos del formulario de edición
    $id_producto = $_POST['id_producto'];
    $nombreProducto = $_POST['nombre'];
    $color = $_POST['color'];
    $precio = $_POST['precio'];
    $mujerHombre = $_POST['mujer_hombre'];
    $talla = $_POST['talla'];
    $cantidad = $_POST['cantidad'];
    $marca = $_POST['marca'];

    // Actualizar los datos en la base de datos
    $consulta = "UPDATE producto SET nombre_p = '$nombreProducto', color = '$color', precio = '$precio', mujer_hombre = '$mujerHombre', talla = '$talla', cantidad = '$cantidad', marca = '$marca' WHERE id_producto = $id_producto";

    if (mysqli_query($conexion, $consulta)) {
        // Redireccionar a alguna página después de la actualización exitosa
        header("location:../Formularios/categorias/index.php");
        exit();
    } else {
        // Mostrar un mensaje de error si la actualización falla
        echo "Error al actualizar el registro: " . mysqli_error($conexion);
    }
}
?>
