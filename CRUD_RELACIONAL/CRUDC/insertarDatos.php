<?php
include "../config/conexion.php";

$nombreProducto = $_POST['nombre'];
$color = $_POST['color'];
$precio = $_POST['precio'];
$mujerHombre = $_POST['mujer_hombre'];
$talla = $_POST['talla'];
$cantidad = $_POST['cantidad'];
$marca = $_POST['marca'];

$sql = "INSERT INTO producto (nombre_p, color, precio, mujer_hombre, talla, cantidad, marca)
    VALUES ('$nombreProducto', '$color', '$precio', '$mujerHombre', '$talla', '$cantidad', '$marca')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado == TRUE) {
    header("location:../Formularios/categorias/index.php");
} else {
    echo "Datos no insertados";
}
?>
