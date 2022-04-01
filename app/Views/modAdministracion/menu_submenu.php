<?= $this->extend('template/admin_template') ?>
<?= $this->section('content') ?>



<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Listado<small>de Rol_Modulo</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Settings 1</a>
                            <a class="dropdown-item" href="#">Settings 2</a>
                        </div>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <div id="datatable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="dataTables_length" id="datatable_length"><label>Show <select name="datatable_length" aria-controls="datatable" class="form-control input-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">50</option>
                                                    <option value="100">100</option>
                                                </select> entries</label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div id="datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="datatable"></label></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="datatable" class="table table-striped table-bordered dataTable no-footer" style="width: 100%;" role="grid" aria-describedby="datatable_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting_asc" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 178px;"></th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 266px;">ROL/MODULO</th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatable" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 132px;">ADMIN MENU</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">1</td>
                                                    <td>SUPER ADMINISTRADOR (Configuración General)</td>
                                                    <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Agregar Menú</button></td>
                                                </tr>
                                                <tr role="row" class="even">
                                                    <td class="sorting_1">2</td>
                                                    <td>ADMINISTRADOR (Plan de estudio)</td>
                                                    <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Agregar Menú</button></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">3</td>
                                                    <td>ADMINISTRADOR (Expedientes Graduados)</td>
                                                    <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Agregar Menú</button></td>
                                                </tr>
                                                <tr role="row" class="odd">
                                                    <td class="sorting_1">4</td>
                                                    <td>Usuario (Expedientes Graduados)</td>
                                                    <td><button type="submit" class="btn btn-success" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Agregar Menú</button></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--MODAL AGREGAR -->
                                <div class="modal" id="exampleModal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Agregar menú</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- start form for validation -->
                                                <form id="demo-form" data-parsley-validate>
                                                    <label for="fullname">Usuario:</label>
                                                    <input type="text" id="fullname" class="form-control" name="fullname" placeholder="SUPER ADMINISTRADOR (Configuración General)" required /><br>
                                                    <label>Listados de Menú:</label>
                                                    <p style="padding: 5px;">
                                                        <input type="checkbox" name="" id="hobby2" value="run" class="flat" /> Plan de Estudios
                                                        <br><br>
                                                        <input type="checkbox" name="" id="hobby3" value="eat" class="flat" /> Expedientes Graduados
                                                        <br><br>
                                                        <input type="checkbox" name="" id="hobby4" value="sleep" class="flat" /> Calificación Institucional
                                                        <br><br>
                                                        <span class="btn btn-primary">Guardar</span>
                                                </form>
                                                <!-- Tabla para mostrar menus que posee el Usuario -->
                                                <div class="x_content">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Menus</th>
                                                                <th>Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Plan de Estudios</td>
                                                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Expedientes Graduados</td>
                                                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Calificación Institucional</td>
                                                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end form for validations -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END MODAL -->

                                <!--MODAL EDITAR -->
                                <div class="modal" id="exampleModal" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Agregar menú</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- start form for validation -->
                                                <form id="demo-form" data-parsley-validate>
                                                    <label for="fullname">Usuario:</label>
                                                    <input type="text" id="fullname" class="form-control" name="fullname" placeholder="SUPER ADMINISTRADOR (Configuración General)" required /><br>
                                                    <label>Listados de Menú:</label>
                                                    <p style="padding: 5px;">
                                                        <input type="checkbox" name="" id="hobby2" value="run" class="flat" /> Plan de Estudios
                                                        <br><br>
                                                        <input type="checkbox" name="" id="hobby3" value="eat" class="flat" /> Expedientes Graduados
                                                        <br><br>
                                                        <input type="checkbox" name="" id="hobby4" value="sleep" class="flat" /> Calificación Institucional
                                                        <br><br>
                                                        <span class="btn btn-primary">Guardar</span>
                                                </form>
                                                <!-- Tabla para mostrar menus que posee el Usuario -->
                                                <div class="x_content">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Menus</th>
                                                                <th>Acción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Plan de Estudios</td>
                                                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Expedientes Graduados</td>
                                                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Calificación Institucional</td>
                                                                <td><button type="button" class="btn btn-danger">Eliminar</button></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- end form for validations -->
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--END MODAL -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Formulario para agregar MENÚ -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar menú</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="">
                <div class="col-md-12 col-sm-12 offset-md-12 right">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#agregarMenu"><i class="fa fa-plus"></i> Agregar menú</button>
                </div>
            </div>

            <!--MODAL -->
            <div class="modal" id="agregarMenu" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar menú</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- FORMULARIO PARA AGREGAR MENU -->
                            <div class="x_content">
                                <form method="POST" action="<?php echo base_url() . '/crear' ?>">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre del Menú (Categoria) <span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" id="nombreMenu" name="nombreMenu" required="required" class="form-control ">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccionar Icono<span class="required"></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <select class="form-control">
                                                <option>Icono 1</option>
                                                <option>Icono 2</option>
                                                <option>Icono 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Agregar</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <br>
                                </form>
                            </div>
                            <!-- end FORMULARIO PARA AGREGAR MENU -->
                        </div>

                    </div>
                </div>
            </div>
            <!--END MODAL -->
            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Menus</th>
                            <th >Acción</th>
                            <th>Admin Submenu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($datos as $key) : ?>
                            <tr>
                                <td><?php echo $key->nombreMenu ?></td>
                                <td >
                                    <a href="<?php  echo base_url().'/obtenerNombre'.'$key->menuId'?>" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                                    <a href="<?php  echo base_url().'/obtenerNombre'.'$key->menuId'?>" class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o"></i></a>
                                </td>
                                <td>
                                    <button type="submit" class="btn btn-success" data-toggle="modal" data-target="#agregarSubmenu"><i class="fa fa-plus"></i> Agregar Subenú</button>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>
            </form>
        </div>
    </div>
    <!-- End Formulario para agregar MENÚ -->

    <!-- Formulario para agregar SUBMENU -->
    <div class="x_panel">
        <div class="x_title">
            <h2>Agregar menú</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="dropdown-item" href="#">Settings 1</a>
                        </li>
                        <li><a class="dropdown-item" href="#">Settings 2</a>
                        </li>
                    </ul>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="">
                <div class="col-md-12 col-sm-12 offset-md-12 right">
                    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#agregarSubmenu"><i class="fa fa-plus"></i> Agregar Submenú</button>
                </div>
            </div>

            <!--MODAL -->
            <div class="modal" id="agregarSubmenu" tabindex="-1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Agregar Submenú</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <!-- FORMULARIO PARA AGREGAR SUBMENU -->

                            <div class="x_content">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre del Submenú <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" id="first-name" required="required" class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccionar Menú<span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <select class="form-control">
                                            <?php foreach ($datos as $key) : ?>
                                                <option><?php echo $key->nombreMenu ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <!-- end FORMULARIO PARA AGREGAR MENU -->
                        </div>
                    </div>
                </div>
            </div>
            <!--END MODAL -->

            <div class="x_content">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Submenus</th>
                            <th scope="col" colspan="2">Acción</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td>j</td>
                            <td><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                <button type="button" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </form>
        </div>
    </div>
    <!-- End Formulario para agregar SUBMENU -->
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
    let mensaje = '<?php echo $mensaje ?>';

    if (mensaje == '1') {
        swal(':D', 'Agregado', 'success');
    } else if (mensaje == '0') {
        swal(':c', 'No', 'error');
    }
</script>


<?= $this->endSection() ?>