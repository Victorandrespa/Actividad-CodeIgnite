<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>Equipo</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <h2 class="my-4">Update Equipo</h2>
                <form action="<?= base_url('editar_equipo') ?>" method="post">

                    <label for="txt_id" class="form-label">Equipo Id:</label>
                    <input type="text" name="txt_id" id="txt_id" class="form-control"
                        value="<?= $datos['equipo_id'] ?>" readonly>

                    <label for="txt_no_serie" class="form-label">No. Serie:</label>
                    <input type="text" name="txt_no_serie" id="txt_no_serie" class="form-control"
                        value="<?= $datos['no_serie'] ?>">

                    <label for="txt_marca_id" class="form-label">Marca ID:</label>
                    <input type="text" name="txt_marca_id" id="txt_marca_id" class="form-control"
                        value="<?= $datos['marca_id'] ?>">

                    <label for="txt_descripcion" class="form-label">Descripcion:</label>
                    <input type="text" name="txt_descripcion" id="txt_descripcion" class="form-control"
                        value="<?= $datos['descripcion'] ?>">

                    <label for="txt_fecha_compra" class="form-label">Fecha Compra:</label>
                    <input type="text" name="txt_fecha_compra" id="txt_fecha_compra" class="form-control"
                        value="<?= $datos['fecha_compra'] ?>">

                    <label for="txt_precio" class="form-label">Precio:</label>
                    <input type="text" name="txt_precio" id="txt_precio" class="form-control"
                        value="<?= $datos['precio'] ?>">

                    <label for="txt_tipo_equipo" class="form-label">Tipo Equipo:</label>
                    <input type="text" name="txt_tipo_equipo" id="txt_tipo_equipo" class="form-control"
                        value="<?= $datos['tipo_equipo'] ?>">

                    <label for="txt_empleado_id" class="form-label">Empleado ID:</label>
                    <input type="text" name="txt_empleado_id" id="txt_empleado_id" class="form-control"
                        value="<?= $datos['empleado_id'] ?>">

                    <button type="submit" class="btn btn-outline-dark mt-3 w-100">Guardar</button>

                </form>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>
</body>

</html>