<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIF - Inicio de Sesión</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>

        body {
            background: url("../Recursos/i.png");
            background-size: cover;          
            background-position: center;     
            background-repeat: no-repeat;    
            background-attachment: fixed;   
            height: 100vh;
            margin: 0;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center justify-content-center">

    <div class="text-center mb-4">
        <div class="d-flex align-items-center justify-content-center gap-2 mb-1">
            <image src = "../Recursos/boti.png" alt="Logo SIF" style="height: 65px; width: auto;">
            <h1 class="fw-bold m-0" style="font-size: 3.8rem; color: #1a2f3b; font-family: sans-serif;">SIF</h1>
        </div>
        <p class="fw-semibold m-0" style="font-size: 1.3rem; color: #495057;">Sistema de Inventario de Farmacia</p>
    </div> <div class="card shadow p-4" style="width: 100%; max-width: 400px; border-radius: 15px; background-color: #04263d; border: none;">
        <div class="card-body">
            <h2 class="text-center mb-4 fw-bold text-white" style="font-size: 1.5rem;">
                Acceso al Sistema de Inventario de Farmacia
            </h2>
            
            <form action="../controllers/loginfarmacia.php" method="POST">
                                                                
 <div class="mb-3">
    <label for="usuario" class="form-label fw-semibold text-white">Nombre de Usuario</label>
    
    <div class="input-group">
        <span class="input-group-text bg-secondary text-white border-0" style="background-color: #f2f4f5 !important;">
            👤
        </span>
        <input type="text" id="usuario" name="Nombre_usuario" placeholder="Nombre de Usuario" class="form-control" required autocomplete="off">
    </div>
</div>

<div class="mb-3">
    <label for="clave" class="form-label fw-semibold text-white">Contraseña</label>
    
    <div class="input-group">
        <span class="input-group-text bg-secondary text-white border-0" style="background-color: #f2f4f5 !important;">
            🔑
        </span>
        <input type="password" id="clave" name="Clave_acceso" placeholder="Contraseña" class="form-control" required>
    </div>
</div>
                
                <button type="submit" class="btn w-100 py-2 mt-3 fw-bold text-white shadow-sm" style="background-color: #0d8a72;">
                    Iniciar Sesión
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>