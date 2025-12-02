<?php 
include("conexion.php"); 
include("barra_lateral.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Pescadería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">

    <h1 class="text-center mb-4">🐟 Dashboard de Gestión — Pescadería</h1>

    <div class="row">

        <?php
        $usuarios = $conn->query("SELECT COUNT(*) AS total FROM usuarios")->fetch_assoc()['total'];
        $categorias = $conn->query("SELECT COUNT(*) AS total FROM categoria_productos")->fetch_assoc()['total'];
        $productos = $conn->query("SELECT COUNT(*) AS total FROM productos")->fetch_assoc()['total'];
        ?>

        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body text-center">
                    <h3><?php echo $usuarios; ?></h3>
                    <p>Usuarios Registrados</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-body text-center">
                    <h3><?php echo $categorias; ?></h3>
                    <p>Categorías Registradas</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-white bg-info mb-3">
                <div class="card-body text-center">
                    <h3><?php echo $productos; ?></h3>
                    <p>Productos Registrados</p>
                </div>
            </div>
        </div>
    </div>

    <!-- TABLA DE CATEGORÍAS -->
    <h2 class="mt-5">📦 Categorías</h2>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $resultado = $conn->query("SELECT * FROM categoria_productos");
        while ($cat = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $cat['id']; ?></td>
                <td><?php echo $cat['nombre']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

    <!-- TABLA DE PRODUCTOS -->
    <h2 class="mt-5">🐠 Productos</h2>
    <table class="table table-striped table-hover">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $resultado = $conn->query("
            SELECT p.*, c.nombre AS categoria 
            FROM productos p 
            LEFT JOIN categoria_productos c ON p.categoria_id = c.id
        ");
        while ($prod = $resultado->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $prod['id']; ?></td>
                <td><?php echo $prod['nombre']; ?></td>
                <td><?php echo $prod['descripcion']; ?></td>
                <td>$<?php echo number_format($prod['precio']); ?></td>
                <td><?php echo $prod['categoria']; ?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
