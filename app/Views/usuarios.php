<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<title>Usuarios</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="my-2">Usuarios</h2>

                <div class="d-flex flex-row justify-content-between align-items-center">

                    <a href="verLibros" class="btn btn btn-outline-danger">Home</a>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-dark my-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal2">
                        <i class="bi bi-person-plus-fill"></i>
                    </button>

                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Usuario</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="agregarUsuario" method="post">

                                    <label for="txt_id" class="form-label">ID:</label>
                                    <input type="number" name="txt_id" id="txt_id" class="form-control">

                                    <label for="txt_usuario" class="form-label">Usuario:</label>
                                    <input type="text" name="txt_usuario" id="txt_usuario" class="form-control">

                                    <label for="txt_email" class="form-label">Email:</label>
                                    <input type="email" name="txt_email" id="txt_email" class="form-control">

                                    <label for="txt_password" class="form-label">Password:</label>
                                    <input type="password" name="txt_password" id="txt_password" class="form-control">

                                    <label for="txt_estado" class="form-label">Estado:</label>
                                    <input type="number" name="txt_estado" id="txt_estado" class="form-control">

                                    <label for="txt_rol_id" class="form-label">Rol ID:</label>
                                    <input type="number" name="txt_rol_id" id="txt_rol_id" class="form-control">

                                    <button type="submit" class="btn btn-outline-primary mt-2">Guardar</button>

                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>


                <?php if (session()->getFlashdata('mensaje')): ?>
                    <div id="mensaje" class="alert alert-success">
                        <?= session()->getFlashdata('mensaje'); ?>
                    </div>
                <?php endif; ?>

                <script>
                    setTimeout(function () {
                        let mensaje = document.getElementById('mensaje');
                        if (mensaje) {
                            mensaje.style.display = 'none';
                        }
                    }, 3000); // 3000 milisegundos = 3 segundos
                </script>



                <table class="table mt-3 table-hover table-bordered">
                    <thead class="table-dark text-center">
                        <tr>
                            <th>ID</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Estado</th>
                            <th>Rol Id</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($datos as $empleado) {
                            # code...
                        
                            ?>

                            <tr>
                                <td><?php echo ($empleado['usuario_id']) ?></td>
                                <td><?= $empleado['usuario']; ?></td>
                                <td><?= $empleado['email']; ?></td>
                                <td><?= $empleado['PASSWORD']; ?></td>
                                <td><?= $empleado['estado']; ?></td>
                                <td><?= $empleado['rol_id']; ?></td>
                                <td class="d-flex justify-content-center gap-2 ">
                                    <a href="<?= base_url('update_usuario/') . $empleado['usuario_id']; ?>" class="btn btn-outline-dark"><i class="bi bi-pencil"></i></a>
                                    <a href="<?= base_url('eliminar_usuario/') . $empleado['usuario_id']; ?>"
                                        class="btn btn-outline-danger"><i class="bi bi-trash"></i></a>
                                </td>
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