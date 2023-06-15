<div class="modal fade" id="eliminarModal" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="text-dark modal-content">
            <div class="bg-danger modal-header">
                <h1 class="modal-title fs-5" id="eliminarModalLabel">Agregar registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Quieres eliminar el registro?
            </div>
            <div class="modal-footer">
                <form action="eliminar.php" method="post">
                    <input type="hidden" name="id" id="id">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>


                </form>
            </div>
        </div>
    </div>
</div>