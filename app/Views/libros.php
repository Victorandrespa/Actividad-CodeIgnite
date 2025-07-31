<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<title>Libros</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="my-2">Libros</h2>

                <div class="d-flex flex-row justify-content-between align-items-center">

                    <a href="verEmpleados" class="btn btn btn-outline-danger">Ir a Usuarios</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark my-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">
                        <i class="bi bi-folder-plus"></i>
                    </button>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Libro</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="agregarLibro" method="post">
                                    <label for="txt_titulo" class="form-label">Titulo:</label>
                                    <input type="text" name="txt_titulo" id="txt_titulo" class="form-control">
                                    <label for="txt_autor" class="form-label">Autor:</label>
                                    <input type="text" name="txt_autor" id="txt_autor" class="form-control">
                                    <label for="txt_precio" class="form-label">Precio:</label>
                                    <input type="number" name="txt_precio" id="txt_precio" class="form-control">
                                    <label for="txt_codigo_libro" class="form-label">Codigo_libro:</label>
                                    <input type="text" name="txt_codigo_libro" id="txt_codigo_libro"
                                        class="form-control">

                                    <button type="submit" class="btn btn-outline-primary mt-2">Guardar</button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <table class="table mt-3 table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>Titulo</th>
                            <th>Autor</th>
                            <th>Precio</th>
                            <th>Codigo Libro</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $empleado) {
                            # code...
                        
                            ?>

                            <tr>
                                <td><?php echo ($empleado['titulo']) ?></td>
                                <td><?= $empleado['autor']; ?></td>
                                <td><?= $empleado['precio']; ?></td>
                                <td><?= $empleado['codigo_libro']; ?></td>
                            </tr>

                            <?php
                        }
                        ?>



                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>
</body>
</body>

</html>