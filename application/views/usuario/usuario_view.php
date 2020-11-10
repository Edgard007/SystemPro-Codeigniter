<center><h3>Gstión de Usuarios</h3></center>
<a class="btn btn-outline-primary mt-1" id="agregar">Agregar</a>
<br><br><br>
<table class="table table-bordered" id="tablaUser" width="100%">
    <thead>
        <th>Username</th>
        <th>Nombres</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Acciones</th>
    </thead>
    <tfoot>
        <th>Username</th>
        <th>Nombres</th>
        <th>Apellido</th>
        <th>Dirección</th>
        <th>Email</th>
        <th>Acciones</th>
    </tfoot>
    <tbody>
        <?php
            foreach ($usuario as $row){
                echo "
                    <tr>
                    <td>$row->username</td>
                    <td>$row->nombres</td>
                    <td>$row->apellidos</td>
                    <td>$row->direccion</td>
                    <td>$row->email</td>
                    <td><a class='btn btn-info editar' id='$row->id' style='color: white;'>editar</a>
                    <a class='btn btn-danger eliminar' id='$row->id' style='color: white;'>eliminar</a>
                    </td>
                ";
            }
        ?>
    </tbody>
</table>


<!-- modal Insertar -->

<!-- Modal -->
<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ingresar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="usuario/insertar" method="post">
                <div class="row mt-2">
                    <div class="col-md-6">
                        <input type="text" name="username" placeholder="username" class="form-control" required="true">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="nombre" placeholder="nombres" class="form-control" required="true">
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6">
                        <input type="password" name="password" class="form-control" placeholder="contraseña" required="true">
                    </div>
                    <div class="col-md-6">
                        <input type="password" name="salt" placeholder="Confirme su contraseña" class="form-control" required="true">
                    </div>
                </div>
                <div class="row  mt-2">
                    <div class="col-md-6">
                        <input type="text" name="apellido" placeholder="apellidos" class="form-control" required="true">
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="direccion" placeholder="direccion" class="form-control" required="true">
                    </div>
                </div>

                <div class="row mt-2">
                    <div class="col-md-6">
                        <input type="text" name="email" placeholder="email" class="form-control" required="true">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>


<!-- modal Editar -->

<!-- Modal -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="usuario/modificar" method="post">
                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" name="username" placeholder="username" id="usernameE" class="form-control" required="true">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="nombre" id="nombreE" placeholder="nombres" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="row  mt-2">
                        <div class="col-md-6">
                            <input type="text" name="apellido" id="apellidoE" placeholder="apellidos" class="form-control" required="true">
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="direccion" id="direccionE" placeholder="direccion" class="form-control" required="true">
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-6">
                            <input type="text" name="email"  id="emailE" placeholder="email" class="form-control" required="true">
                        </div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-success">Guardar</button>
            </div>
            </form>
        </div>
    </div>
</div>
