<?php
include "../config/conexion.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del formulario
    $nombre = $_POST['nombre'];
    $origen = $_POST['origen'];
    $transporte = $_POST['transporte'];
    $ubicacion = $_POST['ubicacion'];
    $categoria = $_POST['categoria'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];

    // Consulta SQL para insertar datos en la tabla 'proveedor'
    $sql = "INSERT INTO proveedor (nombre, origen, transporte, ubicacion, categoria_p, correo, telefono)
            VALUES ('$nombre', '$origen', '$transporte', '$ubicacion', '$categoria', '$correo', '$telefono')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        header("location:../Formularios/productos/index.php");
    } else {
        echo "Error al insertar datos: " . mysqli_error($conexion);
    }
}

include "../config/conexion.php";
?>
