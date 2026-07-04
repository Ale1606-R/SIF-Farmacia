<div class="custom-card">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h6 class="text-uppercase fw-semibold mb-0" style="color: var(--teal-primary);">
            <i class="fa-solid fa-warehouse me-2"></i>Gestión de Bodega y Lotes
        </h6>
        <div class="d-flex gap-2">
            <!-- Buscador con contraste de texto mejorado -->
            <input type="text" class="form-control form-control-sm" placeholder="Buscar medicamento..." 
                   style="background: var(--bg-main); border: 1px solid var(--bg-hover); color: #ffffff; font-weight: 500;">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-dark table-hover table-borderless">
            <thead>
                <tr>
                    <th>Medicamento</th>
                    <th>Lote</th>
                    <th>Stock</th>
                    <th>Fecha Ingreso</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody id="cuerpo-tabla">
                <!-- Indicador de carga sustituyendo al dato fantasma -->
                <tr>
                    <td colspan="5" class="text-center py-4">
                        <div style="color: var(--teal-primary);">
                            <i class="fa-solid fa-spinner fa-spin me-2"></i> Esperando conexión...
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<style>
    /* Ajuste para que el placeholder sea visible y legible */
    ::placeholder {
        color: #cccccc !important;
        opacity: 1;
    }
</style>