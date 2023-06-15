<div class="  modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class=" text-black modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="editarModalLabel">Editar registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="actualizar.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" id="id" name="id">

                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="año" class="form-label">Año:</label>
                        <input type="number" name="año" id="año" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <textarea name="descripcion" id="descripcion" class="form-control" rows="3" required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="genero" class="form-label">Género:</label>
                        <select name="genero" id="genero" class="form-select" required>
                            <option value="">Seleccionar...</option>
                            <?php while ($row_genero = $generos->fetch_assoc()) { ?>
                                <option value="<?php echo $row_genero["id"]; ?>"><?= $row_genero["nombre"] ?></option>
                            <?php } ?>

                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="plataforma" class="form-label">Plataforma:</label>
                        <select name="plataforma" id="plataforma" class="form-select" required>
                            <option value="">Seleccionar...</option>

                            <?php while ($row_plataforma = $plataformas->fetch_assoc()) { ?>
                                <option value="<?php echo $row_plataforma["id"]; ?>"><?= $row_plataforma["nombre"] ?></option>
                            <?php } ?>

                        </select>
                    </div>

                    <div class="mb-3">
                                <img id="img-poster" width="100">
                    </div>
                                
                    <div class="mb-3">
                        <label for="poster" class="form-label">Poster:</label>
                        <input type="file" name="poster" id="poster" class="form-control" accept="image/jpeg">
                    </div>

                    <div class="">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-success"><i class="fa-solid fa-floppy-disk"></i>Actualizar</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>