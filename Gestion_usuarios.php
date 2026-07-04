<div class="d-flex justify-content-between align-items-center mb-4 animate__animated animate__fadeIn">
    <div>
        <h4 class="fw-bold mb-1 text-white">Gestión de Usuarios</h4>
        <p class="text-muted small mb-0">Administración de credenciales, roles y accesos al sistema SIF.</p>
    </div>
    <button class="btn btn-success d-flex align-items-center gap-2 px-3 style-btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoUsuario">
        <i class="fa-solid fa-user-plus"></i> Nuevo Usuario
    </button>
</div>

<div class="custom-card animate__animated animate__fadeIn">
    <div class="table-responsive">
        <table class="table table-dark table-borderless align-middle">
            <thead>
                <tr>
                    <th style="width: 80px;">ID</th>
                    <th>Nombre Completo</th>
                    <th>Usuario (Login)</th>
                    <th>Rol / Privilegio</th>
                    <th>Estado</th>
                    <th class="text-center" style="width: 150px;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                
                <tr>
                    <td colspan="6" class="text-center py-5">
                        <div class="d-flex flex-column align-items-center justify-content-center">
                            <div class="spinner-border text-success mb-3" style="width: 2rem; height: 2rem;" role="status"></div>
                            <span class="text-wait-custom fw-semibold text-white-50">Conectando con SQL Server...</span>
                            <span class="text-muted small mt-1">Esperando transferencia de registros desde la base de datos.</span>
                        </div>
                    </td>
                </tr>

                <?php
                /* =====================================================================
                   PLANTILLA EN SCRIPT DE CONEXIÓN REAL (Para cuando usemos sqlsrv):
                   Cuando traigas tu archivo de conexión, el ciclo se encargará de borrar 
                   el estado de carga de arriba e inyectará dinámicamente estas filas:
                   
                   // include '../conexion.php'; 
                   // $query = "SELECT * FROM Usuarios";
                   // $stmt = sqlsrv_query($conn, $query);
                   // while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) { 
                ===================================================================== */
                ?>
                <?php // } /* Fin del ciclo while */ ?>

            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalNuevoUsuario" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-secondary text-white" style="background-color: #172a3a; border: 1px solid rgba(255,255,255,0.1) !important;">
            <div class="modal-header border-bottom border-secondary">
                <h5 class="modal-title fw-bold text-white"><i class="fa-solid fa-user-plus text-success me-2"></i>Registrar Colaborador</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="formNuevoUsuario">
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo</label>
                        <input type="text" class="form-control" name="nombre" placeholder="Ej: Juan Pérez" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Nombre de Usuario (Login)</label>
                        <input type="text" class="form-control" name="usuario" placeholder="Ej: juan_sif" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Contraseña Inicial</label>
                        <input type="password" class="form-control" name="password" placeholder="••••••••" required>
                    </div>
                    
                    <div class="mb-3">
                        <label class="form-label">Rol del Sistema</label>
                        <select class="form-select" name="rol" required>
                            <option value="" disabled selected style="color: #a0aec0;">Seleccione un rol...</option>
                            <option value="1">Administrador</option>
                            <option value="2">Facturador</option>
                            <option value="3">Bodeguero</option>
                        </select>
                    </div>
                    
                    <div class="modal-footer border-top border-secondary px-0 pb-0 mt-4">
                        <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal" style="background-color: #20374c; border: none;">Cancelar</button>
                        <button type="submit" class="btn btn-success px-4 style-btn-success">Guardar Usuario</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Estilos del botón principal */
    .style-btn-success {
        background-color: #0db38e !important;
        border-color: #0db38e !important;
        color: #ffffff !important;
        font-weight: 500;
    }
    .style-btn-success:hover {
        background-color: #0aa280 !important;
    }

    /* CORRECCIÓN DE CAJAS DE TEXTO (INPUTS Y SELECTS) */
    .modal-body .form-control, 
    .modal-body .form-select {
        background-color: #0b151d !important;      /* Fondo bastante oscuro para el contraste */
        border: 1px solid rgba(255, 255, 255, 0.2) !important; /* Borde sutil claro */
        color: #ffffff !important;                  /* TEXTO DE ESCRITURA BLANCO PURO */
        font-size: 0.95rem;
        padding: 10px 12px;
    }

    /* CORRECCIÓN DE LAS ETIQUETAS (LABELS) -> Ahora son turquesas y visibles */
    .modal-body .form-label {
        color: #0db38e !important;                  /* Turquesa brillante del SIF */
        font-weight: 600 !important;
        font-size: 0.8rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        margin-bottom: 6px;
        display: block;
    }

    /* CORRECCIÓN DE LOS TEXTOS DE SUGERENCIA (PLACEHOLDERS) */
    .modal-body .form-control::placeholder {
        color: #a0aec0 !important;                  /* Gris claro nítido y chillante */
        opacity: 1 !important; 
    }

    /* Opciones internas del selector desplegable */
    .modal-body .form-select option {
        background-color: #172a3a !important;       /* Mismo fondo del modal */
        color: #ffffff !important;
    }

    /* Efecto cuando el usuario hace clic para escribir */
    .modal-body .form-control:focus, 
    .modal-body .form-select:focus {
        background-color: #0b151d !important;
        border-color: #0db38e !important;
        box-shadow: 0 0 0 0.25rem rgba(13, 179, 142, 0.3) !important;
        color: #ffffff !important;
    }
</style>