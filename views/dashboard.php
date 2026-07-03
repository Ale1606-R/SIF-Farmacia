<?php
// 1. Iniciar la sesión para verificar si el usuario está logueado
session_start();

// 2. Si no existe la variable de sesión, lo mandamos directo al login
if (!isset($_SESSION['Nombre_usuario'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIF - Panel de Control</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; display: flex; }
        .sidebar { width: 250px; background: #2c3e50; color: white; height: 100vh; padding: 20px; }
        .main-content { flex: 1; padding: 20px; background: #f8f9fa; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        a { color: white; text-decoration: none; display: block; margin: 15px 0; }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2>SIF-Sistema de Invenatri de Farmacia</h2>
        <p>Bienvenido, <strong><?php echo $_SESSION['Nombre_usuario']; ?></strong></p>
        <hr>
        <a href="#">Medicamentos</a>
        <a href="#">Vendedores</a>
        <a href="#">Bodeguero</a>
        <hr>
        <a href="../controllers/loginfarmacia.php" style="color: #e74c3c;">❌ Cerrar Sesión</a>
    </div>

    <div class="main-content">
        <h1>Panel de Control (Dashboard)</h1>
        <div class="card">
            <h3>Resumen del Sistema</h3>
            <p>Aquí se gestionará todo el inventario de la Farmacia.</p>
        </div>
    </div>

</body>
</html>