<div class="d-flex justify-content-between align-items-center mb-4 animate__animated animate__fadeIn">
    <div>
        <h4 class="fw-bold mb-1 text-white">Catálogo de Productos</h4>
        <p class="text-muted small mb-0">Gestión de inventario y parámetros de stock.</p>
    </div>
    <button class="btn btn-success d-flex align-items-center gap-2 px-3 style-btn-success" data-bs-toggle="modal" data-bs-target="#modalNuevoProducto">
        <i class="fa-solid fa-pills"></i> Nuevo Producto
    </button>
</div>

<div class="custom-card animate__animated animate__fadeIn">
    <div class="table-responsive">
        <table class="table table-dark table-borderless align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Stock Mín.</th>
                    <th>Requiere Receta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td colspan="5" class="text-center py-5">
                        <div class="d-flex flex-column align-items-center">
                            <div class="spinner-border text-success mb-3" role="status"></div>
                            <span class="text-white-50">Conectando con base de datos productos...</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="modalNuevoProducto" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content" style="background-color: #172a3a; border: 1px solid rgba(255,255,255,0.1);">
            <div class="modal-header border-bottom border-secondary">
                <h5 class="modal-title fw-bold text-white">Nuevo Producto</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form id="formNuevoProducto">
                    <div class="mb-3">
                        <label class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="row">
                        <div class="col-6 mb-3">
                            <label class="form-label">Stock Mínimo</label>
                            <input type="number" class="form-control" name="stock_min" required>
                        </div>
                        <div class="col-6 mb-3">
                            <label class="form-label">¿Requiere Receta?</label>
                            <select class="form-select" name="receta">
                                <option value="0">No</option>
                                <option value="1">Sí</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success w-100 style-btn-success">Guardar Producto</button>
                </form>
            </div>
        </div>
    </div>
</div>