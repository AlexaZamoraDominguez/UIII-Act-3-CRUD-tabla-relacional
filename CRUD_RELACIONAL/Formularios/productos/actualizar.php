<?php
include_once("../../config/conexion.php");

// Verificar si se recibió un ID válido
if (isset($_REQUEST['id_proveedor']) && is_numeric($_REQUEST['id_proveedor'])) {
    $id_proveedor = $_REQUEST['id_proveedor'];

    // Obtener datos del proveedor por ID
    $sql = "SELECT * FROM proveedor WHERE id_proveedor = $id_proveedor";
    $resultado = $conexion->query($sql);

    // Verificar si se encontraron resultados
    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
    } else {
        // Manejar el caso en el que no se encuentren resultados
        echo "Proveedor no encontrado";
        exit;
    }
} else {
    // Manejar el caso en el que no se proporcionó un ID válido
    echo "ID de proveedor no válido";
    exit;
}
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actualizar</title>
    <link rel="stylesheet" href="<?php echo base_url; ?>css/bootstrap.min.css">
</head>

<body>

    <!-- CODIGO DE NAVBAR RESPONSIVA -->
    <header>
        <nav class="navbar navbar-expand-lg bg-dark" data-bs-theme="dark">
            <div class="container">
                <a class="navbar-brand" href="<?php echo base_url; ?>">
                    <img src="<?php echo base_url; ?>img/logo.png" alt="logo" height="55" width="115">
                </a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mi-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mi-menu">
                <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>">INICIO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/productos/index.php">PROVEEDOR</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/categorias/index.php">PRODUCTO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url; ?>Formularios/marcas/index.php">VENTAS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- FIN CODIGO DE NAVBAR RESPONSIVA -->

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">ACTUALIZAR PROVEEDOR</h5>
                        <form action="../../CRUDP/editarDatos.php" method="post">
                            <input type="hidden" class="form-control" name="id_proveedor" id="id_proveedor"
                                value="<?php echo $row['id_proveedor'] ?>">

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre del Proveedor</label>
                                <input type="text" class="form-control" id="nombre" name="nombre"
                                    placeholder="Nombre del proveedor" value="<?php echo $row['nombre'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="origen" class="form-label">Origen</label>
                                <input type="text" class="form-control" id="origen" name="origen"
                                    placeholder="Origen del proveedor" value="<?php echo $row['origen'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="transporte" class="form-label">Transporte</label>
                                <input type="text" class="form-control" name="transporte" id="transporte"
                                    placeholder="Medio de transporte" value="<?php echo $row['transporte'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="ubicacion" class="form-label">Ubicacion</label>
                                <input type="text" class="form-control" name="ubicacion" id="ubicacion"
                                    placeholder="Ubicación del proveedor" value="<?php echo $row['ubicacion'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="categoria" class="form-label">Categoria</label>
                                <input type="text" class="form-control" name="categoria" id="categoria"
                                    placeholder="Categoría del proveedor" value="<?php echo $row['categoria_p'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="correo" class="form-label">Correo</label>
                                <input type="email" class="form-control" name="correo" id="correo"
                                    placeholder="Correo del proveedor" value="<?php echo $row['correo'] ?>">
                            </div>
                            <div class="mb-3">
                                <label for="telefono" class="form-label">Telefono</label>
                                <input type="tel" class="form-control" name="telefono" id="telefono"
                                    placeholder="Teléfono del proveedor" value="<?php echo $row['telefono'] ?>">
                            </div>
                            <div class="text-center">
                                <a href="../proveedores/index.php" type="submit"
                                    class="btn btn-outline-secondary">Cancelar</a>
                                <button type="submit" class="btn btn-outline-primary">Actualizar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="<?php echo base_url; ?>js/bootstrap.min.js"></script>
    <script src="../../js/fontawesome.js"></script>

</body>

</html>